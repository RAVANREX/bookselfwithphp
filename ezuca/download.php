<?php
require('config.php');


$did=$_GET['did'];


$dw="SELECT `durl`,`nofd` FROM `document` INNER JOIN `download` ON document.did=download.did where document.did=$did";
$a=mysqli_query($con,$dw)or die(mysqli_error($con));

$res=mysqli_fetch_assoc($a);
$nofd=$res['nofd']+1;

  $in="UPDATE `download` SET `nofd`=$nofd WHERE download.did=$did";
  $b=mysqli_query($con,$in)or die(mysqli_error($con));
?>  <script type="text/javascript">
  window.location="<?php echo $res['durl'] ?>";

  </script>
