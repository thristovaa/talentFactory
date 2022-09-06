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
            <div class="row">
                <div class="col-6">
                    <img src="./images/create/background-blured.jpg" class="rounded" width="300px" alt="">
                </div>
                <div class="col-6">
                    <h1>Title</h1>
                    <p>description description</p>
                    <div class="row d-flex align-items-center">
                        <div class="col-6">
                            <h2>Author</h2>
                        </div>
                        <div class="col-6">
                            <p>+ kartinka za avtor</p>
                        </div>
                        <div class="col-6">
                            <h3>Price</h3>
                        </div>
                        <div class="col-6">
                            <p>90</p>
                        </div>
                        <div class="col-6">
                            <h3>Description</h3>
                        </div>
                        <div class="col-6">
                            <p>random words :)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>