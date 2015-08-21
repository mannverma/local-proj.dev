<!-- Header -->
    <div id="header" >

        <a href="index.php" id="logo"></a>
        <?php
		function checkin($arr)
		{
			$p=explode("/",$_SERVER['PHP_SELF']);
			$page=$p[sizeof($p)-1];
			if(in_array($page,$arr))
			{
				echo " class='current'";
			}
		}
        ?>
        <!-- Navigation -->
        <ul id="navigation">
            <li<?php checkin(array("index.php","")); ?>>
                <a href="index.php">Home</a>
            </li>
             <li<?php checkin(array("about.php")); ?>>
                <a href="about.php">About Us</a>
            </li>
            <li<?php checkin(array("website-development.php","graphic-designing.php","seo.php","e-commerce.php","responsive-development.php","application-development.php","services.php")); ?>>
                <a href="services.php">Services</a>
                <ul>
                    <li><a href="website-development.php">Website Development</a></li>
                    <li><a href="graphic-designing.php">Graphic Designing</a></li>
                    <li><a href="seo.php">SEO</a></li>
                    <li><a href="e-commerce.php">E-Commerce</a></li>
                    <li><a href="responsive-development.php">Responsive Develop.</a></li>
                    <li><a href="application-development.php">Application Develop.</a></li>
                </ul>
            </li>
            
            <li<?php checkin(array("training.php")); ?>>
                <a href="training.php">Training</a>
            </li>

           <?php /*?> <li<?php checkin(array("case-study.php")); ?>>
                <a href="case-study.php">Case Study</a>
            </li><?php */?>
            
<?php /*            <li<?php checkin(array("portfolio.php")); ?>>
                <a href="portfolio.php">Portfolio</a>
            </li> <?php */ ?>
            <li<?php checkin(array("career.php")); ?>>
                <a href="career.php">Career</a>
            </li>
            <li<?php checkin(array("blog.php")); ?>>
                <a href="#">Blog</a>
            </li>

            <li<?php checkin(array("contact.php")); ?>>
                <a href="contact.php">Contact Us</a>
            </li>

                
            
            
        </ul>
        <!-- /Navigation -->   
        
    
    </div>
    <!-- /Header -->
    <a id="float1" href="case-study.php"></a>