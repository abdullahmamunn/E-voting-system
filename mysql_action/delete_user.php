<?php 
    include_once("../inc/db_connection.php");
    $u_id = $_GET['id'];

    $sql = "DELETE FROM user WHERE s_id='$u_id'";
   
    if (mysqli_query($conn,$sql)) {
    	
    		header("location:../admin/regi_user.php");
    	}
    	else
    	{
    		echo "error".$sql."<br>".mysqli_error($conn);
    	}
    	
   
 ?>