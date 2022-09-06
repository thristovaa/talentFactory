<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>
        <?php include "./includes/_navbar.php" ?>
        <?php 

            if(isset($_GET['p_id'])) {
                $the_post_id = $_GET['p_id'];
            }

        ?>
        <div class="container mt-4">
        <?php 
        
        $query = "SELECT * FROM posts WHERE create_id = $the_post_id ";

        $select_all_posts_query = mysqli_query($connect, $query);
        while($row = mysqli_fetch_assoc($select_all_posts_query)){
            $post_title = $row['create_title'];
            $post_author = $row['create_author'];
            $post_price = $row['create_price'];
            $post_category = $row['create_category'];
            $post_image = $row['create_image'];
            $post_content = $row['create_description'];
            $post_author_image = $row['create_author_image'];
        
        ?>
            <div class="row">
                <div class="col-6">
                    <div class="rounded" style="border: 0px" >
                        <img src="./images/create/<?php echo $post_image; ?>" class="rounded w-100" alt="">
                    </div>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Send a message
                            </div>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button class="btn">Send</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-4">
                    <div class="row d-flex align-items-end">
                        <div class="col-12">
                            <h1 class="text-align-left"><?php echo $post_title; ?></h1>
                        </div>
                        <div class="col-12">
                            <p class="text-align-left">Category: <mark style="background-color: #d586e9;"><?php echo $post_category; ?></mark></p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center rounded my-2" style="border: 2px #0ad6b4 solid;">
                        <div class="col-3 p-2">
                            <img src="./images/pfp/<?php echo $post_author_image; ?>"  width="60px" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="col-9 p-2 text-align-left">
                            by<h4 style="margin: 0;"><?php echo $post_author; ?></h4>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Description
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-align-left">
                                <div class="row">
                                    <div class="row d-flex align-items-end">
                                        <div class="col-6 text-align-left ml-2">
                                            <h3>Price</h3>
                                        </div>
                                        <div class="col-6 text-align-left">
                                            <p><?php echo $post_price; ?> lv</p>
                                        </div>
                                    </div>
                                </div>
                                <?php echo $post_content; ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="container-fluid my-5" style="background-color: #0ad6b4;">
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="p-4">More from this creator:</h2>
            </div>
        </div>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 m-auto">
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
						$create_user_image = $row['create_author_image'];

                        if($create_author == $post_author){
                            if($create_id != $the_post_id){                           

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
					<?php 
				} } } ?>
				</div>
        </div>
        <?php include "./includes/_footer.php"; ?>
    </body>
</html>