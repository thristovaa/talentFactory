<div class="container my-4">
    <form class="container-form row d-flex align-items-end" action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 col-4">
            <label for="exampleFormControlInput1" class="form-label w-100 m-2" style="text-align: left;">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3 col-4">
            <select class="form-select" aria-label="Default select example"> 
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
        <div class="mb-3 col-4">
            <label for="exampleFormControlInput1" class="form-label w-100 m-2" style="text-align: left;">Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label w-100 m-2" style="text-align: left;">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12 d-flex flex-row w-100 justify-content-center">
            <p class="mx-2"><label for="post_category">Image</label></p>
            <label for="file-upload" class="custom-file-upload mx-2">
                <ion-icon name="cloud-upload-outline"></ion-icon> Upload image
            </label>
            <input id="file-upload" type="file" name="image"/>
        </div>
    </form>
</div>