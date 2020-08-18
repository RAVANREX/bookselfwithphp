
<?php
require("config.php")?>


<?php


	 
		$name=$_POST['name'];
		$add="INSERT INTO `type` (tname) VALUES('$name')";
$res=mysqli_query($con,$add)or die(mysqli_error($con));
if($res>0){
	
	header('location:view-category.php?msg=category add succ');
}else{
    header('location:view-category.php?msg=category add failed');
}
	?>