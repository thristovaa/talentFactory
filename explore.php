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
		<!-- Nav tabs -->
		<ul>
			<li data-tab-target="#trending">Trending</li>
			<li data-tab-target="#digital_art">Digital Art</li>
			<li data-tab-target="#art">Art</li>
			<li data-tab-target="#photography">Photography</li>
			<li data-tab-target="#videos">Videos</li>
		</ul>	
		<div class="tab-content" data-tab-content>
			<div id="trending">
				<h3>Trending</h3>
				<p>Photos</p>
			</div>
			<div id="digital_art" data-tab-content>
				<h3>Digital Art</h3>
				<p>Digital</p>
			</div>
			<div id="art" data-tab-content>
				<h3>Art</h3>
				<p>Art</p>
			</div>
			<div id="photography" data-tab-content>
				<h3>Photography</h3>
				<p>Photography</p>
			</div>
			<div id="videos" data-tab-content>
				<h3>Videos</h3>
				<p>Videos</p>
			</div>
		</div>
	</body>
</html>



