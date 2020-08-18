 <?php  require('config.php');  ?>
 <?php 
            $name=$_POST['name'];
            $email=$_POST['email'];
            $sub=$_POST['subject'];
            $msg=$_POST['msg'];
            $src="INSERT INTO `message`(`name`,`email`,`subject`,`msg`,`View`) VALUES ('$name','$email','$sub','$msg',0)";
            $rs=mysqli_query($con,$src) or die(mysqli_error($con));


            if($rs==1){
                header('location:contact.php?msg=Message send succesfully');
            
            }else{
                header('location:contact.php?msg= Message sending failed');
                
            }


          
?>
 