<?php include "./includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap%27" rel="stylesheet">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Talent Factory</title>
    </head>
	<body>
		<nav class="navbar navbar-inverse" style="background-color: #010028">
		<div class="container-fluid">
  		  <div class="navbar-header">
  		    <a class="navbar-brand p-2" href="./index.php"><img src="./images/logo/logo.png" width="100px" alt=""></a>
  		  </div>
  		  <div class="nav navbar-nav d-flex flex-row">
  		  	<ul class="nav navbar-nav d-flex flex-row align-items-center" style="font-size: 20px;">
  		  		<li class="m-2"><a href="./index.php" 
  		  			class="text-decoration-none nav-btn fs-6">Home</a></li>
  		  		<li class="m-2"><a href="./explore.php" 
  		  			class="text-decoration-none nav-btn fs-6">Explore</a></li>
  		  		<li class="m-2"><a href="./create.php" 
  		  			class="text-decoration-none nav-btn fs-6">Upload</a></li>
  		  		<li class="m-2"><a href="./spinnigWheel.php" 
  		  			class="text-decoration-none nav-btn fs-6">Win</a></li>
  		  		<?php if(isset($_SESSION['username'])) { ?>
  		  			<li class="m-2"><i class="fa-sharp fa-solid fa-circle-user fa-lg"></i></a></li>
  		  		<?php } else { ?>
  		  		<form action="./login_form.php">
  		  			<button type="submit" id="myModal" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
  		  		</form>
  		  		<?php } ?>
  		  	</ul>
  		  </div>
  		</div>
	</nav>
