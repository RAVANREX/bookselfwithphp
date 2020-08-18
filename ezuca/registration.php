<?php  require('config1.php');  ?>
<?php require 'search_email.php';?>

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
<body class="single-courses-page">










<!-- error jq file -->
 <script>



 
 function showUser(str){
		email=str
		$.ajax({
			type:"POST",
			url:"search_email.php",
			data:{email:email}
		}).done(function(resp){
			$("#txtHint").html(resp);
			});
	}






 
$(document).ready(function() {
	jQuery.validator.addMethod("nameonly", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z]+$/);
},"Only alphabets Allowed.");

jQuery.validator.addMethod("email", function(value, element) {
    return this.optional(element) || value == value.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
},"Please enter valid email.");

jQuery.validator.addMethod("mobile_no", function(value, element) {
    return this.optional(element) || value == value.match(/^\d{10}$/);
},"Please enter valid mobile number.");

jQuery.validator.setDefaults({
    errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
    }
});

    $("#frm").validate({
		rules:{
			fname:{
				required:true,
				nameonly:true
			},
			mname:{
				
				nameonly:true
			},
			lname:{
				required:true,
				nameonly:true
			},
			email:{
				required:true,
				email:true
			},
			pass:{
				required:true,
				minlength:6,
				maxlength:25
			},
			
			cpwd:{
				required:true,
				equalTo:$("#pass")
			},
			dob:{
				required:true
				
			},
			gender:{
				required:true
			},
			
			phn:{
				required:true,
				mobile_no:true
			},
			sans:{
				required:true
				
			}
			
		},
		messages:{
			fname:{
				required:'Please enter your first name'
			},
			
			lname:{
				required:'Please enter your last name'
			},
			email:{
				required:'Please enter your email-id',
				email:'valid email id needed'
			},
			pass:{
				required:'Please enter your password',
				minlength:'Password atleast 6 character',
				maxlength:'Plassword maximum 25 caharacter'
			},
			cpwd:{
				required:'Please enter your confirm password',
				equalTo:'Confirm password does not match'
			},
			dob:{
				required:'Please enter Date of birth'
			},
			phn:{
				required:'Please enter phone no.',
					mobile_no:'Please enter a valid phone no. '
			
		},
		sans:{
			required:'security answere is required',
			
		},
		}
	});
});

</script>










   

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
                        
                        
                            
                            
                            
                            
                            
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.html" rel="home">WEL<span>COME</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"></li>
                                    <li><a href="index.php">.Home</a></li>
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

<h1 align="center" class="text-danger"><?php if(isset($_GET['msg'])){
    echo $_GET['msg'] ;
}?></h1>
<h1 align="center">Registration Form</h1>
    
          <div class="content-wrapper">
      <div class="container-fluid">
        
        <form name="frm" id="frm" method="post"  class="container"  action="registration-code.php" >
          <table cellpadding="15" id="tab1" align="center">
            <tr>
              <td><b>First name</b></td>

              <td><input type="text" id="fname" name="fname" placeholder="First Name" ><span id="invalid-fname"></span></td></tr>
              <tr><td><b>Middle name</b></td>
              
               <td>  <input type="text" id="mname" name="mname" placeholder="Middle Name" ><span id="invalid-mname"></span></td></td></tr>
              <tr>   <td><b>Last name</b></td>
            <td>   <input type="text" id="lname" name="lname" placeholder="Last Name" ><span id="invalid-lname"></span></td>
                   
              </tr><tr>
  <td><b>Email Id</b></td>
  <td><input type="email" id="email" name="email" placeholder="Enter Email Id"   onBlur="showUser(this.value)">
  <label for="txtHint" id="txtHint"><span id="invalid-email"></span></label></td>
  
</tr>
<tr><td><b>Password</b></td>
  <td><input type="password" id="pass" name="pass" placeholder="Enter Password" ><span id="invalid-pass"></span></td>
  </tr>
  <tr><td><b>Re-enter Password</b></td>
  <td><input type="password" id="cpwd" name="cpwd" placeholder="Re-Enter Password" ><span id="invalid-cpwd"></span></td>
  </tr>
  <tr><td><b>Date of Birth</b></td>
    <td><input type="date" id="dob" name="dob"><span id="invalid-dob"></span></td>
    
  </tr>
  <tr>
    <td><b>Gender</b></td>
    <td><input type="radio" id="gender" name="gender" value="male" checked>Male
      <input type="radio" id="gender" name="gender" value="female">Female</td>
      
      <tr>
        <td><b>Security Question</b></td>
          <td><select id="sq" name="sq">
            <option value="Enter favourite food name" selected>Enter favourite food name</option>
            <option value="Enter your school name">Enter your school name</option>
            <option value="Enter your favourite animal">Enter your favourite animal</option>
            
          </select></td>
          
          <tr>
          <td><b>Security Answer</b></td>
          <td><input type="text" id="sans" name="sans" ><span id="invalid-sans"></span></td>
        
        </tr>
        <tr><td><b>Phone No.</b></td>
          <td><input type="text" id="phn" name="phn" ><span id="invalid-phn"></span></td>
          
        </tr>
          <tr>
   		<td colspan="2" align="center"> &nbsp;<input type="submit" name="ok" class="btn btn-primary btn-block"  value="Register"></td>
   </tr>
   

</table>
</form>
          </div></div>
          
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
          


<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>






    
    
    
     <!-- ajax for email check -->
    <script>

</script>

</body>
</html>
