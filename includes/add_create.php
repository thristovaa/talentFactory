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
        <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
			<input type="text" class="form-control transparent-input m-2" 
				id="exampleFormControlInput1" name="title" placeholder="Title">
        </div>
        <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
			<select class="form-select transparent-input m-2" 
				aria-label="Default select example" name="category"> 
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
        <div class="mb-3 col-lg-4 col-md-4 col-sm-4 w-80 m-auto">
			<input type="number" class="form-control transparent-input m-2" 
				id="exampleFormControlInput1" name="price" placeholder="Price">
        </div>
        <div class="mb-3">
			<textarea class="form-control m-2" id="exampleFormControlTextarea1" 
				placeholder="Description" rows="3" name="description"></textarea>
        </div>
		<div class="row d-flex m-auto">
			<div class="col-lg-6 col-md-6 col-sm-6 mb-3">
				<label for="file-upload" class="custom-file-upload mx-2" 
					style="color: #E0E0E0">Upload image</label>
        	    <input id="file-upload" type="file" name="image"/>
        	</div>
        	<div class="col-lg-6 col-md-6 col-sm-6">
				<input type="submit" class="btn" name="create_post"
					 style="background-color: #0ad6b4; color: #E0E0E0" value="Upload">
        	</div>
		</div>
    </form>
</div>
