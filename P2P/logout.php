<?php
if(isset($_GET['log']))
{
	if($_GET['log'] == "admin")
	{
		include("database.php");
		$db->unsetSessionData("username");
		echo $_SESSION['username'];
		header("location:login.php");
	}
}

?>
