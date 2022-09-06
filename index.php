	<?php include "./includes/_navbar.php";?>
	<div style="background-image: url('./images/background-blured (4).jpg');
			background-size:cover;">
		<div class="d-flex flex-row">
			<div class="title col-lg-6 col-md-6 col-sm-6">
				<div>
					<h1 id="title" class="text-left">Connecting 
						<span id="keyword1">artists</span>
					<br>with the <span id="keyword2">world</span></br></h1>
				</div>
				<div class="btns">
					<button class="btn header-btn" type="button" 
						onclick="location.href='./create.php'">Start now</button>
					<button class="btn header-btn explore-btn" type="button" 
						onclick="location.href='./explore.php'">Explore</button>
				</div>
			</div>
			<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-inner col-lg-6 col-md-6 col-sm-6">
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
	<div class="segment2 p-3">
		<div class="container my-3 py-2">
			<h1>Top 3 artists of the 
				<span style="text-decoration: underline; 
					text-decoration-color: #0AD6B4">week</span></h1>
    	</div>
    	<div class="cards row m-auto px-0 py-2">
			<div class="col-lg-4 col-md-3 col-sm-2">
				<div class="card m-auto" style="width: 18rem;">
					<div class="card-info w-50 h-30"></div>
					<img src="./images/simon-lee-J10iZHcZRbg-unsplash.jpg" 
						class="card-img">
				</div>
			</div>	
			<div class="col-lg-4 col-md-3 col-sm-2">
				<div class="card m-auto" style="width: 18rem;">
					<div class="card-info middle w-50 h-30"></div>
					<img src="./images/simon-lee-V8_xGwr3isA-unsplash.jpg" 
						class="card-img">
				</div>
			</div>
			<div class="col-lg-4 col-md-3 col-sm-2">
				<div class="card m-auto" style="width: 18rem;">
					<div class="card-info w-50 h-30"></div>
					<img src="./images/simon-lee-jbjGYIEBI20-unsplash.jpg" 
						class="card-img">
				</div>
			</div>
    	</div>
	</div>
	<div class="segment3 p-3 my-3">
		<div class="container">
			<h1 style="background: #CF75E6; width: 20%; margin: auto">Let's meet</h1>
    	</div>
    	<div class="row m-auto px-0 py-2">
		</div>
	</div>
	<?php include "./includes/_footer.php";?>
	</body>
</html>
