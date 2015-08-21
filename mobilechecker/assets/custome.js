$(document).ready(function(){

var path= (window.location).toString().split ('=');

//$('#template').attr('src', path[1]);

//change path 2 in #livesite.
$('#livesite').attr('src', path[1]);


$('.dimg').click(function(e) {
    $('#template').attr('src',$(this).attr('data'));
	var cd=$(this).attr('data');
	$("#qrcodeCanvas").html("");
	$('#qrcodeCanvas').qrcode({
		text	: cd
	});	

});

$('.replace').click(function(e) {
    var mylink=$(this).attr('data');

	$(this).attr('href', mylink+path[1]);
	
});


});
