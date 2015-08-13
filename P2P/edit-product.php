<?php
include("database.php");
$db->editProduct($_GET['id']);
header("location:index.php#ajax/add-products.php");
?>