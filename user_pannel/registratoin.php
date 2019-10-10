
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../src/app.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: #333;">
<div class="container-fluid d-flex align-items-center justify-content-center" id="regi">

	<form action="../mysql_action/insert.php" method="post">

		<h2 class="deading1"> Students Registration Form</h2>
          
          	<?php 
                 if (isset($_GET['msg']) && $_GET['msg'] == true) {
                 	
			 ?>
    <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Great!</strong> 
          <?php echo "You have registered Successfully!"; ?>
    </div>

			 <?php 
                 
                 }
			  ?> 

          <div class="form-group">
          	<label for="">Name:</label>
	          	<div class="row">
				    <div class="col">
				      <input type="text" class="form-control" name="f_name" placeholder="First name" required="1">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="l_name" placeholder="Last name" required="1">
				    </div>
	            </div>
          </div>
<!--           <div class="form-group">
          	<label for="">Last Name:</label>
          	<input class="form-control" type="text" name="last_name">
          </div> -->
          <div class="form-group">
          	   	<div class="row">
				    <div class="col">
				    <label for="">Intake:</label>
				      <input type="text" class="form-control" name="intake" placeholder="Intake" required="1">
				    </div>

				    <div class="col">
				      <label for="">Department:</label>
				      <input type="text" class="form-control" name="dept" placeholder="Department" required="1">
				    </div>
	            </div>
          </div>
          <div class="form-group">
             <div class="row">
				    <div class="col">
				    <label for="">Section:</label>
				      <input type="text" class="form-control" name="section" placeholder="Section" required="1">
				    </div>

				    <div class="col">
				      <label for="">Id:</label>
				      <input type="text" class="form-control" name="id" placeholder="Id" required="1">
				      			<?php 
                 if (isset($_GET['msg1']) && $_GET['msg1'] == true) {
                 	
			 ?>
                    
                   <p style="color: red; float: right;"> <?php echo "Sorry!this ID is already taken!"; ?></p>
                    	
                    
			 <?php 
                 
                 }
			  ?>
				    </div>
 
	            </div>
          </div>
          <div class="form-group">
          	<div class="row">
				    <div class="col">
				    <label for="">Password:</label>
				      <input type="password" class="form-control" name="pass" placeholder="Password" required="1">
				    </div>

	            </div>
          </div>
          <div class="form-group">
          	<div class="row">
				    <div class="col">
				    <label for="">Email:</label>
				      <input type="text" class="form-control" name="email" placeholder="Email" required="1">
				    </div>
	            </div>
          </div>
          <div class="form-group">
          	<label for="">Gender</label>
          	<br>
          	<label for="male">Male</label>
          	<input  id="male" type="radio" name="gender" value="male">
          	<label for="Female">Female</label>
          	<input  id="Female" type="radio" name="gender" value="female">
          	<label for="Other">Others</label>
          	<input id="Other" type="radio" name="gender" value="other">
          </div>
          <button class="btn btn-outline-success" >Register</button>
           <button class="btn btn-outline-warning" type="reset" value="Cancel" >Cancel</button>
           <a style="color: white;" href="../home/home.php">Back to Home</a>
	</form>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>