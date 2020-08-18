<?php
 $join="SELECT * FROM `message` WHERE `View`=0";
$rs=mysqli_query($con,$join)or die(mysqli_error($con));
$i=0;
$s=0;
while($rec=mysqli_fetch_assoc($rs)){
 $i++;
 
 $s=$i;
}
		   ?>