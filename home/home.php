 <?php 
         include_once("../inc/header.php");
        // include("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
  ?>

<div class="head" >
	<div class="heading">
	  <img class="bubt" src="../src/bubt.png">
	   <h1 class="titile" style="width: 390px;">E-VOTING SYSTEM</h1>
	    <p style="width: 150px;margin-top:88px ;margin-left: -60px" >For <strong>BUBT</strong> students</p>

 		 <ul style="width: 520px;">
	   		<li><a class="btn btn-success" href="../user_pannel/login.php">Login <i class="fas fa-user-plus"></i></a></li>
	   		<li><a class="btn btn-primary" href="../user_pannel/registratoin.php">Signup <i class="fas fa-sign-in-alt"></i></a></li>
	   	 </ul>
	  <!--  	 <p style="margin-top: 97px; margin-left: -180px; width: 200px;" >First <strong>Sinup</strong> for<strong> Login</strong></p> -->
	</div>
		  <div class="container" style="height: 200px; width: 100%;">
    <!--########################START HERE#########################-->

    <!-- SLIDER -->
    <div id="slider1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="active" data-target="#slider1" data-slide-to="0"></li>
        <li data-target="#slider1" data-slide-to="1"></li>
        <li data-target="#slider1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="img3.jpg" class="d-block img-fluid" alt="First Slide">
          <div class="carousel-caption">
            <h3 style="color: black;">Welcome To Here!</h3>
            <p style="color: black;">Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img3.jpg" class="d-block img-fluid" alt="Second Slide">
          <div class="carousel-caption">
            <h3 style="color: black;">It's a University Voting System</h3>
            <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, cumque!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img3.jpg" class="d-block img-fluid" alt="Third Slide">
          <div class="carousel-caption">
            <h3 style="color: black;">Think Twice Before Vote</h3>
            <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, cumque!</p>
          </div>
        </div>
      </div>
      <a href="#slider1" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#slider1" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>


  </div>
	
	</div>

	<?php 
     include_once("../inc/footer.php");
	// include("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
   ?>
	



