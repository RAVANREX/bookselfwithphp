<?php

$id=$_GET['id'];
require("config.php");
if (isset($_POST['ok'])){
  $name=$_POST['name'];

  $upd="UPDATE `type` SET `tname`='$name' WHERE `tid`=$id";

  $res=mysqli_query($con,$upd)or die(mysqli_error($con));
  if ($res==1){
    header('location:view-category.php?msg=category updated succesfully');
  }else{
      header('location:view-category.php?msg=category update not successful');


  }}

?>
