<nav class="navbar navbar-inverse" style="background-color: #010028">
  <div class="container-fluid">
	<div class="navbar-header">
      <a class="navbar-brand p-2" href="#"><img src="./images/logo/logo.png" width="100px" alt=""></a>
    </div>
	<div class="nav navbar-nav d-flex flex-row">
		<ul class="nav navbar-nav d-flex flex-row align-items-center" style="font-size: 20px;">
			<li class="m-3"><a href="#" class="text-decoration-none nav-btn">Home</a></li>
			<li class="m-3"><a href="#" class="text-decoration-none nav-btn">Explore</a></li>
			<li class="m-3"><a href="#" class="text-decoration-none nav-btn">Create</a></li>
			<?php if(isset($_SESSION['username'])) { ?>
				<li class="m-3"><i class="fa-sharp fa-solid fa-circle-user fa-lg"></i></a></li>
			<?php } else { ?>
			<form action="./login_form.php">
				<button type="submit" id="myModal" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
			</form>
			<?php } ?>
		</ul>
	</div>
  </div>
</nav>
