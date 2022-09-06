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
                <div class="col-5">
                    <div class="rounded" style="border: 2px #d1d1d1 solid;" >
                        <img src="./images/create/<?php echo $post_image; ?>" class="rounded p-3" width="350px" alt="">
                    </div>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Description
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo $post_content; ?>
                            </div>
                            </div>
                        </div>
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
                <div class="col-7 p-4">
                    <div class="row d-flex align-items-end">
                        <div class="col-6">
                            <h1 class="text-align-left"><?php echo $post_title; ?></h1>
                        </div>
                        <div class="col-6">
                            <p class="text-align-left">Category: <?php echo $post_category; ?></p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center rounded my-2" style="border: 2px #d1d1d1 solid;">
                        <div class="col-3 p-2">
                            <img src="./images/pfp/<?php echo $post_author_image; ?>"  width="60px" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="col-9 p-2 text-align-left">
                            by<h4 style="margin: 0;"><?php echo $post_author; ?></h4>
                        </div>
                    </div>
                    <div class="row d-flex align-items-end">
                        <div class="col-6 text-align-left ml-2">
                            <h3>Price</h3>
                        </div>
                        <div class="col-6 text-align-left">
                            <p><?php echo $post_price; ?> lv</p>
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
        <?php include "./includes/_footer.php"; ?>
    </body>
</html>