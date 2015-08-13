<link rel="stylesheet" href="jquery.mobile-1.4.4.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="jquery.mobile-1.4.4.min.js"></script>
<?php    
    echo "<h1>Dress QR Code</h1><hr/>";
    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    
    
    //processing form input
    
    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('Product name cannot be empty! <a href="?">back</a>');
        if (trim($_FILES['image']['name']) == '')
            die('Product image cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'product'.md5($_REQUEST['data'].'|'.$_FILES['image']['name'].'|5').'.png';
		$link = "http://abisyscorp.com/temp/mytestfile.php?product=".$_REQUEST['data']."&img=".$_FILES['image']['name'];
        QRcode::png($link, $filename, "", 5);    
        
        
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
	}
    //config form
    echo '';
?>
<form action="index.php" method="post" enctype="multipart/form-data">
        Product Name:&nbsp;<input name="data" value="<?php (isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):'Abc Product');?>" /><br>
		<input type="file" name="image" /><br>
        <input type="submit" value="GENERATE"></form><hr/>