<?php 
   include"../inc/header.php";
 ?>
 <div class="mainhead">
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
          <li><a href="admin_dashboard.php">Dashboard <i class="fas fa-chalkboard-teacher"></i></a></li>
          <li><a href="regi_user.php">Registered users <i class="fas fa-users"></i></a></li>
          <li><a name="logout" href="../mysql_action/admin_logout.php?logout">Logout <i class="fas fa-sign-out-alt"></i></a></li>
          <li><a href="#">Setting <i class="fas fa-user-cog"></i></a></li>
        </ul>
      </div>
  </div>
  <?php 
      include_once("../inc/db_connection.php");
      $qry = "SELECT * FROM user order by s_id desc";
      $result = mysqli_query($conn,$qry);
   ?>
 </div>
   <div class="container">
   <h2 style="text-align: center;">All User Inmormations</h2>
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Intake</th>
      <th scope="col">Dept</th>
      <th scope="col">Section</th>
      <th scope="col">User ID</th>
      <th scope="col">Password</th>
      <th scope="col">E-mail</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 <?php 
     $count = 0;
     while ($row = mysqli_fetch_assoc($result)){
       $count++;
  ?>
    <tr>
      <th scope="row"><?php echo "$count"; ?></th>
      <td> <?php echo $row['first_name']; ?></td>
      <td> <?php echo $row['last_name']; ?></td>
      <td> <?php echo $row['intake']; ?></td>
      <td> <?php echo $row['department']; ?></td>
      <td>  <?php echo $row['section']; ?></td>
      <td> <?php echo $row['id']; ?></td>
      <td> <?php echo $row['password']; ?></td>
      <td> <?php echo $row['email']; ?></td>
      <td> <?php echo $row['gender']; ?></td>
      <td>
        <a class="btn btn-outline-danger" href="../mysql_action/delete_user.php?id=<?php echo $row['s_id']; ?>"><i class="fas fa-backspace"></i></a>
      </td>
    </tr>
    <?php 
      }
      mysqli_close($conn);
     ?>
  </tbody>
</table>

   </div>
 <?php
    include"../inc/footer.php";
 ?>