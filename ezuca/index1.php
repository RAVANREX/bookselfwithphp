<?php require('config.php');
require('check_seesion.php');

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
    
    
    <!-- header slide image -->
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
<?php
$src="SELECT * FROM `user`";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
$rec=mysqli_fetch_assoc($rs);
	?>
    
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email d-flex align-items-center">
                               <i class="fa fa-envelo"></i><a class="foot-logo" href="#"><img src="images/logo.jpeg" width=70 height=50 alt="ASA"></a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text lg-flex align-items-center">
                                <p>   <i class="fi fa-phon"></i><h1><b><i><u><font face="Comic sans MS" color="blue">A Learning Web Solution </font></u></i></b></h1></p>
                            </div><!-- .header-bar-text -->
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        
                  
                        
                            <div class="header-bar-search">
                                <form class="flex align-items-stretch" method="post" action="search_code.php">
                                    <input type="search" name="sn" placeholder="What would you like to learn?">
                                    <button type="submit" value="" name="ok" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>

                                </form>
                            </div><!-- .header-bar-search -->

                            <div class="header-bar-menu">
                                <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                                    <?php if(empty($_SESSION['info'])){?><li><a href="registration.php"></a></li>
                                    <li><a href="login.php">Login</a></li><?php }else{
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
                                <h1 class="site-title"><a href="index1.html" rel="home">Welcome    <span><?php echo     $_SESSION['info']['fname']?></span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"></li>
                                    <li><a href="index1.php">.Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="upload.php">Upload</a></li>
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="profile-update.php?uid=<?php echo $_SESSION['info']['uid']; ?>">profile&<br>password</a></li>
                                     <li><a href="view_files.php">view uploades</a></li>
                                </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
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
          Stamps
        </p><br>
        <p>
          Trophies
        </p><br>
        <p>
          Custom Engraving
        </p><br>
        <p>
          Legal Supplies
      </p>
  </div>
</div><!-- SLIDER CLOSE -->
          <img border="0" alt="London Rubber Stamp Logo" src="images/a2.jpg" width="100%" height="auto">
</div><!-- HEADER_IMAGE CLOSE -->




     <h3 class="text-danger" align="center">      <?php

if(isset($_GET['msg'])){
  echo$_GET['msg'];
} ?></h3>
    <section class="featured-courses horizontal-column courses-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="heading flex justify-content-between align-items-center">
                            <h2 class="entry-title">Recent Document :</h2>

                            
                        </header><!-- .heading -->
                    </div><!-- .col -->
                   
<?php

if(isset($_GET['nxt'])){
  $nxt=$_GET['nxt'];
}else{
  $nxt=0;
} ?>
    <?php
    $uid=$_SESSION['info']['uid'];
    $sr="SELECT `durl`,`filename`,document.did FROM `document` INNER JOIN `status_document` on document.did=status_document.did WHERE `status`=1
 AND `uid`=$uid ORDER BY `did` DESC LIMIT $nxt,10  ";
    $rs=mysqli_query($con,$sr)or die(mysqli_error($con));
    $i=0;

    while($res=(mysqli_fetch_assoc($rs))){
      $nxt++;
      ?>

    <div class="col-12 col-lg-6">
                        <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">
                            <figure class="course-thumbnail">
                                <embed src="<?php echo $res['durl'] ?>#scrollbar=0&toolbar=0&statusbar=0&messages=0&navpanes=0"   width="210px" height="279px"></embed>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <div class="course-ratings flex align-items-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div><!-- .course-ratings -->

                                    <h2 class="entry-title"><a ><?php echo $res['filename']; ?></a></h2>

                                    <div class="entry-meta flex flex-wrap align-items-center">
                                        <div class="course-author"><a "><?php echo $_SESSION['info']['fname']; ?>&nbsp<?php echo $_SESSION['info']['lname']; ?> </a></div>


                                </header><!-- .entry-header -->

                                <footer class="entry-footer flex justify-content-between align-items-center">
                                    <div class="course-cost">
                                        <a class="free-cost" target="_blank" href="download.php?did=<?php echo $res['did'] ?>">Download</a>
                                    </div><!-- .course-cost -->
                                </footer><!-- .entry-footer -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <?php $i++; ?> <br>
                    <?php if($i==10) break;
                    }
                    ?>
 </div><!-- .row -->
</div><!-- .container -->
</section><!-- .courses-wrap -->
 <h1 align="center" >    <?php if($i==0){
    echo 'No More Document To Show';
     }?></h1>




 <div class="container" align="center">
   <a href="index1.php?nxt=<?php echo $nxt; ?>"><button>NEXT</button></a>
 </div>








   
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
