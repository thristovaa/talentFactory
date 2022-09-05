<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>
        <?php include "./includes/db.php"; ?>
        <?php
            if(isset($_GET['source'])){
                $source = $_GET['source'];
            } else {
                $source = '';
            }

            switch($source) {
                case 'edit_user':
                    include "./includes/edit_user.php";
                    break;
                default:
                    include "./includes/add_user.php";
                    break;
            }
        ?>
    </body>
</html>