
<?php require("config.php");?>
<?php require('check_seesion.php')?>
<?php require("admin_menu.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="refresh" content="20">
  <title>add-doc</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <style type="text/css">
  
  
  
  
  
  
  
    </style>
</head>

<body  class="fixed-nav sticky-footer bg-light" id="page-top" >
	<h1 align="center">----MESSAGES----</h1>
<div class="content-wrapper" align="center">
	<form method="get">
	<table align="center" cellspacing="2" cellpadding="2" border="1" width="100%">
	<thead>
	<tr><th>Status</th>
	<th>Serial number</th>
	<th>Name</th>
	<th>Email_id</th>
	<th>Subject</th>
	<th>Message</th>
	<th>delete</th>
	</tr></thead>
	<tbody>
	
	
	
	
	
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
	
	
	
	
	
	<?php

if(isset($_GET['msgid'])){
  $msgid=$_GET['msgid'];
}else{
  $msgid=0;
} ?>
	<?php $join="SELECT * FROM `message` ORDER BY `msgid` DESC";
$rs=mysqli_query($con,$join)or die(mysqli_error($con));
?><?php

	        $i=0;
		while($rec=mysqli_fetch_assoc($rs)){
		    $i++;
            $msgid=$rec['msgid'];
		   ?><tr>
		  <td align="center"><h5> 
		  <?php 
		  $view=$rec['View'];
		  
		if  ($view>0){?>
		   <i class="fa fa-envelope-open" aria-hidden="true"></i>
	<?php 	}else {?>
		    <i class="fa fa-envelope" aria-hidden="true"></i>
		<?php }
		?></h5></td>
		<td align="center"><h5><?php echo $i?></h5></td>
		<td align="center"><h5><?php echo $rec['name']?></h5></td>
		<td align="center"><?php echo $rec['Email']?></td>
		<td align="center"><?php echo $rec['subject']?></td>
		<td align="center">
		
		
		
		
		
		<a href="view-count.php"   target="_blank" onclick="window.open('view-count.php?msgid=<?php echo $rec['msgid']?>')" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rec['msg'];?>">VIEW</a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="button" class="btn btn-primary" >Send message</button>
      </div>
    </div>
  </div>
</div>
		
		
		
		
		
		
		
		
</td>
		<td align="center"><a href="delete-message.php?msgid=<?php echo $rec['msgid'];?>" >DELETE</a>
		</td>
  </tr><?php } if (isset($_GET['msg'])){
      echo $_GET['msg'];
  }?>
  
  </tbody></table></form></div>
  
 

  
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <script type="text/javascript">

  

    $('#exampleModal').on('show.bs.modal', function (event) {
  	  var button = $(event.relatedTarget) // Button that triggered the modal
  	  var recipient = button.data('whatever') // Extract info from data-* attributes
  	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  	  var modal = $(this)
  	  modal.find('.modal-title').text( recipient)
  	  modal.find('.modal-body input').val(recipient)
  	})

    </script>





    
    </script>

</body>
</html>
