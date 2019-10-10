<?php 
   session_start();
   include_once("../inc/db_connection.php");
   $email = $_POST['email'];
   $pass  = $_POST['password'];
   
   if (isset($_POST['login'])) {
     # code...
    if ($email == "" OR $pass == "") {
      header("location:../admin/admin.php?msg=true");
    }
              else{
                
                $sql ="SELECT * FROM user WHERE email = '$email' AND password ='$pass' AND user_type = 1";
                $result = mysqli_query($conn,$sql);

                if (mysqli_fetch_assoc($result)) {
                  # code...
                  
                  $_SESSION['user'] = $email;
                  $_SESSION['user_type'] = 1;
                  header("location:../admin/admin_dashboard.php");
                  // echo "Login success";
                }else{
                  // echo "failed to login".$sql."<br>".mysqli_error($conn);
              
                   header("location:../admin/admin.php?msg1=true");
                }

             }
    }
    else{
      header("location:../admin/admin.php");
    }

 ?>