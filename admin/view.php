<?php 
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

<div class="card h-200">
    <div class="card-header"><h2 style="text-align: center;"><?php echo $row['election_title']; ?></h2></div>
   <h6 class="card-title">Special Qoutes: <?php echo $row['e_description']; ?> </h6>
    <p>Start Date: <?php echo $row['start_date']; ?> </p>
    <p>Start Date: <?php echo $row['end_date'] ?> </p>
   
</div>
<?php 
    } 
?>

  <?php 

    while ($row = mysqli_fetch_assoc($result)) {
    		
    
  ?>

    <h5 style="text-align: center;">Result</h5>
       <div class="row">
      <div class="col-sm-3">
        <p> <strong><?php echo $row['candidate_name']; ?></strong> </p>

      </div>
      <div class="col-sm-6">
        <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
      </div>  
    </div>


<div class="card">
  <div class="card-body">
    <!-- <h3><?php echo $row['election_title']; ?></h3> -->
    <h5><?php echo $row['candidate_name']; ?></h5>
    <p>Age <?php echo $row['candidate_age']; ?> </p>
    <p>Total Vote:</p>
    
    <img src="<?php echo $row['candidate_img']; ?>" height="100px" width="100px"/>
    
  </div>
  
</div>

<?php } ?>
</div>
 </div>