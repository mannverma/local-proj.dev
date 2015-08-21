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
    
    
    <!-- Progress bar animation-->
    <script>
		$(function() {
			$(".meter > span").each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});
	</script>
    <!--/Progress bar animation-->
    
	
    
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
    
        
    
    
    
<style>
.my-list li{font-size:15px; font-weight:bold; padding:7px;}
.no-format{font-weight:normal; font-size:12px; line-height:20px;}
</style>    
    
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
        <nav id="page-title">
        
        	<h1>Career with us</h1>
        
        </nav>
       
            
			<div class="post">
                <div class="post-content">
					<h1>Career</h1>
					<p>ePulse Web Info is committed to provide a flourishing career. We work with the motto of building a successful career along with professional skills. ePulse Web Info is dedicated to transform your unique experiences, skills and passions into a fruitful career. Join ePulse and enjoy a rich, prosperous and rewarding career.
        			</p>
                    <h1>Job Opening</h1>
					<p>
                    	<ol type="A" class="my-list">
                        <li>For content writer<br>
                        <span class="no-format">Job for Amritsar Only Need Content writers or Article writers who can work from home.<br>
						<b>Skills:</b>-Good Writing Skills in English, must have good vacabulary, good in grammer, must meet deadlines.
                        </span>
                        </li>
                        
                        <li>Software Programmer<br>
                        <span class="no-format">Those who know about PHP, Ajax, javascript, OS Flash designing, jquery, mysql, OS Commerce, E-Commerce, Drupal, Joomla, wordpress and web application.<br>
<b>Skills:</b>-Minimum One year experience.
                        </span>
                        </li>
                        </ol>
                    </p>
                    <h1>Drop your resume at</h1>
					<p><a href="contact.php">contactus@epulsewebinfo.com</a></p>
                    <h1>Or call</h1>
					<p>+91-9780070571</p>
                    <h2>So if you are looking to make a difference, this is the place to be. I wish you luck!</h2>
        		</div>
        	</div>
        
        
        
    
    </div>
        
    <!-- /Content -->

		
        

    
        
</div>
<!-- /Main Container -->        
<?php include_once("footer.php");?>
</body>
</html>
