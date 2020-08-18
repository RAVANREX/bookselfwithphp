<?php require("config.php");
	$id=$_GET['tid'];
	$src="SELECT * FROM `type` WHERE `tid`=$id";
	$rs=mysqli_query($con,$src)or die(mysqli_error($con));
	$rec=mysqli_fetch_assoc($rs);
	?>





<?php


require("config.php");

		$name=$_POST['name'];
		
		$upd="UPDATE `type` SET `tname`='$name' WHERE `tid`=$id";
		
		$res=mysqli_query($con,$upd)or die(mysqli_error($con));
		if ($res==1){
			header('location:view-category.php?msg=category updated succesfully');
		}else{
		    header('location:view-category.php?msg=category update not successful');
			
				
		}

	?>