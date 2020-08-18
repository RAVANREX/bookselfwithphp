<?php
require("config.php")?>
<?php
	$id=$_GET['tid'];
$del="DELETE FROM `type` WHERE `tid`=$id";
$res=mysqli_query($con,$del)or die(mysqli_error($con));
if($res==1){
	//echo"student record del succ";
	header('location:view-category.php?msg=category record del succ');
	exit;
}else{
    header('location:view-category.php?msg=category record del');
}
	?>