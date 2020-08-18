<?php
require("config.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Update</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  
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
    
  
</head>
<body class="fixed-nav sticky-footer bg-light" id="page-top">

<script>
$(document).ready(function() {
jQuery.validator.setDefaults({
	   
    errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
    }
});

$("#reg").validate({ 
	
    
    rules:{
        name:{
            required:true,
           
        }
       
    },
    messages: { 
        name:{
            required:"Input type is required",                  
            
        }
       
    }
});
});


</script>
     




<?php require ("admin_menu.php"); ?>
<form name="reg" id="reg" action="add_code.php" method="post">
<h1 align="center">Add category</h1>
<div class="content-wrapper">
	<table align="center">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"  id="name"><span id="invalid-name"></span></td></tr>
	<tr>	<td>&nbsp;</td>
		<td><input type="submit" value="add category" name="ok"></td></tr></table></div></form>
		
 
	<!-- Bootstrap core JavaScript-->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    
	</body>
	</html>