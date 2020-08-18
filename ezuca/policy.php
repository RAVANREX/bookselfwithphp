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
        <p><h3>PRIVACY POLICY</h3> This privacy policy has been compiled to better serve those who are concerned with how their 'Personally Identifiable Information' (PII) is being used online. PII, as described in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.

What personal information do we collect from the people that visit our website?

When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address or other details to help you with your experience.

When do we collect information?

We collect information from you when you subscribe to a newsletter or enter information on our site.

How do we use your information?

We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features to send periodic emails regarding your order or other products and services.

How do we protect your information?

We do not use vulnerability scanning and/or scanning to PCI standards. We only provide articles and information. We never ask for credit card numbers. We use regular Malware Scanning. We do not use an SSL certificate because we do not ask for credit card numbers.

Do we use 'cookies'?

We do not use cookies for tracking purposes. You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser settings. Since each browser is a little different, look at your browser's Help Menu to learn the correct way to modify your cookies.

If you turn cookies off, some features will be disabled that make your site experience more efficient and may not function properly. However, you will still be able to place orders.

Third-party disclosure

We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when it's release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.

Third-party links

We do not include or offer third-party products or services on our website.

Google

Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en

We have implemented Google Display Network Impression Reporting. 

We, along with third-party vendors such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together to compile data regarding user interactions with ad impressions and other ad service functions as they relate to our website.

Opting out:

Users can set preferences for how Google advertises to you using the Google Ad Settings page. Alternatively, you can opt out by visiting the Network Advertising Initiative Opt Out page or by using the Google Analytics Opt Out Browser add on.

California Online Privacy Protection Act

CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law's reach stretches well beyond California to require any person or company in the United States (and conceivably the world) that operates websites collecting Personally Identifiable Information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals or companies with whom it is being shared. - See more at: http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf

According to CalOPPA, we agree to the following:

Users can visit our site anonymously.
Once this privacy policy is created, we will add a link to it on our home page or as a minimum, on the first significant page after entering our website.
Our Privacy Policy link includes the word 'Privacy' and can be easily be found on the page specified above.
You will be notified of any Privacy Policy changes on our Privacy Policy Page. You can change your personal information by emailing us.
How does our site handle Do Not Track signals?

We honor Do Not Track signals and Do Not Track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.

Does our site allow third-party behavioral tracking?

It's also important to note that we do not allow third-party behavioral tracking.

COPPA (Children Online Privacy Protection Act)

When it comes to the collection of personal information from children under the age of 13 years old, the Children's Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, United States' consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and safety online. We do not specifically market to children under the age of 13 years old.

Fair Information Practices

The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.

In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur, we will notify you via email within 7 business days.

We also agree to the Individual Redress Principle which requires that individuals have the right to legally pursue enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.

CAN SPAM Act

The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.

We collect your email address in order to market to our mailing list or continue to send emails to our clients after the original transaction has occurred.

To be in accordance with CANSPAM, we agree to the following:

Not use false or misleading subjects or email addresses.
Identify the message as an advertisement in some reasonable way.
Include the physical address of our business or site headquarters.
Monitor third-party email marketing services for compliance, if one is used.
Honor opt-out/unsubscribe requests quickly.
Allow users to unsubscribe by using the link at the bottom of each email.
If at any time you would like to unsubscribe from receiving future emails, you can follow the instructions at the bottom of each email and we will promptly remove you from ALL correspondence.

Contact

If there are any questions regarding this privacy policy, you may contact us at: hello@theparagraphproject.com

Last edited on September 19, 2016

   
Sign up with your email address to receive news and updates.

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

