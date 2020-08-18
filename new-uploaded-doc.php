<?php require("config.php");?>
<?php require('check_seesion.php')?>
<?php require("admin_menu.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>new-upload-doc</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top">

	<h1 align="center">New-Uploaded-doc</h1>
	<div class="content-wrapper" align="center">
	<form method="get">
	<table align="center" cellspacing="2" cellpadding="2" border="1" width="100%">
	<thead>
	<tr><th>Serial number</th>
	<th>Uploaded User</th>
	<th>About Document</th>
	<th>Document name</th>
	<th>Document type</th>
	<th>View Document</th>
	<th>No. of Download</th>
	<th>Approve</th>
	<th>Suspend</th>
	</tr></thead>
	<tbody>
	<?php $join="SELECT `fname`,`about`,`tname`,`durl`,`nofd`,`appid`,`filename` FROM document LEFT
JOIN download ON download.did=document.did JOIN status_document ON status_document.did=document.did JOIN type ON type.tid=document.tid JOIN
user ON user.uid=document.uid WHERE `status`=0";
$rs=mysqli_query($con,$join)or die(mysqli_error($con));
?><?php

	        $i=0;
		while($rec=mysqli_fetch_assoc($rs)){
		    $i++;
		    $appid=$rec['appid'];


		   ?><tr>
		<td align="center"><h5><?php echo $i?></h5></td>
		<td align="center"><h5><?php echo $rec['fname']?></h5></td>
		<td align="center"><?php echo $rec['about']?></td>
		<td align="center"><?php echo $rec['filename']?></td>
		<td align="center"><?php echo $rec['tname']?></td>
		<td align="center"><a   target="_blank" href="ezuca/<?php echo $rec['durl']?>">View</a> </td>
		<td align="center"><?php echo $rec['nofd']?></td>
		<td align="center"><a href="1n.php?appid=<?php echo $rec['appid'];?>" >APPROVE</a></td>
    <td align="center"><a href="2n.php?appid=<?php echo $rec['appid'];?>" >SUSPEND</a></td>
		</tr><?php
		    }
		    if (isset($_GET['msg'])){
		        echo $_GET['msg'];
		    }
		?></tbody></table></form></div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    

</body>
</html>
