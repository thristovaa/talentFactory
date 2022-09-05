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
		<?php include "./includes/_navbar.php";?>
		<div  
			style="background-image: url('./images/background-blured (3).jpg');
				background-size:cover;">
			<div class="d-flex flex-row">
				<div class="title col-lg-6">
					<div>
						<h1 id="title" class="text-left">Connecting 
							<span id="keyword1">artists</span>
						<br>with the <span id="keyword2">world</span></br></h1>
					</div>
					<div>
						<button class="btn header-btn" type="button" 
							href="./create.php">Start now</button>
						<button class="btn header-btn" type="button" 
							href="./explore.php">Explore</button>
					</div>
				</div>
				<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner col-lg-6">
						<div class="carousel-item active" data-bs-interval="10000">
						  <img src="./images/simon-lee-hbFKxsIqclc-unsplash.jpg" 
							class="d-block w-100" alt="...">
				    	</div>
				    	<div class="carousel-item" data-bs-interval="2000">
						  <img src="./images/joshua-coleman-kFRKvJQtNHg-unsplash.jpg" 
								class="d-block w-100" alt="...">
				    	</div>
				    	<div class="carousel-item">
						  <img src="./images/simon-lee-zA66MV4EyXc-unsplash.jpg" 
								class="d-block w-100" alt="...">
				    	</div>
				    	<div class="carousel-item">
						  <img src="./images/simon-lee-2FWcYzN7X_c-unsplash.jpg" 
								class="d-block w-100" alt="...">
				    	</div>
					</div>
					<button class="carousel-control-prev carousel-button" type="button" 
						data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next carousel-button" type="button" 
						data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
			</div>
		</div>
        <div class="container mt-3">
            <h1 style="font-family: 'Lobster', cursive;">Заглавие</h1>
        </div>
        <div class="container">
            <p style="font-family: 'Raleway', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
		<?php include "./includes/_footer.php";?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/3077a13519.js" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</html>
