<?php require("config.php");?>
<?php require('check_seesion.php')?>
<?php require("admin_menu.php");?>

<?php
$appid=$_GET['appid'];
$n=2;
$sp="UPDATE `status_document` SET `status`= '$n' WHERE `appid`=$appid";
$r=mysqli_query($con,$sp)or die(mysqli_error($con));
  if($r==1){
    header('location:new-uploaded-doc.php?msg=Suspended Successsful');
      exit;
   }else{
header('location:new-uploaded-doc.php?msg=Not Suspended');
exit;
} ?>
