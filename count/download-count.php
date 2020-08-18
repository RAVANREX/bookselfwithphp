<?php
$j="SELECT `nofd` FROM `download`";
$rs=mysqli_query($con,$j)or die(mysqli_error($con));
$dc=0;
while($rec=mysqli_fetch_assoc($rs)){
    
    
    $dc=$rec['nofd']+$dc;
    
    
    
    
}
             ?>