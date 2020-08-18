<?php
require("config.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>





<body>
<h1 class="container">User Details</h1>
<a href="index.php">
<button class="btn btn-btnprimary type=" href="index.php">GO BACK</button></a>
<?php
$src="SELECT * FROM `user`";
$rs=mysqli_query($con,$src);
if(mysqli_num_rows($rs)>0){
	?>
    <table cellpadding="5" cellspacing="0" border="1" class="container">			
    <thead>
    	<tr>
               <th>Id</th>
        	<th>FName</th>
               <th>MName</th>
<th>LName</th>
            <th>Email</th>
            <th>Password</th>
           <th>DOB</th>
<th>Gender</th>
<th>Phone No.</th>

            
        </tr>
    </thead>
    <tbody>
    	<?php
		while($rec=mysqli_fetch_assoc($rs)){
			?>
            <tr>

<td><?php echo $rec['uid'] ?></td>
            	<td><?php echo $rec['fname'] ?></td>
<td><?php echo $rec['mname'] ?></td>
<td><?php echo $rec['lname'] ?></td>
                <td><?php echo $rec['email'] ?></td>
                <td><?php echo $rec['pwd'] ?></td>
              <td><?php echo $rec['dob'] ?></td>
              <td><?php echo $rec['gender'] ?></td>
<td><?php echo $rec['ph']?></td>
                </tr>
			<?php
		}
		?>
    </tbody>
    </table>
	<?php }?>



</body>
</html>