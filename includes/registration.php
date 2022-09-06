<?php include "./db.php" ?>
<?php 

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $user_firstname = $_POST['first_name'];
        $user_lastname = $_POST['last_name'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];

        $user_image = $_FILES['image']['name']; 
        $user_image_temp = $_FILES['image']['tmp_name']; //temporary location; from this location to somewhere else;


        move_uploaded_file($user_image_temp, "../images/pfp/$user_image");

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
        }
        
        echo $user_firstname;
        echo "<br>";
        echo $user_lastname;
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $user_password;
        echo "<br>";
        echo $user_email;
        echo "<br>";
        echo $user_image;
        echo "<br>";
    } 

?>