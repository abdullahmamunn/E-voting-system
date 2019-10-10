
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../src/app.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      header("location:login.php");
     }
    
     
     ?>
    </h2>
  </div>
   

  </div>
  <div class="menubar">
      <div class="menu">
        <ul class="hov">
          <li><a href="#">Dashboard <i class="fas fa-chalkboard-teacher"></i></a></li>
          <li><a href="user_logout.php?logout">Logout <i class="fas fa-sign-out-alt"></i></a></li>
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

   <?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <div class="card">
  <h4 class="card-header"><?php echo $row['election_title']; ?></h4>
  <div class="card-body">
    <h6 class="card-title">Special Qoutes: <?php echo $row['e_description']; ?> </h6>
    
    <p class="card-text">Start Date: <?php echo $row['start_date']; ?></p>
    <p class="card-text">End Date: <?php echo $row['end_date']; ?></p>
   <!--  <?php if ($_SESSION['user_type']==2) { ?>
    <a  href="../mysql_action/delete.php?id=<?php echo $row['e_id']; ?>" name = "delete" class="btn btn-danger" >Detele</a>
  <?php } ?> -->
    

     <a href="user_view.php?id=<?php echo $row['e_id']; ?>"  class="btn btn-primary" style="margin-right: 5px;">View</a>

     <!-- <?php if ($_SESSION['user_type'] == 2) { ?>
     <a href="#"  class="btn btn-info" style="margin-right: 5px;" data-toggle = "modal" data-target="#mymodal">add candidate</a>

     <?php } ?>
 -->
  </div>
 </div>
<?php 

  } 
?>

</div>


</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>