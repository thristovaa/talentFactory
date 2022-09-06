<?php 

    if(isset($_POST['create_post'])){
        $post_title = $_POST['title'];
        $post_author = $_SESSION['username'];
        $post_author_image = $_SESSION['user_pfp'];

        $post_image = $_FILES['image']['name']; 
        $post_image_temp = $_FILES['image']['tmp_name']; //temporary location; from this location to somewhere else;

        $post_content = $_POST['description'];
        $post_category = $_POST['category'];
        $post_price = $_POST['price'];
        $post_date = date('d.m.y');
        $post_rating = 0;

        move_uploaded_file($post_image_temp, "./images/create/$post_image");

        $query = "INSERT INTO posts(create_title, create_description, create_author, create_category, create_rating, create_date, create_image, create_price, create_author_image)";
        $query .= " VALUES(
            '" . mysqli_real_escape_string($connect, $post_title) . "', 
            '" . mysqli_real_escape_string($connect, $post_content) . "', 
            '" . mysqli_real_escape_string($connect, $post_author) . "',  
            '" . mysqli_real_escape_string($connect, $post_category) . "',  
            '" . mysqli_real_escape_string($connect, $post_rating) . "',   
            now(), 
            '" . mysqli_real_escape_string($connect, $post_image) . "',  
            '{$post_price}', 
            '" . mysqli_real_escape_string($connect, $post_author_image) . "'
        )";
                
        $create_post_query = mysqli_query($connect, $query);

        header("Location: ./explore.php");
    } 

?>

<div class="container py-3">
    <form class="container-form row d-flex align-items-end" action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-4">
            <label for="exampleFormControlInput1" class="form-label w-100 m-2" style="text-align: left;">Title</label>
			<input type="text" class="form-control transparent-input" 
				id="exampleFormControlInput1" name="title">
        </div>
        <div class="mb-3 col-4">
			<select class="form-select transparent-input" 
				aria-label="Default select example" name="category" style="color: #E0E0E0"> 
                <option selected>Choose category</option>
                <?php 
                
                    $query = "SELECT * FROM category";
                    $select_all_categories_query = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_assoc($select_all_categories_query)){
                    $cat_id = $row['cat_id'];
                    $cat_name = $row['cat_title'];
                    
                    if($cat_id == 1){
                        continue;
                    }
                ?>
                <option value="<?php echo $cat_name; ?>"><?php echo $cat_name; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3 col-4 w-80 m-auto">
            <label for="exampleFormControlInput1" class="form-label w-100 m-2" style="text-align: left;">Price</label>
            <input type="number" class="form-control transparent-input" id="exampleFormControlInput1" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label w-100 m-2" style="text-align: left;">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="col-12 d-flex flex-row w-100 justify-content-center mb-3">
			<label for="file-upload" class="custom-file-upload mx-2" 
				style="color: #E0E0E0">Upload image</label>
            <input id="file-upload" type="file" name="image"/>
        </div>
        <div class="col-12">
			<input type="submit" class="btn" name="create_post"
				 style="background-color: #0ad6b4; color: #E0E0E0" value="Upload">
        </div>
    </form>
</div>
