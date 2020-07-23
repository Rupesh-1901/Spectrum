<?php
include('config.php');
session_start();
if(!isset($_SESSION['email'])){
	header('Location:index.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Spectrum Internship Drive</title>
		<link rel="icon" href="images/sitelogo.jpg">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/achievements.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/news-events-tabs.css">
		<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/modal.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    <link rel="stylesheet" type="text/css" href="assets/css/social_media.css">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
	  	<link rel="stylesheet" type="text/css" href="assets/css/blog.css">
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">Spectrum</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="contact_us.html">Contact Us</a>

					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header><br/>


<div class="container-fluid">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-primary alert-dismissible fade in text-center" role="alert">
                <strong>You have submitted the solution!</strong><br/>
                <a href="profile.php">Click here to go to your profile page!</a>
            </div>
        </div>

  </div>
</div>

			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
