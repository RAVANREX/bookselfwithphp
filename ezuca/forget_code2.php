<?php
	require('config.php');
	require 'check_seesion.php';
		$pass=$_POST['pass'];
		$uid=$_SESSION['info']['email'];
		 $upd="UPDATE `user` SET `pwd`='$pass' WHERE `email`='$uid'";
		$res=mysqli_query($con,$upd)or die(mysqli_error($con));
		
		if(mysqli_num_rows($res)>0){
		   
		    
		    
		    header('location:login.php?msg=Password update failed');
		    
		}
		else {
		    header('location:login.php?msg=Password update successfully');
		}
		
		?>
	