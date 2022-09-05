<?php 

    if(isset($_POST['create_user'])){
        $user_firstname = $_POST['firstname'];
        $user_lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $user_password = $_POST['password'];
        $user_email = $_POST['email'];

        $user_image = $_FILES['image']['name']; 
        $user_image_temp = $_FILES['image']['tmp_name']; //temporary location; from this location to somewhere else;


        move_uploaded_file($user_image_temp, "./images/pfp/$user_image");

        if(!empty($user_firstname) && !empty($user_lastname) && !empty($username) && !empty($user_password) && !empty($user_email)){

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
        
        header("Location: index.php");
    } 

?>

<div class="cardHeader">
    <h2>Добави пост</h2>
</div>
<form class="container-form" action="registration.php" method="post" enctype="multipart/form-data">
    <div class="row gx-4">
        <div class="col-md-6">
            <div class="form-floating mb-4">
            <input id="form_name" type="text" name="firstname" class="form-control" placeholder="jane.doe@example.com">
            <label for="form_name">Име *</label>
            </div>
        </div>
        <!-- /column -->
        <div class="col-md-6">
            <div class="form-floating mb-4">
            <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Doe">
            <label for="form_lastname">Фамилия *</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-4">
            <input id="form_name" type="text" name="username" class="form-control" placeholder="jane.doe@example.com">
            <label for="form_name">Потрбителско Име *</label>
            </div>
        </div>
        <!-- /column -->
        <div class="col-md-6">
            <div class="form-floating mb-4">
            <input id="form_lastname" type="password" name="password" class="form-control" placeholder="Doe">
            <label for="form_lastname">Парола *</label>
            </div>
        </div>
        <!-- /column -->
        <div class="col-12">
            <div class="form-floating mb-4">
            <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com">
            <label for="form_email">Имейл *</label>
            </div>
        </div>
        <div class="col-6">
            <p>
                <label for="post_category">Изображение</label>
            </p>
        </div>
        <div class="col-6">
            <label for="file-upload" class="custom-file-upload">
                <ion-icon name="cloud-upload-outline"></ion-icon> Качи изображение
            </label>
            <input id="file-upload" type="file" name="image"/>
        </div>
        <!-- /column -->
        <div class="col-12 text-center mt-5">
            <input type="submit" name="create_user" class="btn btn-soft-orange rounded-pill me-1" value="Регистрирай се">
        </div>
    </div>
</form>