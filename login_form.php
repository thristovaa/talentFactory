<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device - width", initial-scale="1.0">
        <title> Login Form | Sunset Diary </title>
        <link rel="stylesheet" type="text/css" href="./css/style-login.css">
        <script src="./js/login.js"></script>
        <link rel="icon" type="image/png" href="./pics/logo/sunsetdiarylogo.png">
    </head>
    <body>
        <section>
            <div class = "container">
                <div class="flex">
                    <div class="user signinBx">
                        <div class="imgBx"> <img src="./images/login/login1.jpg" width="375px"> </div>
                        <div class="formBx">
                            <form action="./includes/login.php" method="post">
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
                        <form action="./includes/registration.php" method="post" enctype="multipart/form-data">
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
    </body>
</html>