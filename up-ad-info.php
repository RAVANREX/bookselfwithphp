<?php
require('config.php');
require('check_seesion.php');
$id=$_GET['id'];
if(isset($_POST['ok'])){
	$name=$_POST['name'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
	$oldpass=$_POST['oldpass'];
	$nwpass=$_POST['pass'];
	$cpass=$_POST['cpwd'];
	if($cpass==$nwpass){
	$upd="UPDATE `admin` SET `fname`='$name',`mname`='$mname',`lname`='$lname', `pass`='$nwpass' WHERE `aid`=$id";
	$res=mysqli_query($con,$upd)or die(mysqli_error($con));
	if($res>0){
		header('location:upcmp.php');
	}else{
			header('location:admin-update.php?msg=Your old password doesnot match');
		exit;
	}
}else{
	header('location:admin-update.php?msg=Confirm Password doesnot match');
}




}

?>
