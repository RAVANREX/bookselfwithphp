<?php require("config.php")?>
<?php
session_destroy();
header('location:login.php?msg=Update sucessfull Please Log In again...');
exit;
?>