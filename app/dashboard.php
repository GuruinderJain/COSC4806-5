<?php
session_start();
  if (isset($_SESSION['username'])){
    header('location: login.php');

  }
require_once 'app/views/templates/private_header.php';
  require_once 'app/views/templates/footer.php';

?>