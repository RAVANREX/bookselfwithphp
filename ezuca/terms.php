<?php require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- header style -->
    <style>
	.header_image{
   position: relative;
}

.header_image img{
}

.slider {
  top: 50%;
  margin-top: -30px;
	position: absolute;
	width: 100%;
  height: 60px;
  font-size: 50px;
  overflow: hidden;
	text-align: center;
}

.slider div, .slider div p {
  margin: 0;
  padding: 0;
}

.slider p {
	font-family: 'work Sans',sans-serif;
	font-weight: 200;
	color: #fff;
	letter-spacing: 2px;
}

.slider div {
  animation: slide 15s 2s infinite;
}

@keyframes slide {
  0% { margin-top: 0; }
  25% { margin-top: -120px; }
	50% { margin-top: -240px; }
	75% { margin-top: -360px; }
	100% { margin-top: 0; }
}
</style>
    
</head>
<body>
<section> 
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email d-flex align-items-center">
                              <i class="fa fa-envelo"></i><a class="foot-logo" href="#"><img src="images/logo.jpeg" width=70 height=50 alt="ASA"></a>
                              
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text lg-flex align-items-center">
                                <p><i class="fi fa-phon"></i><h1 ><b><i><u><font face="Comic sans MS" color="blue">A Learning Web Solution </font></u></i></b></h1></p>
                            </div><!-- .header-bar-text--> 
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        
                        
                                                        
                            
                            <div class="header-bar-menu">
                                <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                                    <?php if(empty($_SESSION['info'])){?><li><a href="registration.php"><h1><font face="Comic sans MS" color="blue">Register/</font></h1></a></li>
                                    <li><a href="login.php"><h1><font face="Comic sans MS" color="blue">/Login</font></h1></a></li><?php }else{
                                    ?><li><a href="logout.php"><h1><font face="Comic sans MS" color="blue">Log Out</font></h1></a></li><?php } ?>
                                </ul>
                            </div><!-- .header-bar-menu -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                             <?php if(empty($_SESSION['info'])){ ?><h1 class="site-title"><a href="#" rel="home" ><span>Welcome</span></a></h1><?php }else{ ?>
                                <h1 class="site-title"><a href="index.html" rel="home">Welcome<br><span><?php echo $_SESSION['info']['fname']; ?></span></a></h1>
                                <?php } ?>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"></li>
                                    <li><a <?php if(empty($_SESSION['info'])){ ?>href="index.php" <?php } else{ ?> href="index1.php" <?php } ?>>Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span>as</span>
                                    <span>s</span>
                                    <span>f</span>
                                    <span>f</span>
                                </div><!-- .hamburger-menu -->

                                <div class="header-bar-cart">
                                    <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->
        
        


<div class="header_image">
    <div class="slider">
      <div>
        <p>
          LETS GET STARTED WITH
        </p><br>
        <p>
           THE BEST ONLINE LEARNING SYSTEM
        </p><br>
        <p>
          WORLD AT YOUR HAND 
          
        </p><br>
        <p>
              </p>
  </div>
</div><!-- SLIDER CLOSE -->
          <img border="0" alt="London Rubber Stamp Logo" src="images/a3.jpg" width="100%" height="auto">
</div><!-- HEADER_IMAGE CLOSE -->


 
 
 
 
</section>
        

    <section>
      <div class="container"><div>
        <p><h3>Terms and Conditions</h3><br> What are Terms and Conditions
Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.

It’s up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, and where you maintain your legal rights against potential app abusers, and so on.

Terms and Conditions are also known as Terms of Service or Terms of Use.

This type of legal agreement can be used for both your website and your mobile app. It’s not required (it’s not recommended actually) to have separate Terms and Conditions agreements: one for your website and one for your mobile app.A Terms and Conditions is not required and it’s not mandatory by law. Unlike Privacy Policies, there’s no law or regulation on Terms and Conditions.

But having a Terms and Conditions gives you the right to terminate the access of abusive users or to terminate the access to users who do not follow your rules and guidelines.

It’s extremely important to have this agreement if you operate a SaaS app.

Here are a few examples how this agreement can help you:

