<?php 
  
    session_start();
  if (isset($_GET['logout']))
   {
  	session_destroy();
  	header("location:../admin/admin.php");
  }
  else{
  	header("location:../admin/admin_dashboard.php");
  }
 ?>