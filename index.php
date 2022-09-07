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
			<h1>Top 3 creations of the 
				<span style="text-decoration: underline; 
					text-decoration-color: #0AD6B4">week</span></h1>
    	</div>
		<div class="row row-cols-1 row-cols-md-3 m-auto g-3 justify-content-center">
			<?php 
			
			$query = "SELECT * FROM posts ORDER BY create_rating DESC LIMIT 3 ";
			$rating_query = mysqli_query($connect, $query);

			while($row = mysqli_fetch_assoc($rating_query)){
				$create_id = $row['create_id'];
				$create_title = $row['create_title'];
				$create_rating = $row['create_rating'];
				$create_image = $row['create_image'];
				$create_author = $row['create_author'];
				$create_user_image = $row['create_author_image'];

			?>
			<div class="col-lg-4 col-md-12 col-sm-12 my-4 exp-card">
				
				<a href="./post.php?p_id=<?php echo $create_id; ?>">
					<div class="exp-img m-auto rounded" style="background-image: url('./images/create/<?php echo $create_image; ?>'); background-size: cover;
					background-position: center center;">
						<div class="exp-info d-flex flex-column align-items-center w-50 h-20">
							<img class="card-title pb-2" width="50px" style="border-radius:50%;" src="./images/pfp/<?php echo $create_user_image?>">
							<h5 class="card-title">By <?php echo $create_author; ?></h5>
							<p class="card-text">★ <?php echo $create_rating ?>/5</p>
						</div>
					</div>
				</a>
			</div>
			<?php } ?>
    	</div>
	</div>
	<div class="segment3 pt-5 mt-3">
		<div class="container">
			<h1 class="video-title" 
				style="background: #CF75E6; width: 20%; margin: auto">Let's meet</h1>
		</div>
		<div class="row m-auto w-auto px-0 py-5">      
			<video width="600" height="500" controls>
      		      <source src="./images/video/01_1.mp4" type="video/mp4">
      	</video>
	</div>
	</div>
	<?php include "./includes/_footer.php";?>
	</body>
</html>
