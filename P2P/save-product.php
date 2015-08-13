<?php
include("database.php");
$db->saveProduct($_POST, $_FILES);
header("location:index.php#ajax/add-products.php");
?>