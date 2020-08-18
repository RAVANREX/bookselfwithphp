<?php


$j="SELECT * FROM `user` ";
$rs=mysqli_query($con,$j)or die(mysqli_error($con));
$i=0;
$ux=0;
while($rec=mysqli_fetch_assoc($rs)){
    $i++;
    
    $ux=$i;
}
?>