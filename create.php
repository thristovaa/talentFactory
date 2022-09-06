<?php include "./includes/db.php"; ?>

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
        <?php include "./includes/_navbar.php"; ?>
        <div class="header">
            <div class="header-back d-flex" style="padding-left: 4rem; background-image: url('./images/backgrounds/bg3.png');">
                <div class="content align-self-center">
                    <h1>Create</h1>
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: #010028;">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: #010028;">Create</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if(isset($_GET['source'])){
                $source = $_GET['source'];
            } else {
                $source = '';
            }

            switch($source) {
                case 'edit_post':
                    include "./includes/edit_crate.php";
                    break;
                default:
                    include "./includes/add_create.php";
                    break;
            }        
        ?>
        <?php include "./includes/_footer.php"; ?>
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>