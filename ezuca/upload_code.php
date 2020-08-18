<?php
require("config.php");
require 'check_seesion.php';
/*echo "<pre>";
print_r($_FILES)*/

$fname=$_FILES['ff']['name'];
$ftype=$_FILES['ff']['type'];
$fsize=$_FILES['ff']['size'];
$uid=$_SESSION['info']['uid'];
$tid=$_POST['tid'];
$source=$_FILES['ff']['tmp_name'];
$about=$_POST['about'];

if($ftype=='application/pdf' and $fsize<=25242880){
$fpath="uploaded_files/".rand(00000000,99999999)."_".$fname;
$durl=$fpath;
if(move_uploaded_file($source,$durl)){
	$sql="INSERT INTO `document` (`tid`,`uid`,`durl`,`filename`,`about`) VALUES ($tid,$uid,'$durl','$fname','$about')";
	$res=mysqli_query($con,$sql)or die(mysqli_error($con));
	if($res==1){
		$d_src="SELECT `did` FROM `document` WHERE `durl`='$durl'";
		$d_rs=mysqli_query($con,$d_src)or die(mysqli_error($con));
		$d_rec=mysqli_fetch_assoc($d_rs);
		$did=$d_rec['did'];
		$sql1="INSERT INTO `status_document` (`did`,`status`) VALUES ($did,0)";
		$res1=mysqli_query($con,$sql1)or die(mysqli_error($con));
		$sql2="INSERT INTO `download` (`did`,`nofd`) VALUES ($did,0)";
		$res2=mysqli_query($con,$sql2)or die(mysqli_error($con));
		if($res1){
			header('location:upload.php?msg=Upload sucessfull');
			exit;
		}else{
			header('location:upload.php?msg=Upload not sucessfull');
			exit;
		}
	}else{
		header('location:upload.php?msg=Sorry try again');
		exit;
	}
}}else{
	header('location:upload.php?msg=Please choose .pdf file within 5Mb');
}
	?>
