<?php include "./includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap%27" rel="stylesheet">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Talent Factory</title>
    </head>
	<body>
		<?php include "./includes/_navbar.php";?>
		<div class="container mt-5">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-1" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabList-pane-1" role="tab" aria-controls="tabList-pane-1" aria-selected="true">Trending</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-2" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-2" role="tab" aria-controls="tabList-pane-2" aria-selected="false">Art</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-3" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-3" role="tab" aria-controls="tabList-pane-3" aria-selected="false">Digital Art</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-4" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-4" role="tab" aria-controls="tabList-pane-4" aria-selected="false">Photography</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-5" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-5" role="tab" aria-controls="tabList-pane-5" aria-selected="false">Video</button>
				</li>
			</ul>
			<div class="tab-content">
				<div id="tabList-pane-1" class="tab-pane active" role="tabpanel" aria-labelledby="tabList-1">
					<!--ottuk-->	
					<div class="row row-cols-1 row-cols-md-3 g-4">
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

						?>
						<div class="col-4 my-3">
							<div class="card h-100">
							<img src="./images/create/<?php echo $create_image; ?>" class="card-img-top">
								<div class="card-body rounded">
								<h5 class="card-title"><a href="./post.php?p_id=<?php echo $create_id; ?>"><?php echo $create_title; ?></a></h5>
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!--dotuk-->
				</div>
				<div id="tabList-pane-2" class="tab-pane" role="tabpanel" aria-labelledby="tabList-2">
					<!--ottuk-->

					<div class="row row-cols-1 row-cols-md-3 g-4">
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
							
							if($create_category == 'Art'){
						?>
						<div class="col-4 my-3">
							<div class="card h-100">
							<img src="./images/create/<?php echo $create_image; ?>" class="card-img-top">
								<div class="card-body rounded">
								<h5 class="card-title"><a href="./post.php?p_id=<?php echo $create_id; ?>"><?php echo $create_title; ?></a></h5>
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</div>
						<?php }
						else{continue;}
					} ?>
					</div>

					<!--dotuk-->
				</div>
				<div id="tabList-pane-3" class="tab-pane" role="tabpanel" aria-labelledby="tabList-3">
					<!--ottuk-->

					<div class="row row-cols-1 row-cols-md-3 g-4">
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
							
							if($create_category == 'Digital art'){
						?>
						<div class="col-4 my-3">
							<div class="card h-100">
							<img src="./images/create/<?php echo $create_image; ?>" class="card-img-top">
								<div class="card-body rounded">
								<h5 class="card-title"><a href="./post.php?p_id=<?php echo $create_id; ?>"><?php echo $create_title; ?></a></h5>
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</div>
						<?php }
						else{continue;}
					} ?>
					</div>

					<!--dotuk-->
				</div>
				<div id="tabList-pane-4" class="tab-pane" role="tabpanel" aria-labelledby="tabList-4">
					<!--ottuk-->

					<div class="row row-cols-1 row-cols-md-3 g-4">
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
							
							if($create_category == 'Photography'){
						?>
						<div class="col-4 my-3">
							<div class="card h-100">
							<img src="./images/create/<?php echo $create_image; ?>" class="card-img-top">
								<div class="card-body rounded">
									<h5 class="card-title"><a href="./post.php?p_id=<?php echo $create_id; ?>"><?php echo $create_title; ?></a></h5>
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</div>
						<?php }
						else{continue;}
					} ?>
					</div>

					<!--dotuk-->
				</div>
				<div id="tabList-pane-5" class="tab-pane" role="tabpanel" aria-labelledby="tabList-5">
					<!--ottuk-->

					<div class="row row-cols-1 row-cols-md-3 g-4">
						<?php 
              
						$query = "SELECT * FROM posts ";
						$query .= "ORDER BY create_id DESC";

						$select_video_posts_query = mysqli_query($connect, $query);
						while($row = mysqli_fetch_assoc($select_video_posts_query)){
							$create_id = $row['create_id'];
							$create_title = $row['create_title'];
							$create_rating = $row['create_rating'];
							$create_image = $row['create_image'];
							$create_author = $row['create_author'];
							$create_category = $row['create_category'];
							
							if($create_category == 'Videos'){
						?>
						<div class="col-4 my-3">
							<div class="card h-100">
							<img src="./images/create/<?php echo $create_image; ?>" class="card-img-top">
								<div class="card-body rounded">
								<h5 class="card-title"><a href="./post.php?p_id=<?php echo $create_id; ?>"><?php echo $create_title; ?></a></h5>
									<h5 class="card-title">By <?php echo $create_author; ?></h5>
									<p class="card-text">★ <?php echo $create_rating ?>/5</p>
								</div>
							</div>
						</div>
						<?php }
						else{continue;}
					} ?>
					</div>

					<!--dotuk-->
				</div>
			</div>
		</div>
		<script src="./js/bootstrap.bundle.min.js"></script>
	</body>
</html>



