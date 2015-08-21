<?php
class database
{
	private $host = "localhost";
	private $dbname = "mobilechecker";
	private $user = "root";
	private $pass = "";
	private $pdo = "";
	public $site_title = "";
	public function __construct()
	{
		$this->site_title = "Mobile Checker Website";
		try{
			$this->pdo = new PDO("mysql:host=" . $this->host . "; dbname=" . $this->dbname, $this->user, $this->pass);
			session_start();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			exit(0);
		}
	}
	public function addNewUser($post)
	{
		$query = $this->pdo->prepare("insert into users(first_name,last_name,email,password,date) values(?,?,?,?,?)");
		$query->execute(array($post['firstname'], $post['lastname'], $post['email'], md5($post['password']), date('Y-m-d')));
		if($query)
		{
			$this->setSession("email",$post['email']);
			return true;
		}
		else
		{
			return false;
		}
	}
	public function checkUserLogin($post)
	{
		$query = $this->pdo->prepare("select * from users where email=? and password=?");
		$query->execute(array($post['email'], md5($post['password'])));
		if($query->rowCount() >= 1)
		{
			$this->setSession("email", $post['email']);
			return true;
		}
		else
		{
			return false;
		}
	}
	public function setSession($var, $val)
	{
		$_SESSION[$var] = $val;
	}
	public function getSession($var)
	{
		if(isset($_SESSION[$var]))
		return $_SESSION[$var];
	}
	public function unsetSession($var)
	{
		if(isset($_SESSION[$var]))
		unset($_SESSION[$var]);
	}
}
$db = new database();

?>