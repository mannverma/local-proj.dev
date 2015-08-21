<?php
class database
{
	private $host = "localhost";
	private $dbname = "p2p";
	private $user = "root";
	private $pass = "";
	private $url = "http://abisyscorp.com/p2p/product.php";
	private $pdo;
	public $site_title;
	public function __construct()
	{
		$this->site_title = "P2P Admin Panel";
		try
		{
			$this->pdo = new PDO("mysql:host=".$this->host."; dbname=".$this->dbname, $this->user, $this->pass);
			session_start();
		}
		catch(PDOException $Exception)
		{
			echo $Exception->getMessage();
			exit(0);
		}
	}
	public function setSessionData($var, $val)
	{
		$_SESSION[trim($var)] = trim($val);
	}
	public function unsetSessionData($var)
	{
		unset($_SESSION[$var]);
	}
	public function getAdminLogin($uname, $pword)
	{
		$query = $this->pdo->prepare("select * from admin where uname = :uname and pword = :pword");
		$query->bindParam(':uname', $uname, PDO::PARAM_STR);
	   	$query->bindParam(':pword', $pword, PDO::PARAM_STR);
		$query->execute();
		return ($query->rowCount() >= 1)?"yes":"no";
	}
	public function saveProduct($post, $files)
	{
		$query = $this->pdo->prepare("insert into products(name, speci, price, img, qr_img) value(?,?,?,?,?)");
		$query->execute(array($post['name'], $post['speci'], $post['price'], "No Image", "No Image"));
		$ID = $this->pdo->lastInsertId();
		include "functions.php";
		$root="product_img/";
		$first=$files['uploadphoto']['name'];
		if($first=='')
		{
			//header('location:'.$_SERVER['PHP_SELF']);
		}
		else
		{
			$thumbs = "product_img/";
			$thumb = "product_img/m/";
			if(($files['uploadphoto']['name'])!='')
			{
				$name=$files['uploadphoto']['name'];
				$name=explode('.',$name);
				$name1=$name[0];
				$name1=substr($name1,0,3);
				$name2=$name[sizeof($name)-1];
				$name2=strtoupper($name2);
				if($name2=='JPG' or $name2=='JPEG' or $name2=='GIF' )
				{
					
					$ids=$ID;
					$name3 = $ids.'.'.$name2;
					$target_path = $root.basename($name3); 
					if(move_uploaded_file($files['uploadphoto']['tmp_name'], $target_path)) 
					{
						createThumbs($thumbs,$thumb,500,"",$name3,$name3);
						createThumbs($thumbs,$thumbs,900,"",$name3,$name3);
					}
					else
					{
						$_SESSION['err']='Server is busy try after some time<br>';
					}
				}
				else
				{
					$_SESSION['err']='Please upload Correct image format jpg or gif .. <br>';
				}
			}
		}
		copy("https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$this->url."?p=".str_replace(" ","-",$post['name']),$thumbs."QR/".$name3);
		$query2 = $this->pdo->prepare("update products set img=?, qr_img=? where id=?");
		$query2->execute(array($name3, $name3, $ID));
		
		$_SESSION["save_product"] = ($query)?"yes":"no";
	}
	public function updateProduct($post, $files)
	{
		include "functions.php";
		
		$first=$files['uploadphoto']['name'];
		$root="product_img/";
			$thumbs = "product_img/";
			$thumb = "product_img/m/";
		$query = $this->pdo->prepare("select img from products where id=?");
			$query->execute(array($post['uid']));
			$r = $query->fetch();
		if($first!='')
		{
			
			$name=$files['uploadphoto']['name'];
			$name=explode('.',$name);
			$name1=$name[0];
			$name1=substr($name1,0,3);
			$name2=$name[sizeof($name)-1];
			$name2=strtoupper($name2);
			if($name2=='JPG' or $name2=='JPEG' or $name2=='GIF' )
			{
				$name3=$post['uid'].".".$name2;
				$target_path = $root.basename($name3); 
				unlink($thumbs.$r['img']);
				unlink($thumb.$r['img']);

				if(move_uploaded_file($files['uploadphoto']['tmp_name'], $target_path)) 
				{
					createThumbs($thumbs,$thumb,500,"",$name3,$name3);
					createThumbs($thumbs,$thumbs,900,"",$name3,$name3);
				}
				else
				{
					$_SESSION['err']='Server is busy try after some time<br>';
				}
			}
			else
			{
				$_SESSION['err']='Please upload Correct image format jpg or gif .. <br>';
			}
		}
		else
		{
			$name3 = $post['img'];
		}
		unlink($thumbs."QR/".$r['qr_img']);
		copy("https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$this->url."?p=".str_replace(" ","-",$post['name']),$thumbs."QR/".$name3);
		$query = $this->pdo->prepare("update products set name=?, speci=?, price=?, img=?, qr_img=? where id=?");
		$query->execute(array($post['name'], $post['speci'], $post['price'], $name3, $name3, $post['uid']));
		$_SESSION["update_product"] = ($query)?"yes":"no";
	}
	public function getProducts()
	{
		$query = $this->pdo->prepare("select * from products order by id");
		$query->execute();
		return $query->fetchAll();
	}
	public function editProduct($id)
	{
		$query = $this->pdo->prepare("select * from products where id=?");
		$query->execute(array($id));
		$_SESSION["edit_product"] = ($query)?$query->fetch():"no";
	}
	public function deleteProduct($id)
	{
		$query = $this->pdo->prepare("select * from products where id=?");
		$query->execute(array($id));
		if($query)
		{
			$res = $query->fetch();
				unlink("product_img/".$res['img']);
				unlink("product_img/m/".$res['img']);
				unlink("product_img/QR/".$res['qr_img']);
				
			$query2 = $this->pdo->prepare("delete from products where id=?");
			$query2->execute(array($id));
			if($query2)
			{
				$_SESSION["delete_product"] = "yes";
			}
			else
			{
				$_SESSION["delete_product"] = "no";
			}
		}
		else
		{
			$_SESSION["delete_product"] = "no";
		}
	}
	public function getSession($var)
	{
		if(isset($_SESSION[$var]))
		return $_SESSION[$var];
	}
	public function validateProductName($pname)
	{
		$query = $this->pdo->prepare("select * from products where lower(name)=?");
		$query->execute(array(strtolower($pname)));
		return ($query->rowCount() >= 1)?"false":"true";
	}
	public function getProductById($id)
	{
		$query = $this->pdo->prepare("select * from products where id=?");
		$query->execute(array($id));
		return $query->fetch();
	}
}
$db = new database();
?>