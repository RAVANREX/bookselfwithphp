<?php  require('config.php'); 
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
     <!-- for validation -->
    <script type='text/javascript' src='js/jq.js'></script>
  
    <script type='text/javascript' src='js/jquery.validate.js'></script>
    
     <!-- error css file -->
    <style type="text/css">
label.error{
	color:#900;
	margin-left:15px;
}
</style>
    
    
   <!-- for header style --> 
    
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


<script>
$(document).ready(function() {
jQuery.validator.setDefaults({
    errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
    }
});
jQuery.validator.addMethod("accept",function(value,element,param)
		return value.match(new RegExp("."+ param +"$"));
});


$("#frm").validate({ 
	
    
    rules:{
        ff:{
            required:true,
            fileupload: {accept:"(pdf)"}
        },
        tid:{
            required:true
            
        }
    },
    messages: { 
        ff:{
            required:"Input type is required",                  
            fileupload:"PDF only"
        },
        tid:{
            required:"type is required"
            
        }
    }
});
});

</script>
     
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
                                    <li><a href="index1.php">.Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                   <?php if(empty($_SESSION['info'])){  }else{ ?> <li><a href="upload.php">Upload</a></li>
                                    <li><a href="profile-update.php?uid=<?php echo $_SESSION['info']['uid']; ?>">profile&<br>password</a></li>
                                     <li><a href="view_files.php">view uploades</a></li>
                                      <?php } ?>
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
          LETS GET STARTED WITH
        </p><br>
        <p>
           THE BEST
        </p><br>
        <p>
          ONLINE LEARNING SYSTEM
        </p><br>
        <p>
        WORLD AT YOUR HAND 
      </p>
  </div>
</div><!-- SLIDER CLOSE -->
          <img border="0" alt="London Rubber Stamp Logo" src="images/a2.jpg" width="100%" height="auto">
</div><!-- HEADER_IMAGE CLOSE -->
        
         <h1 align="center">Search results</h1>

    <section>
       <form>
       <table align="center" cellspacing="2" cellpadding="2" border="1" width="100%">
       <thead align="center">
       <tr><th align="center">S.no.</th>
       <th align="center">files</th>
       <th align="center">About</th>
	<th align="center">view & download </th>
       </thead>
       <tbody>
       <?php
       
       $src=$_POST['sn'];
       
       $join="SELECT `durl`,`filename`,document.tid,type.tid,document.did,document.about FROM `document` INNER JOIN `status_document` ON document.did=status_document.did JOIN `type` ON type.tid=document.tid WHERE `status`=1 ORDER BY `did` DESC";
       $rs=mysqli_query($con,$join)or die(mysqli_error($con));
       $rb=mysqli_fetch_assoc($rs);
       $joi="SELECT `durl`,`filename`,document.tid,type.tid,document.did,document.about FROM `document` INNER JOIN `status_document` ON document.did=status_document.did JOIN `type` ON type.tid=document.tid  WHERE ( `filename`='$src' OR
 `about`='$src' OR `tname`='$src') AND (`status`=1) ORDER BY `did` DESC";
       $rc=mysqli_query($con,$joi)or die(mysqli_error($con));
       $i=0;
       while ($rk=mysqli_fetch_assoc($rc)){
           $i++;
 ?>      <tr>
        <td align="center"><h1><?php echo $i;?></h1></td>
		<td align="center"> <embed src="<?php echo $rk['durl']?>#toolbar=0" width="210px" height="297px" /><br><?php echo $rk['filename']?></td>
		<td ><?php echo $rk['about']?></td>    
		<td align="center"><a target="_blank" href="download.php?did=<?php echo $rk['did'] ?>" class="btn">Download</a></td>
		</tr><?php
}
		    
		?></tbody>
       </table>
       </form>
        </section><!-- .courses-wrap -->
    
        
     
          
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
          