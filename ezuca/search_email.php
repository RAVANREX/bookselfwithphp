<?php require("config1.php"); ?>
<?php
$email=$_POST['email'];
$src="SELECT `email` FROM `user` WHERE `email`='$email'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	echo "This email is already registered";
}
?>