

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="../src/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <script src="https://kit.fontawesome.com/035eca63fe.js"></script>
</head>
<body style="background-color: #333;">
 
<div class="custom container-fluid d-flex align-items-center justify-content-center">
       
    <form action="../mysql_action/admin_login.php" method="post" style="width: 280px;">
    <h2 class="deading1">Admin Login Form</h2>
      <div class="form-group">
        <input class ="form-control" type="text" name="email" placeholder="Enter your Username" >
      </div>
      <div class="form-group">
        <input class ="form-control" type="password" name="password" placeholder="password">
      </div>
      <?php 

         if (isset($_GET['msg']) && $_GET['msg'] == true) {
                  
       ?>
                   
    <div class="alert alert-warning alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong> 
          <?php echo "Please Fill inputs"; ?>
    </div>


       <?php 
                 
                 }
        ?>

        <?php 

         if (isset($_GET['msg1']) && $_GET['msg1'] == true) {
                  
       ?>
                   

    <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Wrong!</strong> 
            <?php echo "Username or Password"; ?>
   </div>


       <?php 
                 
                 }
        ?>

    <button class="btn btn-outline-light" name="login">Login <i class="fas fa-sign-in-alt"></i> </button>


    </form>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>