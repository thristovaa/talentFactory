<?php include "./includes/db.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device - width", initial-scale="1.0">
        <title> Login Form | Sunset Diary </title>
        <link rel="stylesheet" type="text/css" href="./css/style-login.css">
        <script src="./js/login.js"></script>
        <link rel="icon" type="image/png" href="./images/logo/star_pink.png">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>
        <?php 
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);

        $query = "SELECT * FROM users WHERE username = '{$username}' ";
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
        
        //$password = crypt($password, $db_user_password);

        if($username === $db_username && $password === $db_user_password){
            $_SESSION['id'] = $db_user_id;
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['user_pfp'] = $db_user_image;
            $_SESSION['email'] = $db_user_email;

            header("Location: ./index.php");
        } 
    }
    if(empty($_SESSION['username'])) {
        echo '<div class="alert alert-dismissible fade show m-0" style="background-color: #d586e9;" role="alert">
            Wrong username or password, please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    } ?>

    <?php 

        if(isset($_POST['register'])){
            $username = $_POST['username'];
            $user_firstname = $_POST['first_name'];
            $user_lastname = $_POST['last_name'];
            $user_email = $_POST['email'];
            $user_password = $_POST['password'];

            $user_image = $_FILES['image']['name']; 
            $user_image_temp = $_FILES['image']['tmp_name']; //temporary location; from this location to somewhere else;


            move_uploaded_file($user_image_temp, "./images/pfp/$user_image");

            if(!empty($user_firstname) && !empty($user_lastname) && !empty($username) && !empty($user_password) && !empty($user_email)){
                if(empty($user_image)){
                    $user_image = 'pfp.jpg';
                }
                $user_firstname = mysqli_real_escape_string($connect, $user_firstname);
                $user_lastname = mysqli_real_escape_string($connect, $user_lastname);
                $username = mysqli_real_escape_string($connect, $username);
                $user_password = mysqli_real_escape_string($connect, $user_password);
                $user_email = mysqli_real_escape_string($connect, $user_email);
                $user_image = mysqli_real_escape_string($connect, $user_image);

                $query = "INSERT INTO users(user_firstname, user_lastname, username, user_password, user_email, user_image)";
                $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$username}', '{$user_password}', '{$user_email}', '{$user_image}')";
                $register_user_query = mysqli_query($connect, $query);
                if(!$register_user_query){
                    die("QUERY FAILED " . mysqli_error($connect) . ' ' . mysqli_errno($connect));
                }
            }else{
                echo '<div class="alert alert-dismissible fade show m-0" style="background-color: #d586e9;" role="alert">
                Please fill every field.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }

        } 

    ?>
        <section>
            <div class = "container">
                <div class="flex">
                    <div class="user signinBx">
                        <div class="imgBx"> <img src="./images/login/login1.jpg" width="375px"> </div>
                        <div class="formBx">
                            <form action="" method="post">
                                <h2>Sign in</h2>
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <input type="submit" name="login" value="Login">
                                <p class="signup">Don't have an account? <a href = "#" onclick="toggleForm();">Sign up.</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="user signupBx">
                    <div class="formBx">
                        <form action="" method="post" enctype="multipart/form-data">
                            <h2>Create an Account</h2>
                            <input type="text" name="username" placeholder="Username">
                            <input type="text" name="first_name" placeholder="First Name">
                            <input type="text" name="last_name" placeholder="Last Name">
                            <input type="email" name="email" placeholder="Email Adress">
                            <input type="password" name="password" placeholder="Password">
                            <label for="file-upload" class="custom-file-upload mx-2">
                                <ion-icon name="cloud-upload-outline"></ion-icon> Upload profile picture
                            </label>
                            <input type="file" id="file-upload" name="image" placeholder="Upload Profile Picture">
                            <input type="submit" name="register" value="Sign Up">
                            <p class="signup">Already have an account? <a href = "#" onclick="toggleForm();">Sign in.</a> </p>
                        </form>
                    </div>
                    <div class="imgBx"> <img src="./images/login/login2.jpg" width="375px"> </div>
                </div>
            </div>
        </section>
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>