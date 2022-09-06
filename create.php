	<?php include "./includes/_navbar.php"; ?>
	<div class="row create-bg w-100 h-100" style="background-image: url('./images/steve-johnson-JNgehrAsQ-o-unsplash.jpg'); background-size: cover">
		<div class="upload-container w-50 m-auto rounded">
			<div class="content m-auto pt-4">
	    	    <h1>Upload</h1>
	    	</div>
			<?php
			    if(isset($_GET['source'])){
			        $source = $_GET['source'];
			    } else {
			        $source = '';
			    }
			
			    switch($source) {
			        case 'edit_post':
			            include "./includes/edit_create.php";
			            break;
			        default:
			            include "./includes/add_create.php";
			            break;
			    }        
			?>
		</div>
	</div>
	<?php include "./includes/_footer.php"; ?>
	<script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>
