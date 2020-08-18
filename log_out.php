<?php require("config.php")?>
<?php
session_destroy();
header('location:login.php?msg=Successfully Log Out');
exit;
?>