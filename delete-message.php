<?php
require('config.php');


$msgid=$_GET['msgid'];


$dw="DELETE  FROM `message` WHERE `msgid`=$msgid";
$a=mysqli_query($con,$dw)or die(mysqli_error($con));



  
  if($a>0){
      header('location:admin-message.php?msg=Delete successfully');
  }else{
      header('location:admin-message.php?msg=Delete failed');
  } 
  
  ?>  

