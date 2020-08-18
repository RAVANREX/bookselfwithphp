<?php require("config.php");?>
<?php require("admin_menu.php");?>
<?php $src="SELECT * FROM `user` WHERE 1";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>add-doc</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body  class="fixed-nav sticky-footer bg-light" id="page-top">
	<h1 align="center">User List</h1>
<div class="content-wrapper" align="center">
	<form >
	<table align="center" cellspacing="2" cellpadding="2" border="1" width="100%">
	<thead>
	<tr><th>Serial number</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Password</th>
	<th>Date of Birth</th>
	<th>Gender</th>
	<th>Phone No</th>	
	</tr></thead>
	<tbody><?php
	        $i=0;
		while($rec=mysqli_fetch_assoc($rs)){
		    $i++;
		   ?><tr>
		<td align="center"><?php echo $i?></h5></td>    
		<td align="center"><?php echo $rec['fname']?></td>
		<td align="center"><?php echo $rec['lname']?></td>
		<td align="center"><?php echo $rec['email']?></td>
		<td align="center"><?php echo $rec['pwd']?></td>
		<td align="center"><?php echo $rec['dob']?></td>
	    <td align="center"><?php echo $rec['gender']?></td>
	    <td align="center"><?php echo $rec['ph']?></td></tr><?php 
		    }
		?></tbody></table></form>
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
 
</body>
</html>