<?php 
    include_once("../inc/db_connection.php");
    // include_once("../user_pannel/registration.php");

    $f_name  = $_POST['f_name'];
    $l_name  = $_POST['l_name'];
    $intake  = $_POST['intake'];
    $dept    = $_POST['dept'];
    $section = $_POST['section'];
    $id      = $_POST['id'];
    $pass    = $_POST['pass']; 
    $email   = $_POST['email'];
    $gender  = $_POST['gender'];

    $check_id  = "SELECT * FROM user WHERE id = '$id'";
    $result    = mysqli_query($conn,$check_id);
    $row_count = mysqli_num_rows($result);
    if ($row_count == 1) {
        # code...
        header("location:../user_pannel/registratoin.php?msg1=true");
    }
    else
    {
     $sql ="INSERT INTO user(first_name,last_name,intake,department,section,id,password,email,gender,user_type) 
        VALUES ('$f_name','$l_name','$intake','$dept','$section','$id','$pass','$email','$gender', 2)";
      mysqli_query($conn,$sql);
        # code...
        header("location:../user_pannel/registratoin.php?msg=true");
       //    echo "<div class='alert alert-success'>
                // <strong>Success!</strong> This alert box could indicate a successful or positive action.</div>";
        echo "registratoin successful";
    }
  
    
 
     // else{
     // 	// echo "failed to operation".$sql."<br>".mysqli_error($conn);
     // 	// echo "<div class='alert alert-danger'>
    	// 	// 	<strong>failed!</strong> This alert box could indicate a successful or positive action.</div>";
     //    echo "Failed to registration".$sql."<br>".mysqli_error($conn);
     // }
     mysqli_close($conn);
 ?>