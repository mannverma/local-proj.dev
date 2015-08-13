<?php
include("database.php");
$db->updateProduct($_POST,$_FILES);
header("location:index.php#ajax/add-products.php");
?>