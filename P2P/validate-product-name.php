<?php
include("database.php");
$result = $db->validateProductName($_POST['pname']);
echo $result;
?>