<?php include "./includes/_navbar.php";?>

	<div class="header">
		<div class="header-back d-flex" style="background-image: url('./images/streetart4.jpg');height:30vh; z-index: -1;background-size:cover; "></div>
	</div>
	<div class="container p-5">
		<?php 
		
		$query = "SELECT * FROM users WHERE username = '{$_SESSION['username']}' ";
        $select_user_query = mysqli_query($connect, $query);

        if(!$select_user_query) {
            die("QUERY FAILED " . mysqli_error($connect));
        } 
        while($row = mysqli_fetch_array($select_user_query)){
            $db_user_id = $row['user_id'];
            $db_username = $row['username'];
            $db_user_password = $row['user_password'];
            $db_user_firstname = $row['user_firstname'];
            $db_user_lastname = $row['user_lastname'];
            $db_user_image = $row['user_image'];
            $db_user_email = $row['user_email'];
		
		?>
			<img src="./images/pfp/<?php echo $db_user_image; ?>" width="150px" style="border-radius:50%; z-index:1000;" alt="">
			<h1 class="pt-2"><?php echo $db_user_firstname; ?> <?php echo $db_user_lastname; ?></h1>
			<p><mark style="background-color: #d586e9; padding:0.3rem;">@<?php echo $db_username; ?></mark></p>

		<?php } ?>
	</div>
	<div class="container">
	<div class="row row-cols-1 row-cols-md-3 m-auto g-3">
					<?php 
	      
					$query = "SELECT * FROM posts WHERE create_author = '{$_SESSION['username']}' ";
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
	</div>
	<?php include "./includes/_footer.php";?>
	<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>



