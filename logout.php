<?php
// when user logs out, it ends the users session and redirects to the login page for the next user to log on.
  session_start();
  session_destroy();
  header("location: login.php");

 ?>
