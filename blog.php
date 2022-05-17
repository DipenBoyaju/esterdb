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
	<?php
		require('navbar.php');
	?>

	<!-- blog-banner -->
	<section class="blog-banner">
		<div class="dark-overlay">
			<div class="container">
				<div class="blog-banner-content">
					<div class="blog-title">
						<h1>Blogs</h1>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div class="breadcrumb-block">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"> Home </a></li>
							<li class="breadcrumb-item active"><a href="index.html"> Blog </a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-block">
		<div class="container">
			<div class="blog-content">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="card-block">
							<div class="card">
								<div class="img-block">
									<img src="img/img4.jpg" alt="">
									<time class="post-date" datetime="2016-10-10">17 Jun</time>
								</div>
								<div class="post-text-block bg-gray-light">
									<h2>Product Design</h2>
									<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
									<div class="post-link-holder">
										<a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="card-block">
							<div class="card">
								<div class="img-block">
									<img src="img/img2.jpg" alt="">
									<time class="post-date" datetime="2016-10-10">17 Jun</time>
								</div>
								<div class="post-text-block bg-gray-light">
									<h2>Working Remotely</h2>
									<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
									<div class="post-link-holder">
										<a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="card-block">
							<div class="card">
								<div class="img-block">
									<img src="img/img3.jpg" alt="">
									<time class="post-date" datetime="2016-10-10">17 Jun</time>
								</div>
								<div class="post-text-block bg-gray-light">
									<h2>Break Timings</h2>
									<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
									<div class="post-link-holder">
										<a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php
		include('footer.php')
	?>
</body>
</html>