If users abuse your website or mobile app in any way, you can terminate their account. Your “Termination” clause can inform users that their accounts would be terminated if they abuse your service.
If users can post content on website or mobile app (create content and share it on your platform), you can remove any content they created if it infringes copyright.Your Terms and Conditions will inform users that they can only create and/or share content they own rights to.Similarly, if users can register for an account and choose an username, you can inform users that they are not allowed to choose usernames that may infringe trademarks, i.e. usernames like Google, Facebook, and so on.
If you sell products or services, you could cancel specific orders if a product price is incorrect. Your Terms and Conditions can include a clause to inform users that certain orders, at your sole discretion, can be canceled if the products ordered have incorrect prices due to various errors.
And many more examples.
While a Terms and Conditions isn’t required by law, other platforms (especially those that you can create an app for) will often ask you for this agreement.

For example, Facebook asks for a Terms and Conditions for your app. This is required for the “Terms of Service URL” field when you submit your Facebook app for review:

Terms of Service URL field in Facebook app

Google Play Store or Apple App Store may also require you to have this agreement. Currently, both app stores only require you to have a Privacy Policy.

How to enforce Terms and Conditions
While creating and having a Terms and Conditions is important, it’s far more important to understand how you can make the Terms and Conditions enforceable.

You can enforce this legal agreement in various ways, but it always depends on your website or mobile app and what functionalities you offer to users:

Are you a simple, presentation-only website? In most simple websites or apps users can’t register or create content.
Are you a user-generated content website or app? In these websites and apps, users can register an account and create or share content.
And so on.
eBay uses two different notices to enforce their User Agreement page.

The footer of eBay has this text:

Use of this Web site constitutes acceptance of the eBay User Agreement and Privacy Policy

It links directly to eBay’s User Agreement and Privacy Policy page:

eBay footer: Links to User Agreement and Privacy Policy

Because of the position and how it’s linked these are called browsewrap agreements.

However eBay gives more notice of their legal agreements to who register for a new account:

eBay Sign-up: Highlight User Agreement & Privacy Policy

New users, in order to register for an account with eBay, must agree that:

They have read and accepted the User Agreement and Privacy Policy of eBay
They agree that they may receive communications from eBay and can change the preferences in My eBay section of the web site
They are at least 18 years old
This is called a clickwrap agreement, where there is a proper notice to users about some legal agreements before a user can do a certain action, i.e. register an account.

Facebook is another example:

</p>
<br>
<p>===== WE ARE HAPPY TO SERVE YOU =====</p>
</div>
    </section> 
 
 
 
 
 
 
 
    


    
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about"><a class="foot-logo" href="#"><img src="images/logo.jpeg" width=40 height=25 alt="ASA"></a>
                           
                            <p>ASA LEARNING WEBSITE SERVERS YOU LEARNING FREE OF COST WITH LATEST UPDATES AND INFORMATION AND FREE DOWNLOAD OF BOOKS. </p>

                            <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact Us</h2>

                            <ul>
                                <li>Email: ASA@gmail.com</li>
                                <li>Phone: (+91) 111 555 666</li>
                                <li>Address: 40 Baria Sreet 133/2 KOLKATA City, INDIA</li>
                            </ul>
                        </div><!-- .foot-contact -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="quick-links flex flex-wrap">
                            <h2 class="w-100">Quick Links</h2>

                            <ul class="w-50">
                                <li><a href="about.php">About </a></li>
                                <li><a href="terms.php">Terms of Use </a></li>
                                <li><a href="policy.php">Privacy Policy </a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>

                            
                        </div><!-- .quick-links -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="follow-us">
                            <h2>Follow Us</h2>

                            <ul class="follow-us flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="download-apps flex flex-wrap justify-content-center justify-content-lg-start align-items-center">
                            <a href="#"><img src="images/app-store.png" alt=""></a>
                            <a href="#"><img src="images/play-store.png" alt=""></a>
                        </div><!-- .download-apps -->

                    </div>

                    <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                        <div class="footer-bar-nav">
                            <ul class="flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                                
                                <li><a href="terms.php">Terms of Use</a></li>
                                <li><a href="policy.php">Privacy Policy</a></li>
                            </ul>
                        </div><!-- .footer-bar-nav -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->
    

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
        