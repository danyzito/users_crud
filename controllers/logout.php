<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: ../inc/login.php');
?>
