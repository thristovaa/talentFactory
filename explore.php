<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap%27" rel="stylesheet">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Talent Factory</title>
    </head>
	<body>
		<?php include "./includes/_navbar.php";?>
		<div class="container mt-5">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-1" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabList-pane-1" role="tab" aria-controls="tabList-pane-1" aria-selected="true">Panel 1</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-2" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-2" role="tab" aria-controls="tabList-pane-2" aria-selected="false">Panel 2</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-3" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-3" role="tab" aria-controls="tabList-pane-3" aria-selected="false">Panel 3</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-3" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-3" role="tab" aria-controls="tabList-pane-3" aria-selected="false">Panel 3</button>
				</li>
				<li class="nav-item" role="presentation">
					<button type="button" id="tabList-3" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabList-pane-3" role="tab" aria-controls="tabList-pane-3" aria-selected="false">Panel 3</button>
				</li>
			</ul>
			<div class="tab-content">
				<div id="tabList-pane-1" class="tab-pane active" role="tabpanel" aria-labelledby="tabList-1">
					<p class="text-left mt-3">Panel 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
				</div>
				<div id="tabList-pane-2" class="tab-pane" role="tabpanel" aria-labelledby="tabList-2">
					<p class="text-left mt-3">Panel 2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
				</div>
				<div id="tabList-pane-3" class="tab-pane" role="tabpanel" aria-labelledby="tabList-3">
					<p class="text-left mt-3">Panel 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
				</div>
				<div id="tabList-pane-3" class="tab-pane" role="tabpanel" aria-labelledby="tabList-3">
					<p class="text-left mt-3">Panel 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
				</div>
				<div id="tabList-pane-3" class="tab-pane" role="tabpanel" aria-labelledby="tabList-3">
					<p class="text-left mt-3">Panel 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
				</div>
			</div>
		</div>
		<script src="./js/bootstrap.bundle.min.js"></script>
	</body>
</html>



