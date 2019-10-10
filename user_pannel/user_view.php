

<?php 
    session_start();
    include_once("../inc/header.php");

      include_once("../inc/db_connection.php");
      
     
      $query = "SELECT * FROM add_election WHERE e_id = ".$_GET['id'];
      $result1 = mysqli_query($conn,$query);

      $sql = "SELECT add_election.election_title, add_candidate.candidate_name,add_candidate.candidate_age,add_candidate.candidate_gender,add_candidate.candidate_img
   FROM add_candidate INNER JOIN add_election
   ON add_candidate.e_id = add_election.e_id WHERE add_election.e_id = ".$_GET['id'];
   $result = mysqli_query($conn,$sql);
 

 ?>

 <div class="container">
  <?php 

    while ($row = mysqli_fetch_assoc($result1)) {
    		
    
  ?>

<div class="card">
    <div class="card-header"> <a href="user_dashboard.php">back</a> <h2 style="text-align: center;"><?php echo $row['election_title']; ?></h2></div>
   <h6 class="card-title">Special Qoutes: <?php echo $row['e_description']; ?> </h6>
    <p>Start Date: <?php echo $row['start_date']; ?> </p>
    <p>Start Date: <?php echo $row['end_date'] ?> </p>
    
</div>
<?php 
    } 
?>

  
<!--   <div class="card">
  <div class="card-body">
    <?php 
    if (isset($_GET['msg'])) {
      echo "<sapn style='color:green'>".$_GET['msg']."</span> ";
}
 ?> 
  </div>
</div> -->

  <?php 

    while ($row = mysqli_fetch_assoc($result)) {
    		
    
  ?>
  <form method="post" action="">
  
<div class="card">
  <div class="card-body">
    <!-- <h3><?php echo $row['election_title']; ?></h3> -->
    <h5><?php echo $row['candidate_name']; ?></h5>
    <p>Age <?php echo $row['candidate_age']; ?> </p>
    <p>Total Vote:</p>
   <!--  <input type="file" name="file"> -->
   <img src="<?php echo $row['candidate_img']; ?>" height="100px" width="100px"/>
    <input style="float: right;" type="radio" name="candidate_name" value="<?php echo $row['candidate_name']; ?>">
  </div>
  <input class="btn btn-success" type="submit" name="submit">
</div>
 
<?php
 $election_title = $row['election_title'];

 $election_id = $_GET['id'];

 } ?>
</form>
</div>
 </div>
 <?php 
  if (isset($_POST['submit'])) {

       $user_id        = $_SESSION['user'];
       $candidate_name = $_POST['candidate_name'];
       $select = "SELECT * FROM vote WHERE user_id = '$user_id' AND e_id = '$election_id'";
       $res = mysqli_query($conn,$select);
       $num_rows =  mysqli_num_rows($res);
       if ($num_rows==1) {
        // header("location:user_view.php?msg=".urldecode('You have already voted against '.$election_title));
        echo "You have already voted against ".$election_title;

        
       }else{

        $insert = "INSERT INTO `vote`(`user_id`, `candidate_name`, `election_name`,`e_id`) VALUES (' $user_id ','$candidate_name','$election_title','$election_id')";
       $exe = mysqli_query($conn,$insert);
       if ($exe == 1) {
           $update = "UPDATE add_candidate set total_votes = 'total_votes'+ '1' where candidate_name = '$candidate_name' and e_id = '$election_id'";
           $exec = mysqli_query($conn,$update);
             if ($exec==1) {
               echo "You have voted";
             }else{
              echo "you didn't vote";
             }
        
          
       }else{
        echo "error".$insert."<br>".mysqli_error($conn);
       }
      
       }


  }
  ?>