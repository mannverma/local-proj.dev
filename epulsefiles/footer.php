<!-- Footer -->
        <div id="footer">
        
        	<div id="footer-center" class="container">
            
            	<div class="footer-left">
                	
                    <ul class="footer-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li class="footer-last"><a href="contact.php">Contact Us</a></li>
                    </ul>
                    
                   
                    
                    <ul class="footer-address">
                    	<li><img src="images/home-icon.png"/>542 Mahna Singh Road , Amritsar, Punjab 143001 (India)</li>
                        <li><img src="images/phone-icon.png"/>(+91) 978 007 0571</li>
                        <li><img src="images/email-icon.png"/>epulsewebinfo@gmail.com</li>
               		</ul>
                
                </div>	
                
                
                <div class="footer-right" id="footer-newsletter">
                
                	
                    <p>Newsletter</p>
                    <?php
					if(isset($_POST['newsl']))
					{
						mail("abisyssolutionsemp11@gmail.com","Newsletter Subscription","EMail Address ".$_POST['email']." has been subscribed for newsletter.");
                        
					}
					?>
                    <form id="newsletter" name="newsletter" method="post" action="">
                    	<input type="hidden" name="newsl" value="true">
                        <input type="text" onfocus="if(this.value == 'E-mail here'){ this.value = ''; }" onblur="if(this.value.trim() == '') { this.value = 'E-mail here'; }" value="E-mail here" class="newsletter" name="email">
                        <button type="submit">Submit</button>
                    </form>
                
                </div>
                
                
            
            </div>
            
            
            
            
            <div id="footer-bottom">
            
            	<div id="footer-center-bottom" class="container">
            
            	<!-- Copyright -->
                <ul class="copyright">
                    <li>© Copyright 2014 <a href="http://www.epulsewebinfo.com">EPULSEWEBINFO</a>. All rights reserved</li>
                </ul>
                <!-- /Copyright -->
    
                <!-- Social Links -->
                <ul class="social-links">                   
                    <li class="facebook"><a href="#">Facebook</a></li>
                    <li class="twitter"><a href="#">Twitter</a></li>
                    <li class="vimeo"><a href="#">Vimeo</a></li>
                    <li class="linkedin"><a href="#">LinkedIn</a></li>
                    <li class="dribble"><a href="#">Dribbleo</a></li>
                    <li class="google"><a href="#">Google</a></li>
                </ul>
                <!-- /Social Links -->
                
                </div>
            
            </div>
            
            
            
            
        
        </div>
        <!-- /Footer -->

