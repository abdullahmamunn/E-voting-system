<?php 
   include_once("../inc/db_connection.php");

	   
	   $candidate_name   = $_POST['can_name'];
	   $candidate_status = $_POST['can_status'];
	   $candidate_age    = $_POST['can_age'];
	   $candidate_gender = $_POST['gender'];
      $election_id  = $_POST['election_id'];

    $permited   = array('jpg', 'jpeg','JPG', 'png', 'gif');
    $image_name = $_FILES['image']['name'];
    $size       = $_FILES['image']['size'];
    $file_temp  = $_FILES['image']['tmp_name'];
    
    $div = explode('.',$image_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../src/".$unique_image;

 


   if (isset($_POST['submit'])) {

      if(empty($image_name)){
        header("location:../admin/admin_dashboard.php?ms1=ture");
      }
      elseif ($size >1048567){
        header("location:../admin/admin_dashboard.php?ms1=ture");
      }
      elseif (in_array($file_ext, $permited) === false){
         header("location:../admin/admin_dashboard.php?ms1=ture");
      }
         else{
      move_uploaded_file($file_temp,"$uploaded_image");

      $sql ="INSERT INTO add_candidate( candidate_name, candidate_status,candidate_age,candidate_gender,e_id,candidate_img) VALUES ('$candidate_name','$candidate_status','$candidate_age','$candidate_gender','$election_id','$uploaded_image')";

        if(mysqli_query($conn,$sql)){
           header("location:../admin/admin_dashboard.php?ms=ture");
        }
        else{
         echo "Connection Error!".$sql."<br>".mysqli_error($conn);
        }
      
   } 

   }
   else{
   	header("location:../admin/");
   }


 ?>