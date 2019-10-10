<?php 
    
    include_once("../inc/db_connection.php");
    $election_title = $_POST['e_name'];
    $election_des   = $_POST['e_des'];
    $start_date     = $_POST['date'];
    $end_date       = $_POST['edate'];

    $sql = "INSERT INTO add_election(election_title, e_description, start_date, end_date) VALUES ('$election_title','$election_des','$start_date','$end_date' )";
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['save'])) {
    	 if ($result == 1) {
    	 	header("location:../admin/admin_dashboard.php?msg=true");
    	        // echo "Electoin added";
    	 }
    	 else{
    	 	echo "probelm in query".$sql."<br>".mysqli_error($conn);
    	 }
    }
    else
    {
    	echo "not okay";
    }
 ?>