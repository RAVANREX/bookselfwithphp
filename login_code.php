<?php require("config.php"); ?>
<?php
$email=$_POST['email'];
$pass=$_POST['pass'];

$src="SELECT * FROM `admin` WHERE `email`='$email' AND `pass`='$pass'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['inf']=$rec;
	header('location:index.php');
	exit;
	
}else{
	header('location:login.php?msg=Invalid Email or password');
}
?>