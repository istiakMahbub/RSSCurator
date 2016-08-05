<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["password"]);
   header('Refresh: 0; URL = register.php');
?>
