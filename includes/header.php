<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Valet &mdash; Free HTML5 Bootstrap Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
	
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 	https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'> -->
	<!-- Themify Icons -->
	<link rel="stylesheet" href="/valet/css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="/valet/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/valet/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/valet/css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/valet/css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="/valet/css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="/valet/css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="/valet/css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="/valet/css/style.css">

	<!-- Modernizr JS -->
	<script src="/valet/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	.f1{
		margin-top:120px;
	}
	#p1{
		
		color:DarkCyan ;
		
	}
	</style>
	</head>
	<body>
	<?php
session_start();
$_SESSION['myvar']="Hello";
?>

		<!-- START #fh5co-header -->
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">

				

				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"><a href="index.html"><img src="/realestate/images/logo.png" alt="Valet Free HTML5 Template"></a></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						
						
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index1.php">Home</a>
							</li>
							
							<li><a href="about.php">About Us</a>
	</li>
	
	<?php
	if(!isset($_SESSION['login'])){
		?>
		
	<li><a href="login1.php">Login</a>
	</li>

	
	<li><a href="users1.php">Registration</a>
	</li>
	<?php
	}
	?>
	
	<?php
		if(isset($_SESSION['login'])){
	?>
	<li><a href="users_views11.php">Profile</a>
	</li>
	<li><a href="users_update11.php">Update</a>
	</li>
	<li><a href="property_display_only_user.php">Properties</a>
	</li>
	<li><a href="users_display1.php">Admin</a></li>
	
	
	
	
	
	<li><a href="logout.php">Logout</a>
	</li>
	<?php
	}
	?>
							
							
							
							<li><a href="contacts.php">Contact</a></li>
						</ul>
					</nav>
				<!-- </div> -->

			</div>
		</header>
		
		