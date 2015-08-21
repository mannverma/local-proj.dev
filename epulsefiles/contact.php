<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<title>Epulse Web Info .::. php web development services|best graphic design company</title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="fav.png" />
	<!--<link rel="shortcut icon" href="favicon.ico">-->

    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="css/style-green.css" />
	<link rel="alternate stylesheet" type="text/css" media="screen" title="orange-theme" href="css/style-orange.css" />
    
    
    <script src="jquery/1.7.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    
    
    <!-- Css Switcher --> 
    <script src="js/styleswitch.js" type="text/javascript"></script>
    
    <!-- AJAX Contact Form -->
    <script type="text/javascript" src="code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
    <!-- AJAX Contact Form -->
	
    <!-- Responsive Navigation -->
    <script src="js/selectnav.min.js"></script>
    <!-- /Responsive Navigation -->
    
	<!-- Back to top -->
	<script>
    $(document).ready(function(){
    
        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
    
            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    
    });
    </script>
    <!-- /Back to top -->
    
    <!-- Google map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(31.620126,74.879349);
            var settings = {
                zoom: 18,
                center: latlng,
                mapTypeControl: false,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h2 id="firstHeading" class="firstHeading">Epulse Web Info</h2>'+
                '<div id="bodyContent">'+
                '<p>This is a pop up. You can put here your text.</p>'+
                '</div>'+
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            
            var companyImage = new google.maps.MarkerImage('images/marker.png',
                new google.maps.Size(70,85),<!-- Width and height of the marker -->
                new google.maps.Point(0,0),
                new google.maps.Point(35,220)<!-- Position of the marker -->
            );
    
            var companyShadow = new google.maps.MarkerImage('images/marker-shadow.png',
                new google.maps.Size(108,56),<!-- Width and height of the shadow marker -->
                new google.maps.Point(0,0),
                new google.maps.Point(30,190));<!-- Position of the shadow marker -->
    
            var companyPos = new google.maps.LatLng(31.620126,74.879349);
    
            var companyMarker = new google.maps.Marker({
                position: companyPos,
                map: map,
                icon: companyImage,
                shadow: companyShadow,
                title:"Epulse Web Info",
                zIndex: 3});
            
            
            
            google.maps.event.addListener(companyMarker, 'click', function() {
                infowindow.open(map,companyMarker);
            });
        }
    </script>
    <!--/Google map -->
    
    
    <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-26593871-1', 'auto');
 ga('send', 'pageview');

</script>
    
</head>

<body onload="initialize()">


<!-- Header Background -->
<div id="header-bg"></div>

<div id="sub-header-bg"></div>
<!-- / Header Background -->	


<!-- Main Container -->
<div id="body-wrapper">





	<?php
	include_once("header.php");
	?>
    
    
    
    
    
    <!-- Content -->
    <div id="content" class="container clearfix">
    
    
            <!-- Back to top -->
            <p id="back-top" style="display: block;">
                <a href="#top"><span></span></a>
            </p>
            <!-- /Back to top -->    
    
    
    
        
        <!-- Page title -->
        <nav id="page-title" >
        
        	<h1>Contact us</h1>
        
        </nav>
        <!-- /Page title -->
        
         
        
        
    
    </div>
    <!-- /Content -->        

    
        
</div>
<!-- /Main Container -->  




      
	<!-- Contact Container --> 
	<div id="contact-map">
    	
        <!-- Contact Info -->
    	<div id="contact-info">
        
        
        	<div class="one-fourth">
            
            	<div id="contact-details">
            	
                    <h4>Contact details</h4>
                    
                    <p> 
                        542 Mahna Singh Road<br>
                        Amritsar, Punjab 143001<br>
                        INDIA<br><br>
                        
                        Cell: 9780070571 , 9888747409<br>
                        Phone: +91-0183-5005542 - 6542<br>
                        Email: epulsewebinfo@gmail.com<br>
                        Web: www.epulsewebinfo.com
                    </p>
                
                </div>
            
            </div>
        
        	
            
            	<div class="three-fourth last">
                
                	<!-- Comments Form -->
            		<div id="contact-form">
            		
                    
                        <h4>Send us a message</h4>
        				
                        <div id="message"></div>
                        <form method="post" action="http://clapat.ro/themes/creative/contact.php" name="contactform" id="contactform">
                        	
                            <input name="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" >
                            <input name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" >
                            <input name="phone" type="text" id="phone" size="30" onfocus="if(this.value == 'Phone') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Phone'; }" value="Phone" class="last" >
                            <textarea name="comments" cols="40" rows="3" id="comments" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" value="Message">Message</textarea>
                            
                            <input type="submit" class="btn-image" id="submit" value="Submit" />
                            
                        </form>
                
                	</div>
                	 <!-- /Comments Form -->
            </div>
               
        
        </div>		
		<!-- /Contact Info -->
        
        
            <!-- Map-->
            <div id="map_canvas" style="width:100%; height:100%"></div>
            <!--End Map-->
        
        
        </div>
        <!-- /Contact Container -->
        <?php
		include_once("footer.php");
		?>
</body>
</html>