
        <?php include "./includes/_navbar.php" ?>

        <script type="text/javascript">
  
            function change(id)
            {
                var cname=document.getElementById(id).className;
                var ab=document.getElementById(id+"_hidden").value;
                document.getElementById(cname+"rating").innerHTML=ab;
                    console.log("NEshto ", ab);


                document.getElementById('phprating').value = ab;


                for(var i=ab;i>=1;i--)
                {
                    document.getElementById(cname+i).src="./images/logo/star_pink.png";
                }
                var id=parseInt(ab)+1;
                for(var j=id;j<=5;j++)
                {
                    document.getElementById(cname+j).src="./images/logo/star_empty.png";
                }
            }
            function check (){
                let inputs = document.querySelectorAll()
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function(e) {
                $("#date").datepicker();
            });
        </script>
        <?php 

            if(isset($_GET['p_id'])) {
                $the_post_id = $_GET['p_id'];
            }

        ?>

        <?php 
            if(isset($_POST['submit_rating'])){  
                $php_rating=$_POST['phprating'];

                $query = "INSERT INTO rating(rating, post_id) VALUES(
                    '" . mysqli_real_escape_string($connect, $php_rating) . "', 
                    '" . mysqli_real_escape_string($connect, $the_post_id) . "'
                )";

                $insert = mysqli_query($connect, $query);
                if(!$insert){
                    die("QUERY FAILED " . mysqli_error($connect) . ' ' . mysqli_errno($connect));
                }

                $query_avrg = "SELECT * FROM rating WHERE post_id = '{$the_post_id}'";
                $select_all_cretions = mysqli_query($connect, $query_avrg);
                $sum = 0;

                while($row=mysqli_fetch_array($select_all_cretions))
                {
                    $sum++;
                    $all_rating[]=$row['rating'];              
                }

                $sum_avrg_ratings = number_format((array_sum($all_rating) / $sum), 2);

                $query_insert_posts = "UPDATE posts SET create_rating = '{$sum_avrg_ratings}' WHERE create_id = '{$the_post_id}';";

                $daimu = mysqli_query($connect, $query_insert_posts);
                if(!$daimu){
                    die("QUERY FAILED " . mysqli_error($connect) . ' ' . mysqli_errno($connect));
                }

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
				<div class="col-lg-6 col-md-12 col-sm-12 p-4 post-author-container">
                    <div class="row d-flex align-items-end">
                        <div class="col-12">
                            <h1 class="text-align-left"><?php echo $post_title; ?></h1>
                        </div>
                        <div class="col-12">
                            <p class="text-align-left">Category: <mark style="background-color: #d586e9;"><?php echo $post_category; ?></mark></p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center rounded my-2" style="border: 3px #0ad6b4 solid;">
                        <div class="col-3 p-2">
                            <img src="./images/pfp/<?php echo $post_author_image; ?>"  width="60px" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="col-9 p-2 text-align-left">
                            by<h4 style="margin: 0;"><?php echo $post_author; ?></h4>
                        </div>
					</div>
				</div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="rounded" style="border: 0px" >
                        <img src="./images/create/<?php echo $post_image; ?>" class="rounded w-100" alt="">
                    </div>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Buy now
                            </div>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Send message" rows="3" style="color: black;"></textarea>
                                    </div>
									<button class="btn send-btn px-5">Send</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 p-4">
					<div class="full-screen-author-container">
						<div class="row d-flex align-items-end">
                    	    <div class="col-12">
                    	        <h1 class="text-align-left"><?php echo $post_title; ?></h1>
                    	    </div>
                    	    <div class="col-12">
                    	        <p class="text-align-left">Category: <mark style="background-color: #d586e9;"><?php echo $post_category; ?></mark></p>
                    	    </div>
                    	</div>
                    	<div class="row d-flex align-items-center rounded my-2" style="border: 3px #0ad6b4 solid;">
                    	    <div class="col-3 p-2">
                    	        <img src="./images/pfp/<?php echo $post_author_image; ?>"  width="60px" style="border-radius: 50%;" alt="">
                    	    </div>
                    	    <div class="col-9 p-2 text-align-left">
                    	        by<h4 style="margin: 0;"><?php echo $post_author; ?></h4>
                    	    </div>
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
                                            <h5 class="post-title">Price:</h5>
                                        </div>
                                        <div class="col-6 text-align-left">
                                            <p class="fs-3 m-auto"><?php echo $post_price; ?> lv</p>
                                        </div>
                                    </div>
									<div class="row d-flex align-items-end">
                                        <div class="col-6 text-align-left ml-2">
											<h5 class="post-title">Post content: </h5>
                                        </div>
                                        <div class="col-6 text-align-left">
											<p class="fs-5 m-auto">
												<?php echo $post_content; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Rate this creation
                            </button>
                            </h2>
                            <form method="post" action=" ">
                                <div class="div rating">
                                    <input type="hidden" id="php1_hidden" name="rating[]" value="1">
                                    <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php1" class="php">
                                    <input type="hidden" id="php2_hidden" name="rating[]" value="2">
                                    <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php2" class="php">
                                    <input type="hidden" id="php3_hidden" name="rating[]" value="3">
                                    <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php3" class="php">
                                    <input type="hidden" id="php4_hidden" name="rating[]" value="4">
                                    <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php4" class="php">
                                    <input type="hidden" id="php5_hidden" name="rating[]" value="5">
                                    <img src="./images/logo/star_empty.png" onmouseover="change(this.id);" id="php5" class="php">
                                </div>

                            <input type="hidden" name="phprating" id="phprating" value="0">
							<button class="btn send-btn rating-btn px-5" 
								name="submit_rating">Send</button>
                            </form> 
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
