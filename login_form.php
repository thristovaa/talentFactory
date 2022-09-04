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
                            <form>
                                <h2>Sign in</h2>
                                <input type="text" name="" placeholder="Username">
                                <input type="password" name="" placeholder="Password">
                                <input type="submit" name="" value="Login">
                                <p class="signup">Don't have an account? <a href = "#" onclick="toggleForm();">Sign up.</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="user signupBx">
                    <div class="formBx">
                        <form>
                            <h2>Create an Account</h2>
                            <input type="text" name="" placeholder="Username">
                            <input type="email" name="" placeholder="Email Adress">
                            <input type="password" name="" placeholder="Create Password">
                            <input type="password" name="" placeholder="Confirm Password">
                            <input type="submit" name="" value="Sign Up">
                            <p class="signup">Already have an account? <a href = "#" onclick="toggleForm();">Sign in.</a> </p>
                        </form>
                    </div>
                    <div class="imgBx"> <img src="./images/login/login2.jpg" width="375px"> </div>
                </div>
            </div>
        </section>
    </body>
</html>