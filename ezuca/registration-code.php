<?php require 'search_email.php';?>
<?php if($rs==0){
    
    header('location:registration.php?msg=This email is already registared!');
    
    exit;
} else{  ?>




<?php if(isset($_POST['ok'])){
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $sq=$_POST['sq'];
            $sans=$_POST['sans'];
            $phn=$_POST['phn'];

            $src="INSERT INTO `user`(`fname`,`mname`,`lname`,`email`,`pwd`,`dob`,`gender`,`squestion`,`ans`,`ph`) VALUES ('$fname','$mname','$lname','$email','$pass','$dob','$gender','$sq','$sans','$phn')";
            $rs=mysqli_query($con,$src) or die(mysqli_error($con));


            if($rs==1){
                header('location:login.php?msg=Account created succesfully');
            exit;
            }else{
                header('location:registration.php?msg=Account creating failed Try again!');
            }


          }
}
?>
