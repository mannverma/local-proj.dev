<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QR in Mail</title>
</head>

<body>
<?php if(isset($_GET['qr'])){ ?>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
	        <div class="box-content">        
                <form name="frm_qr_email" action="" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                <input type="hidden" name="qr_img" id="qr_img" value="<?php echo base64_decode($_GET['qr']); ?>">
                    <div class="form-group">
						<div class="col-sm-12">
							<input type="email" name="email" id="qr_eml" class="form-control" placeholder="Enter E-mail" data-toggle="tooltip" title="Enter E-mail">
                            <span id="msg"></span>
						</div>
                        <div class="col-sm-12 text-center">
							<button type="submit" id="qr_sub" name="submit" class="btn btn-primary btn-sm btn-app btn-circle">
								Send
							</button>
						</div>
					</div>
                    
                    
                </form>
			</div>
		</div>
	</div>
</div>
<?php } ?>    
<script>
$(document).ready(function(e) {
	$("#qr_sub").click(function(e) {
        e.preventDefault();
		$("#qr_sub").html('<i class="fa fa-spinner fa-spin"></i>');
		$.ajax({
			type: "POST",
			url: "sendmail.php",
			data: "qr=" + $("#qr_img").val() + "&email=" + $("#qr_eml").val(),
			success: function(res){
				$("#qr_sub").html('Send');
				if(res == "true")
				{	
					$("#msg").attr("style","color:#0DB506");
					$("#msg").html("QR code sent.");
				}
				else
				{
					$("#msg").attr("style","color:#E0060A");
					$("#msg").html("Error in sending QR code.");
				}
			}
		});
    });
});
</script>

</body>
</html>