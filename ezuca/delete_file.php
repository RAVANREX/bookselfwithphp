<?php
require("config.php");
require ('check_seesion.php');
$did=$_GET['did'];

$a="SELECT `durl` FROM `document` WHERE `did`=$did";
$b=mysqli_query($con,$a)or die(mysqli_error($con));
$res=mysqli_fetch_assoc($b);
if($b==1){
unlink($res['durl']);


$del_sta="DELETE FROM `status_document` WHERE `did`=$did";
$c=mysqli_query($con,$del_sta);
$del_dow="DELETE FROM `download` WHERE `did`=$did";
$d=mysqli_query($con,$del_dow);
$del_doc="DELETE FROM `document` WHERE `did`=$did";
$e=mysqli_query($con,$del_doc);
header('location:view_files.php?msg=Deleted Successfully');
}else{
header('location:view_files.php?msg=....');
}





?>
