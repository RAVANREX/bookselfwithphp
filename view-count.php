<?php
require('config.php');


$msgid=$_GET['msgid'];


$dw="SELECT `View` FROM `message` WHERE `msgid`=$msgid";
$a=mysqli_query($con,$dw)or die(mysqli_error($con));

$res=mysqli_fetch_assoc($a);
$nofd=1;

  $in="UPDATE `message` SET `View`=$nofd WHERE `msgid`=$msgid";
  $b=mysqli_query($con,$in)or die(mysqli_error($con));


  
  
  
  ?>  

<head>
<script>
function loaded()
{
    window.setTimeout(CloseMe, 00);
}

function CloseMe() 
{
    window.close();
}
</script>
</head>
<body onLoad="loaded()">

</body>