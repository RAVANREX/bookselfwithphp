<?php
	require('config.php');
	require('check_seesion.php');
	
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$squestion=$_POST['sq'];
		$ans=$_POST['sans'];
		$ph=$_POST['phn'];
		$gender=$_POST['gender'];
		$pass=$_POST['pass'];
		$uid=$_SESSION['info']['uid'];
		 $upd="UPDATE `user` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`gender`='$gender',`pwd`='$pass',`ph`=$ph,`squestion`='$squestion',`ans`='$ans' WHERE `uid`='$uid'";
		$res=mysqli_query($con,$upd)or die(mysqli_error($con));
		if($res>0){
		    header('location:index1.php?msg=profile update successfully');
			exit;
		}else{
			echo 'update error'; 
		}
		
	?>