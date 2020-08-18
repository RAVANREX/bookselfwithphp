


                            <?php

                            require 'config.php';
                         ?>
                            <?php
							$email=$_POST['email'];
							$sq=$_POST['sq'];
							$ans=$_POST['ans'];
							$src="SELECT * FROM `user` WHERE `email`='$email' AND `squestion`='$sq' AND `ans`='$ans'";
	                        $rs=mysqli_query($con,$src)or die(mysqli_error($con));
	                        if(mysqli_num_rows($rs)>0){
	                            $rec=mysqli_fetch_assoc($rs);
	                            $_SESSION['info']=$rec;

	                     
	                            header('location:forget1.php?msg=you can change your password');
	                            
	                        }
	                        else {
	                            header('location:forget.php?msg=Account not found');
	                        }
							
							?>