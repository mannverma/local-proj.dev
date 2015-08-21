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
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    
    
    
    <script src="jquery/1.7.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    
    
    <!-- Css Switcher --> 
    <script src="js/styleswitch.js" type="text/javascript"></script>
    
    
    <!-- Pretty Photo -->
    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
	$("area[rel^='prettyPhoto']").prettyPhoto();
	
	$(".portfolio:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',theme:'pp_default',slideshow:4000, opacity: 0.50, deeplinking: false, overlay_gallery: false, autoplay_slideshow: false});
	
});
	</script>
    <!-- /Pretty Photo -->
    
    
    <!-- Responsive Navigation -->
    <script src="js/selectnav.min.js"></script>
    <!-- /Responsive Navigation -->
    
    
    
    
   
    <!--Back to top -->
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
    <!--/Back to top -->
    
    
    
    <!-- FlexSlider -->    
    <script src="js/jquery.flexslider.js"></script>

	<script type="text/javascript">
            $(function(){
              SyntaxHighlighter.all();
            });
            $(window).load(function(){
              $('.flexslider').flexslider({
                animation: "fade",
                start: function(slider){
                  $('body').removeClass('loading');
                }
              });
            });
	</script>
    <!-- /FlexSlider -->
    
    
    <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-26593871-1', 'auto');
 ga('send', 'pageview');

</script>
    
    
    
</head>

<body>



<!-- Header Background -->
<div id="header-bg"></div>

<div id="sub-header-bg"></div>
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
        	
        	<h1>Our Services</h1>
        	
        </nav>
        <!-- /Page title -->
        
        
        
        <!-- Main Content -->
        <div id="main">
            
<div class="post">
            
            	<div class="title">
                	<h2>Responsive Development</h2>
                </div>
                
                <div class="post-content">
                    <img src="images/flexslide5.jpg" alt="" class="image" />
                    <p align="justify">
A responsive web designed website is essential to reach out to a wide range of targeted customers, interact with them directly and generate good business. ePulse Web Info is a pioneer name in offering Responsive Web Designs for the business websites. We have a highly professional team of talented and experienced developers that can develop latest and trendy responsive web designs.   
We take project specific approach in executing each project, which involves forming an in-depth understanding of client's business, analyzing the marketplace and competition before commencing the project. We make sure that your website becomes a true extension of your business. We promise to deliver Responsive design as per your business demands. We offer best responsive web design solutions available in the market for our valued customers. We work with the motto to live up to the customer expectations with regular periodic reporting. 
Our responsive websites run from a single CMS, that makes it user friendly and easy to manage.



                    </p>
                                        
                </div>
            </div> 
        </div>            
            <?php include_once("sidebar.php"); ?>
    </div>
    <!-- /Content -->
        
</div>
<!-- /Main Container -->        

<?php include("footer.php"); ?> 
        
     

</body>
</html>
