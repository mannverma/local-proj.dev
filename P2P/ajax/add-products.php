<?php include_once("../database.php"); ?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="#">Products</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
        
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-shopping-cart"></i>
					<span>Product Form</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
            <?php
			if($db->getSession("delete_product") == "yes")
			{
				?>
                <p class="bg-success">Product Deleted Successfully!</p>
                <?php
				$db->unsetSessionData("delete_product");
			}
			if($db->getSession("delete_product") == "no")
			{
				?>
                <p class="bg-danger">Error Occurred While Deleting Product!</p>
                <?php
				$db->unsetSessionData("delete_product");
			}
			if($db->getSession("update_product") == "yes")
			{
				?>
                <p class="bg-success">Product Updated Successfully!</p>
                <?php
				$db->unsetSessionData("update_product");
			}
			if($db->getSession("update_product") == "no")
			{
				?>
                <p class="bg-danger">Error Occurred While Updating Product!</p>
                <?php
				$db->unsetSessionData("update_product");
			}
			if($db->getSession("save_product") == "yes")
			{
				?>
                <p class="bg-success">Product Saved Successfully!</p>
                <?php
				$db->unsetSessionData("save_product");
			}
			if($db->getSession("save_product") == "no")
			{
				?>
                <p class="bg-danger">Error Occurred While Saving Product!</p>
                <?php
				$db->unsetSessionData("save_product");
			}
			$pid=$name=$price=$speci=$img=$lnk="";
			
			if($db->getSession("edit_product") != "no" && $db->getSession("edit_product") != NULL)
			{
				$arr = $db->getSession("edit_product");
				$pid = $arr['id'];
				$name = $arr['name'];
				$price = $arr['price'];
				$speci = $arr['speci'];
				$img = $arr['img'];
				$db->unsetSessionData("edit_product");
				$lnk="update-product.php";
			}
			?>
			<div class="box-content">
				<h4 class="page-header">Add Products</h4>
				<form class="form-horizontal" role="form" enctype="multipart/form-data" name="form_product" onSubmit="return valid(this);" action="<?php echo ($lnk == "update-product.php")?"update-product.php":"save-product.php"; ?>" method="post">
                	<input type="hidden" name="uid" value="<?php echo $pid; ?>">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                    
					<div class="form-group">
						<label class="col-sm-2 control-label">Product Name*</label>
						<div class="col-sm-4">
							<input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Product Name" data-toggle="tooltip" title="Enter Product Name"><br/>
                            <span id="nm_msg" style="color:#EF292D;"></span>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Product Specification</label>
						<div class="col-sm-10">
								<textarea class="form-control" name="speci" rows="5" id="wysiwig_simple" data-toggle="tooltip" title="Enter Product Specification"><?php echo $speci; ?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Product Price*</label>
						
						<div class="col-sm-2">
							<div class="input-group">
							  <span class="input-group-addon"><i class="fa fa-money"></i></span>
							  <input type="text" name="price" class="form-control" placeholder="Price" data-toggle="tooltip" title="Enter Product Price" value="<?php echo $price;?>">
							  <span class="input-group-addon"><i class="fa fa-usd"></i></span>
							</div>
						</div>
					</div>
                    <div class="form-group">
						<label class="col-sm-2 control-label">Product Image*</label>
                        <?php
                        if($img != "")
						{
						?>
						<div class="col-sm-1">
                        	<img class="img-rounded" src="product_img/m/<?php echo $img; ?>" style="max-height:50px; max-width:50px;" alt="">
                        </div>
                        <?php
						}
						?>
                        <div class="col-sm-3">
							<input type="file" name="uploadphoto" class="form-control" data-toggle="tooltip" title="Select Product Image">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" name="cancel" onClick="document.location='index.php';" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancel
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" name="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Submit
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
        <div class="box">
                    <div class="box-header">
                        <div class="box-name">
                            <i class="fa fa-bars"></i>
                            <span>Products List</span>
                        </div>
                        <div class="box-icons">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="expand-link">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                        <div class="no-move"></div>
                    </div>
                    <div class="box-content no-padding">
                        <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
                            <thead>
                                <tr>
                                    <th class="hidemob">Sr No.</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>QR Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- Start: list_row -->
                            <?php
							$res = $db->getProducts();
							foreach($res as $row)
							{
							?>
                                <tr>
                                    <td class="hidemob"><?php echo $row['id'];?></td>
                                    
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><a class="fancybox" rel="gallery1" href="product_img/<?php echo $row['img']; ?>" title="<?php echo $row['name'];?>"><img class="img-rounded" src="product_img/m/<?php echo $row['img']; ?>"></a></td>
                                    <td><a class="fancybox" rel="gallery1" href="product_img/QR/<?php echo $row['qr_img']; ?>" title="<?php echo $row['name'];?>"><img class="img-rounded" src="product_img/QR/<?php echo $row['qr_img']; ?>"></a> <a class="fancybox ajx" data-fancybox-type="ajax" href="QR_email_input.php?qr=<?php echo base64_encode($row['qr_img']);?>">Send in Mail</a></td>
                                    
                                    <td><a href="edit-product.php?id=<?php echo $row['id']; ?>" title="Edit Product"><i class="fa fa-edit"></i></a> | <a href="delete-product.php?id=<?php echo $row['id']; ?>" title="Delete Product"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            <?php
							}
							?>
                            <!-- End: list_row -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="hidemob">Sr No.</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>QR Code</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>
	</div>
</div>


<script type="text/javascript">
window.myvar = "";
function valid(frm)
{
	myvar = "";
	var parts = frm.action.split("/");
	var pg = parts[parts.length-1];
	if(frm.name.value.trim() == "")
	{
		alert("Field is mendatory");
		frm.name.focus();
		return false;
	}
	if(frm.price.value.trim() == "")
	{
		alert("Field is mendatory");
		frm.price.focus();
		return false;
	}
	if(frm.uploadphoto.value.trim() == "" && pg.trim() == "save-product.php")
	{
		alert("Field is mendatory");
		frm.uploadphoto.focus();
		return false;
	}
	$.ajax({
		type:"POST",
		url:"validate-product-name.php",
		data:"pname="+frm.name.value.trim(),
		async:false,
		success: function(res){
			if(res == "false")
			{
				$("#nm_msg").html("Product with the same name already exists.<br> Try with a different name.");
				myvar="true";
			}
		}
	});
	if(myvar == "true")
	{
		return false;
	}
	else
	{
		return true;
	}
}
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}

// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
// Create fancybox2 gallery
function DemoGallery(){
	$('.fancybox').fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	 $('a.ajx').fancybox({
            type: "ajax"
        });
}
$(document).ready(function() {
	
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Load Fancybox2 and make gallery in callback
	LoadFancyboxScript(DemoGallery);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
