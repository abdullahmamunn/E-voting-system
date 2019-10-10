<?php 
  
  session_start();
  if (isset($_GET['logout'])) {
  	session_destroy();
  	header("location:login.php");
  }else{
  	header("locatoin:user_dashboard.php");
  }
  
  
 ?>