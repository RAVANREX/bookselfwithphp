
<?php
$j="SELECT document.*,status_document.* FROM `document` JOIN `status_document` ON status_document.did=document.did WHERE `status`=0";
$rs=mysqli_query($con,$j)or die(mysqli_error($con));
$i=0;
$x=0;
while($rec=mysqli_fetch_assoc($rs)){
    $i++;
    
    $x=$i;
}
             ?>