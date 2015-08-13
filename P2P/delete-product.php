<?php
include("database.php");
$db->deleteProduct($_GET['id']);
header("location:index.php#ajax/add-products.php");
?>