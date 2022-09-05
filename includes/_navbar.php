<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  	<div class="navbar-header">
      <a class="navbar-brand p-2" href="#">Talent Factory</a>
    </div>
	<div class="nav navbar-nav d-flex flex-row">
		<ul class="nav navbar-nav d-flex flex-row align-items-center" style="font-size: 20px;">
			<li class="m-2"><a href="#" class="text-decoration-none">Home</a></li>
			<li class="m-2"><a href="#" class="text-decoration-none">Explore</a></li>
			<li class="m-2"><a href="#" class="text-decoration-none">Create</a></li>
			<?php if(isset($_SESSION['username'])) { ?>
				<li class="m-2"><i class="fa-sharp fa-solid fa-circle-user fa-lg"></i></a></li>
			<?php } else { ?>
			<button type="button" id="myModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
			<?php } ?>
		</ul>
	</div>
  </div>
</nav>
