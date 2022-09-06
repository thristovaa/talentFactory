	<?php include "./includes/_navbar.php";?>
	<div style="background-image: url('./images/background-blured (4).jpg');
			background-size:cover;">
		<div class="segment1 d-flex flex-row align-items-center">
			<div class="title col-lg-5 col-md-12 col-sm-12">
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
			  <div class="col-lg-5 col-md-6 col-sm-6">
            <img class="glava" src="./images/glava.png" style="max-width: 500px;" alt="">
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
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="card m-auto" style="width: 18rem;">
					<div class="card-info w-50 h-30"></div>
					<img src="./images/geri1.jpg" 
						class="card-img">
				</div>
			</div>	
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="card m-auto" style="width: 18rem;">
					<div class="card-info middle w-50 h-30"></div>
					<img src="./images/geri2.jpg" 
						class="card-img">
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="card m-auto" style="width: 18rem;">
					<div class="card-info w-50 h-30"></div>
					<img src="./images/geri3.jpg" 
						class="card-img">
				</div>
			</div>
    	</div>
	</div>
	<div class="segment3 pt-5 mt-3">
		<div class="container">
			<h1 style="background: #CF75E6; width: 20%; margin: auto">Let's meet</h1>
    </div>
    <div class="row m-auto w-auto px-0 py-5">      
      <video width="800" height="600" controls>
            <source src="./images/video/01_1.mp4" type="video/mp4">
      </video>
		</div>
	</div>
	<?php include "./includes/_footer.php";?>
	</body>
</html>
