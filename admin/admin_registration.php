


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../src/app.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		#button{
               margin-top: 15px;
               /*color: white;*/
		}
	</style>
</head>
<body style="background-color: #333;">
<div class="container-fluid d-flex align-items-center justify-content-center">
       
		<form action="admin_insert.php" method="post">
		<h2 class="deading1">Admin Registration Form</h2>
          <div class="form-group">
          	<label for="">First Name:</label>
	          	
				    <div>
				      <input type="text" name="f_name" class="form-control" placeholder="First name">
				    </div> 
	        </div>
	      <div class="form-group">
          	<label for="">Last Name:</label>
				 <div>
				      <input type="text" name="l_name" class="form-control" placeholder="Last name">
	            </div>
          </div>

         <div class="form-group">
          	<label for="">Email:</label>
				 <div>
				      <input type="text" name="c_email" class="form-control" placeholder="Email">
	            </div>
          </div>
           <div class="form-group">
          	<label for="">Cell Number:</label>
				 <div>
				      <input type="text" name="cell_no" class="form-control" placeholder="Cell Number">
	            </div>
          </div>
           <div class="form-group">
          	<label for="">Password:</label>
				 <div>
				      <input type="Password" name="pass" class="form-control" placeholder="Password">
	            </div>
          </div>

          <table>
		
			<tr>
				<td style="color: white;">Gender:</td>
				<td class="color">
					    <input type="radio" name="gender" value="male"> Male 
					    <input type="radio" name="gender" value="female"> Female 
						<input type="radio" name="gender" value="others"> Others
                         
				</td>
			</tr>

		</table>
         
         <div id="button">
         <button class="btn btn-outline-light" name="submit">Submit</button>
         <button style="margin-right: 10px;" class="btn btn-outline-danger" type="reset">Cancel</button>

         </div>
              <a style= "color: white;" href="../home/home.php">Back to Home</a>
		</form>

          </div>

<!--           <div class="form-group">
          	<label for="">Last Name:</label>
          	<input class="form-control" type="text" name="last_name">
          </div> -->
 

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>