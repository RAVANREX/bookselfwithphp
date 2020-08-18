<?php require("config.php")?>
<?php require('check_seesion.php')?>
<?php require ('count/unread-message-count.php');?>
<?php require ('count/new-doc-count.php');?>
<?php require ('count/sup-doc-count.php');?>
<?php require ('count/app-doc-count.php');?>
<?php require ('count/total-doc-count.php');?>
<?php require ('count/user-count.php');?>
<?php require ('count/download-count.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  
  <!-- css file for blocks  -->
 
  <link href="css/style.css" rel="stylesheet">
 
  
 
  
   <!-- js file for time change  -->
  <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<!-- css file for scrolling effect  -->
<style type="text/css">
#shiva
{
  width: 100px;
	height: 100px;
	background: red;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	border-radius: 50px;
  float:left;
  margin:5px;
}
.count
{
  line-height: 100px;
  color:white;
  margin-left:30px;
  font-size:25px;
}
#talkbubble {
   width: 120px;
   height: 80px;
   background: red;
   position: relative;
   -moz-border-radius:    10px;
   -webkit-border-radius: 10px;
   border-radius:         10px;
  float:left;
  margin:20px;
}
#talkbubble:before {
   content:"";
   position: absolute;
   right: 100%;
   top: 26px;
   width: 0;
   height: 0;
   border-top: 13px solid transparent;
   border-right: 26px solid red;
   border-bottom: 13px solid transparent;
}

.linker
{
  font-size : 20px;
  font-color: black;
}


</style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" onload="startTime()">
  <!-- Navigation-->
  <?php require("admin_menu.php") ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1 align="center">Dashboard of  <?php echo $_SESSION['inf']['fname']?><div id="txt"></div></h1>
          
          
          
          
          
          
        </div>
        
        </div> <section class="container">
        
        
        
        
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-users"></i>
              <div class="count"><div><span class="count"><?php echo $ux;?></span></div></div>
              <div class="title">Registered Users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-file-pdf-o"></i>
              <div class="count"><div><span class="count"><?php echo $x;?></span></div></div>
              <div class="title">New Document</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-check-square-o"></i>
              <div class="count"><div><span class="count"><?php echo $ax;?></span></div></div>
              <div class="title">Approved Document</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-close"></i>
              <div class="count"><div><span class="count"><?php echo $sx;?></span></div></div>
              <div class="title">Suspend Document</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          
          
           
       
                
        
        </section>
        <section class="container">
        
        
        
        
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box magenta-bg">
              <i class="fa fa-download"></i>
              <div class="count"><div><span class="count"><?php echo $dc;?></span></div></div>
              <div class="title">Download</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box lime-bg">
              <i class="fa fa-clone"></i>
              <div class="count"><div><span class="count"><?php echo $tx;?></span></div></div>
              <div class="title">Total Document</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box purple-bg">
              <i class="fa fa-envelope-o"></i>
              <div class="count"><div><span class="count"><?php echo $s;?></span></div></div>
              <div class="title">Unread messages</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box orange-bg">
              <i class="fa fa-file"></i>
              <div class="count"><div><span class="count"><?php echo $ax+$sx;?></span></div></div>
              <div class="title">Total approve & suspend</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          
          
           
       
                
        
        </section>
      
         </div>
               
        
        
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php require("footer.php") ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="log_out.php">Logout</a>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- For number rolling effect-->
  <script type="text/javascript">$('.count').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 4000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});</script>
</body>

</html>
