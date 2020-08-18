
<?php
$j="SELECT * FROM `message`";
$rs=mysqli_query($con,$j)or die(mysqli_error($con));
$i=0;
$ty=0;
while($rec=mysqli_fetch_assoc($rs)){
    $i++;
    
    $ty=$i;
}
             ?>