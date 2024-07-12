<?php 
session_start();
require_once 'app/views/templates/header.php';
if (isset($_SESSION['username'])){
  header('location: login.php');
}

echo "<div class='container'><h1>Welcome to the login page</h1></div>";
require_once 'app/views/templates/footer.php';
?>