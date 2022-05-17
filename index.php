<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- style-link -->
	<link rel="stylesheet" type="text/css" href="css/nav-style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- tab-icon -->
	<link href="img/fa-icon.png" rel="shortcut icon"> 
	<!-- font-icons -->
	<link media="all" rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<title>ESTER NEPAL</title>
</head>

<body> 
  	<!-- navbar -->
	<?php
		include('navbar.php');
	?>

	<!-- banner -->
  	<section class="banner">
  	</section>
	
	<!-- about-block -->
	<section class="about-block">
		<div class="container-fluid">
			<div class="about-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-wrap">
							<h2>who we are.</h2>
							<p><span>When you have limited space to showcase work.</span></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
							<div class="mt-5"><a href="#" class="btn btn-primary has-radius-small">VIEW MORE</a></div>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-5 img-right">
						<div class="img-wrap">
							<img src="http://placehold.jp/35/45464a/ffffff/500x500.png?text=ESTER%20NEPAL" alt="images">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 img-left">
						<div class="img-wrap">
							<img src="http://placehold.jp/35/45464a/ffffff/500x500.png?text=ESTER%20NEPAL" alt="images">
						</div>
					</div>
					<div class="col col-lg-6">
						<div class="text-wrap text-lg-right">
							<h2>Lorem ipsum</h2>
							<p><span>Lorem ipsum dolor sit amet, consectetur.</span></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
							<div class="mt-5"><a href="#" class="btn btn-primary has-radius-small">VIEW MORE</a></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php
		include('footer.php');
	?> 	                   
</body>
</html>