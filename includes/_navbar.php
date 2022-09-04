<!--<div class="_navbar">
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="/talentFactory">Talent Factory</a>
	  	  <div class="navbar-nav d-flex flex-row">
				<a class="nav-item nav-link p-2" href="./explore.php">Explore</a>
	  	    	<a class="nav-item nav-link p-2" href="./create.php">Create</a>
				<?php if(isset($_SESSION['username'])) { ?>
					<i class="fa-sharp fa-solid fa-circle-user fa-lg"></i></a>
				<?php } else { ?>
					<button type="button" id="myModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
				<?php } ?>
	  	  </div>
	</nav>
</div>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  	<div class="navbar-header d-flex flex-row">
      <a class="navbar-brand p-2" href="#">WebSiteName</a>
		<ul class="nav navbar-nav d-flex flex-row" style="font-size: 20px;">
			<li class="p-2"><a href="#" class="text-decoration-none">Home</a></li>
			<li class="p-2"><a href="#" class="text-decoration-none">Link</a></li>
			<li class="p-2"><a href="#" class="text-decoration-none">Link</a></li>
		</ul>
    </div>
    <button class="btn navbar-btn" style="background-color: #0ad6b4;">Button</button>
  </div>
</nav>
