<?php require("config.php")?>
<?php require('check_seesion.php')?>

<!DOCTYPE html>
<html lang="en">

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



  <link href="css/sb-admin.css" rel="stylesheet">
  <script type='text/javascript' src='js/jq.js'></script>

  <script type='text/javascript' src='js/jquery.validate.js'></script>
  <style type="text/css">
label.error{
color:#900;
margin-left:15px;
}
</style>


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <h6 align="center" class="text-danger"><?php if(isset($_GET['msg'])){
    echo $_GET['msg'] ; }?></h6>

<!--<script>
$(document).ready(function() {
  jQuery.validator.addMethod("nameonly", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z]+$/);
},"Only alphabets Allowed.");

jQuery.validator.setDefaults({

    errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
    }
});

  $("#frm").validate({
  rules:{
    fname:{
      required:true,
      nameonly:true
    },
    mname:{

      nameonly:true
    },
    lname:{
      required:true,
      nameonly:true
    },
    oldpass:{
      required:true,
    }

    pass:{
      required:true,
      minlength:6,
      maxlength:25
    },

    cpwd:{
      required:true,
      equalTo:$("#pass")
    },
  },

  messages:{
    fname:{
      required:'Please enter your first name'
    },

    lname:{
      required:'Please enter your last name'
    },
    oldpass:{
        required:"Input type is required",

    },


    pass:{
      required:'Please enter your password',
      minlength:'Password atleast 6 character',
      maxlength:'Plassword maximum 25 caharacter'
    },
    cpwd:{
      required:'Please enter your confirm password',
      equalTo:'Confirm password does not match'
    },
  }
});
});
</script>



















  <!-- Navigation-->
  <?php require("admin_menu.php") ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Welcome <?php echo $_SESSION['inf']['fname']?></h1>
          <?php
$id=$_SESSION['inf']['aid'];
$src="SELECT * FROM `admin` WHERE `aid`=$id";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
$rec=mysqli_fetch_assoc($rs);
#print_r($rec);
?>
<h2 class="container">Admin Profile Customization</h2>
<form name="frm" method="post"class="container" action="up-ad-info.php?id=<?php echo $id ?>">
<table cellpadding="15">
<tr>
	<td>Name</td>
    <td><input type="text" name="name"  value="<?php echo $rec['fname'] ?>" required></td>
    <td><input type="text" name="mname"  value="<?php echo $rec['mname'] ?>"></td>
    <td><input type="text" name="lname"  value="<?php echo $rec['lname'] ?>"required></td>
</tr>
<tr>
	<td>New Password</td>
    <td><input type="password" name="pass"  required></td>
</tr>
<tr><td>Confirm Password</td>
<td><input type="password" name="cpwd"  required ></td></tr>
<tr>
	<td>&nbsp;</td>
    <td><input type="submit" class="btn btn-primary" name="ok" value="Save Changes"></td>
</tr>
</table>
</form>


        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php require("footer.php") ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">�</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="log_out.php">Logout</a>

          </div>
        </div>
      </div>
    </div>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

  </div>
</body>

</html>
