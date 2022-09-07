<?php include "./includes/_navbar.php";?>

	<div class="container mt-5">
		<div class="m-2">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-1" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabList-pane-1" role="tab" aria-controls="tabList-pane-1" aria-selected="true">Trending</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-2" class="nav-link exp-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-2" role="tab" aria-controls="tabList-pane-2" aria-selected="false">Art</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-3" class="nav-link exp-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-3" role="tab" aria-controls="tabList-pane-3" aria-selected="false">Digital Art</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-4" class="nav-link exp-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-4" role="tab" aria-controls="tabList-pane-4" aria-selected="false">Photography</button>
				</li>
			</ul>
		</div>
		<div class="tab-content">
			<div id="tabList-pane-1" class="tab-pane active" role="tabpanel" aria-labelledby="tabList-1">
				<!--ottuk-->	
				<div class="row row-cols-1 row-cols-md-3 m-auto g-3">
					<?php 
	      
					$query = "SELECT * FROM posts ";
					$query .= "ORDER BY create_id DESC";
	
					$select_all_posts_query = mysqli_query($connect, $query);
					while($row = mysqli_fetch_assoc($select_all_posts_query)){
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
								<div class="exp-info w-50 h-20">
									<img class="card-title pb-2" width="50px" style="border-radius:50%;" src="./images/pfp/<?php echo $create_user_image?>">
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
				<!--dotuka-->
			</div>
			<div id="tabList-pane-2" class="tab-pane" role="tabpanel" aria-labelledby="tabList-2">
				<!--ottuk-->
	
				<div class="row row-cols-1 row-cols-md-3 m-auto">
					<?php 
	      
					$query = "SELECT * FROM posts ";
					$query .= "ORDER BY create_id DESC";
	
					$select_art_posts_query = mysqli_query($connect, $query);
					while($row = mysqli_fetch_assoc($select_art_posts_query)){
						$create_id = $row['create_id'];
						$create_title = $row['create_title'];
						$create_rating = $row['create_rating'];
						$create_image = $row['create_image'];
						$create_author = $row['create_author'];
						$create_category = $row['create_category'];
						$create_user_image = $row['create_author_image'];
						
						if($create_category == 'Art'){
					?>
					<div class="col-lg-4 col-md-12 col-sm-12 my-4 exp-card">
						
						<a href="./post.php?p_id=<?php echo $create_id; ?>">
							<div class="exp-img m-auto rounded" style="background-image: url('./images/create/<?php echo $create_image; ?>'); background-size: cover;
							background-position: center center;">
								<div class="exp-info w-50 h-20">
									<img class="card-title pb-2" width="50px" style="border-radius:50%;" src="./images/pfp/<?php echo $create_user_image?>">
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</a>
					</div>
					<?php }
					else{continue;}
				} ?>
				</div>
	
				<!--dotuk-->
			</div>
			<div id="tabList-pane-3" class="tab-pane" role="tabpanel" aria-labelledby="tabList-3">
				<!--ottuk-->
	
				<div class="row row-cols-1 row-cols-md-3 m-auto">
					<?php 
	      
					$query = "SELECT * FROM posts ";
					$query .= "ORDER BY create_id DESC";
	
					$select_digital_posts_query = mysqli_query($connect, $query);
					while($row = mysqli_fetch_assoc($select_digital_posts_query)){
						$create_id = $row['create_id'];
						$create_title = $row['create_title'];
						$create_rating = $row['create_rating'];
						$create_image = $row['create_image'];
						$create_author = $row['create_author'];
						$create_category = $row['create_category'];
						$create_user_image = $row['create_author_image'];
						
						if($create_category == 'Digital art'){
					?>
					<div class="col-lg-4 col-md-12 col-sm-12 my-4 exp-card">
						
						<a href="./post.php?p_id=<?php echo $create_id; ?>">
							<div class="exp-img m-auto rounded" style="background-image: url('./images/create/<?php echo $create_image; ?>'); background-size: cover;
							background-position: center center;">
								<div class="exp-info w-50 h-20">
									<img class="card-title pb-2" width="50px" style="border-radius:50%;" src="./images/pfp/<?php echo $create_user_image?>">
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</a>
					</div>
					<?php }
					else{continue;}
				} ?>
				</div>
	
				<!--dotuk-->
			</div>
			<div id="tabList-pane-4" class="tab-pane" role="tabpanel" aria-labelledby="tabList-4">
				<!--ottuk-->
	
				<div class="row row-cols-1 row-cols-md-3 m-auto">
					<?php 
	      
					$query = "SELECT * FROM posts ";
					$query .= "ORDER BY create_id DESC";
	
					$select_photo_posts_query = mysqli_query($connect, $query);
					while($row = mysqli_fetch_assoc($select_photo_posts_query)){
						$create_id = $row['create_id'];
						$create_title = $row['create_title'];
						$create_rating = $row['create_rating'];
						$create_image = $row['create_image'];
						$create_author = $row['create_author'];
						$create_category = $row['create_category'];
						$create_user_image = $row['create_author_image'];
						
						if($create_category == 'Photography'){
					?>
					<div class="col-lg-4 col-md-12 col-sm-12 my-4 exp-card">
						
						<a href="./post.php?p_id=<?php echo $create_id; ?>">
							<div class="exp-img m-auto rounded" style="background-image: url('./images/create/<?php echo $create_image; ?>'); background-size: cover;
							background-position: center center;">
								<div class="exp-info w-50 h-20">
									<img class="card-title pb-2" width="50px" style="border-radius:50%;" src="./images/pfp/<?php echo $create_user_image?>">
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</a>
					</div>
					<?php }
					else{continue;}
				} ?>
				</div>
	
				<!--dotuk-->
			</div>
		</div>
	</div>
	<?php include "./includes/_footer.php";?>
	<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>



