<?php 
    include_once("../inc/db_connection.php");
    $d_id = $_GET['id'];

    $sql1 = "DELETE FROM add_candidate WHERE e_id='$d_id'";
    $sql2 = "DELETE FROM add_election WHERE e_id='$d_id'";
   
    if (mysqli_query($conn,$sql1)) {
	    if (mysqli_query($conn,$sql2)) {
            header("location:../admin/admin_dashboard.php?msg1=true");
           
        }
        else {
            echo "error".$sql."<br>".mysqli_error($conn);
        }
	}
	else {
    	echo "error".$sql."<br>".mysqli_error($conn);
	}

   
   
 ?>