
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../src/app.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
      <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

  <script src="https://kit.fontawesome.com/035eca63fe.js"></script>
</head>
<body>

<div class="mainhead" >
 <div class="nav">
  <div class="bdlogo">
    <img src="../src/ev.png" class="rounded-circle" alt="BD">
  </div>

  <div>
    <h2 class="title">E-Voting System</h2>
  </div>
    <div>
    <h2 class="title1">
      <?php 
     session_start();
     if (isset($_SESSION['user'])) {
       # code...
       echo "Welcome ->". $_SESSION['user']."!";
     }
     else{
      header("location:admin.php");
     }
    
     
     ?>
    </h2>
  </div>

  </div>
  
  <div class="menubar">
      <div class="menu">
        <ul class="hov">
          <li><a href="#">Dashboard <i class="fas fa-chalkboard-teacher"></i></a></li>
          <li><a href="regi_user.php">Registered users <i class="fas fa-users"></i></a></li>
          <li><a name="logout" href="../mysql_action/admin_logout.php?logout">Logout <i class="fas fa-sign-out-alt"></i></a></li>
          <li><a href="#">Setting <i class="fas fa-user-cog"></i></a></li>
        </ul>
      </div>
  </div>

  <div class="container">
    <?php 
      include_once("../inc/db_connection.php");
      $qry = "SELECT * FROM add_election ORDER BY e_id DESC";
      $result = mysqli_query($conn,$qry);
   ?>

   <?php 
           if (isset($_GET['msg']) && $_GET['msg'] == true) {
                  
       ?>
  <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Great!</strong> 
          <?php echo " Election added successfully"; ?>
    </div>

       <?php 
                 
                 }
        ?> 
         <?php 
           if (isset($_GET['msg1']) && $_GET['msg1'] == true) {
                  
       ?>
  <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Great!</strong> 
          <?php 
            echo"Election has deleted successfully"; 
            ?>
          
          
    </div>

       <?php 
                 
                 }
        ?> 


       
   <?php 
     
     while ($row = mysqli_fetch_assoc($result)){
       
  ?>

  
  <div class="card">
  <h4 class="card-header"><?php echo $row['election_title']; ?></h4>
  <div class="card-body">
    <h6 class="card-title">Special Qoutes: <?php echo $row['e_description']; ?> </h6>
    
    <p class="card-text">Start Date: <?php echo $row['start_date']; ?></p>
    <p class="card-text">End Date: <?php echo $row['end_date']; ?></p>

    <a  href="../mysql_action/delete.php?id=<?php echo $row['e_id']; ?>" name = "delete" class="btn btn-danger" >Detele</a>

     <a href="#" id="das_btn" class="btn btn-success" style="margin-right: 5px;">Publish</a>

     <a href="view.php?id=<?php echo $row['e_id']; ?>"  class="btn btn-primary" style="margin-right: 5px;">View</a>

     <?php if ($_SESSION['user_type'] == 1) { ?>
     <a href="admin_dashboard.php?id=<?php echo $row['e_id'];  ?>" class="btn btn-info" style="margin-right: 5px;" data-toggle = "modal" data-target="#mymodal">add candidate</a>
       

     <?php } ?>

  </div>
 </div>


<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Candidate</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      <?php 
           if (isset($_GET['ms']) && $_GET['ms']==true) {
                   
       ?> 
       <span style="color: green">Candidate add successfully!</span>
       <?php 
            }
        ?>

         <?php 
           if (isset($_GET['ms1']) && $_GET['ms1']==true) {
                   
       ?> 
       <span style="color: red">Please select an image and it should be jpg, png ,jpeg and gif!</span>
       <?php 
            }
        ?>

      <form action="../mysql_action/candidatedb.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
         <label style="color: black">Election ID</label>
          <input class="form-control" type="text" name="election_id" placeholder="Enter Election ID">
        </div>

        <div class="form-group">
          <label style="color: black">Candidate Name</label>
          <input class="form-control" type="text" name="can_name" placeholder="Candidate Name" required="1">
        </div>

        <div class="form-group">
          <label style="color: black">Status</label>
          <input class="form-control" type="text" name="can_status" placeholder="Candidate Status" required="1">
        </div>
        <div class="form-group">
          <label style="color: black">Age</label>
          <input class="form-control" type="text" name="can_age" placeholder="Enter age" required="1">
        </div>
        <div class="form-group">
          <label style="color: black">Upload Candidate photo</label>
          <input  type="file" name="image">
        </div>
         <div class="form-group">
            <label for="">Gender</label>
            <br>
            <label style="color: black" for="male">Male</label>
            <input  id="male" type="radio" name="gender" value="male">
            <label style="color: black" for="Female">Female</label>
            <input  id="Female" type="radio" name="gender" value="female">
            <label style="color: black" for="Other">Others</label>
            <input id="Other" type="radio" name="gender" value="other">
          </div>

      <button class="btn btn-info" name="submit">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<?php 

  } 
?>



   <!-- Button trigger modal -->
  <button class="btn btn-primary" data-toggle="modal" data-target="#electionAddModal"><i class="fas fa-plus"></i></button>
 

<!-- Modal -->
<div class="modal fade" id="electionAddModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add voting session</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../mysql_action/add_election.php" method="post">
        <div class="form-group">
          <label style="color: black">Election Name</label>
          <input class="form-control" type="text" name="e_name" placeholder="Election Name" required="1">
        </div>

        <div class="form-group">
          <label style="color: black">Description</label>
          <textarea name="e_des" class="form-control"></textarea>
        </div>
 
      <div class="form-group">
       <label style="color: black" for="date">Start Date</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-calendar-alt"></i> </div>
        </div>
        <input type="date" name="date" class="form-control" id="date" >
      </div>
     </div>

     <div class="form-group">
       <label style="color: black" for="date">End Date</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i> </div>
        </div>
        <input type="date" name="edate" class="form-control" id="date" >
      </div>
     </div>
      <button class="btn btn-info" name="save">Save</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


</div>
<div class="footer">
  <h4>Organized by <a href="#">Almamun</a></h4>
</div>

</div>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Include Date Range Picker -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
      
<!-- <script>
  $(document).ready(function(){
    var date_input1=$('input[name="date"]');
        var date_input2=$('input[name="edate"]');//our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input1.datepicker({
      format: 'mm/dd/yyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
      date_input2.datepicker({
      format: 'mm/dd/yyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script> -->
</body>
</html>