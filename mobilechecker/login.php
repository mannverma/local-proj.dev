<?php
$err1 = $err2 = false;
include "database.php";
if(isset($_POST['signup']))
{
	$res = $db->addNewUser($_POST);
	if($res)
	{
		header("location:index.php");
	}
	else
	{
		$err1 = true;
	}
}
if(isset($_POST['login']))
{
	$res = $db->checkUserLogin($_POST);
	if($res)
	{
		header("location:index.php");
	}
	else
	{
		$err2 = true;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Mobile website checker</title>
	<link rel="stylesheet" href="css/login.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="src/custom.js" ></script>
    <?php
	if($err2)
	{
	?>
    <script>
	$(document).ready(function(e) {
        $("#aaa").click();
    });
	</script>
    <?php
	}
	?>
</head>
<body>
	<div class="form">

  <ul class="tab-group">
    <li class="tab active"><a href="#signup">Sign Up</a></li>
    <li class="tab"><a id="aaa" href="#login">Log In</a></li>
  </ul>

  <div class="tab-content">
    <div id="signup">
      <h1>Sign Up for Free</h1>
	<?php if($err1){ ?><h5 style="color:red;">Error : Unable to process request. Try Later.</h5> <?php } ?>
      <form action="" method="post">
        <div class="top-row">
          <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="firstname" />
          </div>

          <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="lastname" />
          </div>
        </div>

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" required autocomplete="off" name="email" />
        </div>

        <div class="field-wrap">
          <label>
            Set A Password<span class="req">*</span>
          </label>
          <input type="password" required autocomplete="off" name="password" />
        </div>

        <button type="submit" name="signup" class="button button-block" />Get Started</button>

      </form>

    </div>

    <div id="login">
      <h1>Welcome Back!</h1>
	<?php if($err2){ ?><h5 style="color:red;">Error : Invalid Login Details</h5><?php } ?>
      <form action="" method="post">
        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" required autocomplete="off" name="email" />
        </div>

        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password" required autocomplete="off" name="password" />
        </div>

        <p class="forgot"><a href="#">Forgot Password?</a></p>

        <button type="submit" name="login" class="button button-block" />Log In</button>

      </form>

    </div>

  </div>
  <!-- tab-content -->

</div>
<!-- /form -->
</body>
</html>