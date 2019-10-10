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
<body style="background-color: #333;">
<div class="custom container-fluid d-flex align-items-center justify-content-center">
       
		<form action="../mysql_action/user_login.php" method="post">
		<h2 class="deading1">Students Login Form</h2>
			<div class="form-group">
				<input class ="form-control" type="text" name="id" placeholder="Enter your id">
			</div>
			<div class="form-group">
				<input class ="form-control" type="password" name="password" placeholder="password">
			</div>

<!-- 			<div class="alert alert-danger">
              <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
            </div> -->
			<?php 
                 if (isset($_GET['invalid']) && $_GET['invalid'] == true) {
                 	
			 ?>
                    <div class="alert alert-danger form-group">

                    <?php echo "Wrong id or password!"; ?>
                    	
                    </div>
			 <?php 
                 
                 }
			  ?>
			<button class="btn btn-outline-light btn-sm" name="login">Login <i class="fas fa-sign-in-alt"></i></button>
			<button class="btn btn-outline-light btn-sm" id="btn" ><a style="text-decoration: none;" href="../home/home.php"> <i class="fas fa-home"></i> Home</a></button>
			
		</form>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>