<?php
   session_start();
   include_once("../inc/db_connection.php");
   // include_once("../user_pannel/login.php");

    $user_id   = $_POST['id'];
    $user_pass = $_POST['password'];

    // $f_name  = $_POST['f_name'];
    

    $sql    = "SELECT * FROM user WHERE id =' $user_id' AND password = '$user_pass' AND user_type = 2";
    $result = mysqli_query($conn,$sql);
    $row    = mysqli_num_rows($result);
    if (isset($_POST['login'])) {
    
        if ($row == 1) {
        $_SESSION['user'] = $user_id;
        $_SESSION['user_type'] = 2;
        header("location:../user_pannel/user_dashboard.php");

    }
    else
    {
        header("location:../user_pannel/login.php?invalid=true");
        // echo "failed to operation".$sql."<br>".mysqli_error($conn);
    }
    }
    else{
        header("location:../user_pannel/login.php");
    }

    mysqli_close($conn);
?>