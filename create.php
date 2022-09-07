	<?php include "./includes/_navbar.php"; ?>
	<div class="row create-bg m-0"
		style="background-image: url('./images/create-blur (1).jpg'); background-size: cover">
		<div class="upload-container m-auto rounded">
			<div class="content m-auto pt-3">
	    	    <h1><span class="upload-title p-1 mt-1">Upload</span></h1>
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
	<?php include "./includes/_footer.php";?>
	<script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>
