<?php
if(empty($_SESSION['inf'])){
	header('location:login.php');
	exit;
}
?>