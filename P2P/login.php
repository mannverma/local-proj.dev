<?php include("database.php");
if(isset($_SESSION['username']))
{
	if($_SESSION['username'] == "Adminuser")
	{
		header("location:index.php#ajax/dashboard.php");
	}
}
$err="";
if(isset($_POST['username']) && isset($_POST['password']))
{
	$result = $db->getAdminLogin($_POST['username'],md5($_POST['password']));
	if($result == "yes")
	{
		$db->setSessionData('username', 'Adminuser');
		$err = "";
		header("location:index.php#ajax/dashboard.php");
	}
	else
	{
		$err = "Invalid Login Details.";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $db->site_title;?></title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="css/style_v1.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		$(document).ready(function(e) {
            $('#reload').click(function() {
				$("#cap_img").attr('src', $("#cap_img").attr('src')+'?'+Math.random());
			});
        });
		function validate()
		{
			var frm = document.loginform;
			if(frm.username.value.trim() == "")
			{
				alert("Please fill the username");
				frm.username.focus();
				return;
			}
			if(frm.password.value.trim() == "")
			{
				alert("Please fill the password");
				frm.password.focus();
				return;
			}
			if(frm.captcha.value.trim() == "")
			{
				alert("Please fill the captcha");
				frm.captcha.focus();
				return;
			}
			$.ajax({
				type:"POST",
				url:"validate.php",
				data:"captcha="+frm.captcha.value.trim(),
				success:function(res){
					if(res == "no")
					{
						alert("Wrong code entered");
						frm.captcha.focus();
						return;
					}
					else
					{
						frm.submit();
					}
				}
			});
			
		}
		</script>
        
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="box">
				<div class="box-content">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
					<div class="text-center">
						<h3 class="page-header"><?php echo $db->site_title;?> Login Page</h3>
					</div>
                    <?php
					if($err != ""){ echo $err; }
					?>
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>
                    <div class="form-group">
						<label class="control-label">Enter Image Text</label><br>
                        <div class="row">
                        	<div class="col-lg-8">
                    			<input name="captcha"  class="form-control" type="text">
                        	</div>
                        	<div class="col-lg-4">
								<img src="captcha.php" id="cap_img" /> <a href="#" id="reload">Reload</a>
                            </div>
                        </div>
                    </div>
					<div class="text-center">
						<a href="javascript:validate();" class="btn btn-primary">Sign in</a>
					</div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>