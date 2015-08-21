<?php

if($_SERVER['REQUEST_METHOD'] != ""){ echo "No Direct script allowed"; }
if(isset($_POST['url']))
{
	$url = $_POST['url'];
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	echo $data;
}
?>