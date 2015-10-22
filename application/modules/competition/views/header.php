<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online_cart</title>
		<link href="<?php echo base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/css/main_page.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/css/header.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/css/user_post.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/css/profile_page.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<script src="<?php echo base_url(); ?>/js/profile_page.js"></script>
		<script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
	</head>
	<body id="main_body" style="background-image: url('<?php echo base_url(); ?>/images/post_page.png'); background-attatchment:fixed;">
	<div class="container-fluid nopadding">
	 <div class="row">
	 	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	 		<!-- Brand and toggle get grouped for better mobile display -->
	 		<div class="navbar-header">
	 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	 				<span class="sr-only">Toggle navigation</span>
	 				<span class="icon-bar"></span>
	 				<span class="icon-bar"></span>
	 				<span class="icon-bar"></span>
	 			</button>
	 			 </div>
	 	
	 		<!-- Collect the nav links, forms, and other content for toggling -->
	 		<div id="header" class="collapse navbar-collapse navbar-ex1-collapse" style="background-image:url('<?php echo base_url(); ?>/images/navbar.png');background-color: white;background-attachment: fixed;background-repeat: no-repeat;background-position-x: -85px;">
	 			<ul class="nav navbar-nav">
	 				<li><a href="<?php echo base_url(); ?>profile_page"><img src="<?php echo base_url(); ?>/images/logo.png" style="width: 100px;/* height: 70px; */padding: 0px;/* margin: -10px; */margin-top: -24px;margin-bottom: -22px;"></a></li>
	 				 
	 			</ul>
	 				<ul class="nav navbar-nav navbar-right">
	 				<li><a href="<?php echo base_url(); ?>learn">Learn</a></li>
	 				<li><a href="<?php echo base_url(); ?>competition">Competition</a></li>
	 				<li><a href="<?php echo base_url(); ?>cart">Gallery</a></li>
	 				<li>
	 					<a href="<?php echo base_url(); ?>cartlogin" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
	 					<ul id="drop_menu" class="dropdown-menu">
	 						<li><a href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url(); ?>/images/header/dashboard.png"> Dashboard</a></li>
	 						<li><a href="<?php echo base_url(); ?>profile_page"><img src="<?php echo base_url(); ?>/images/header/my_profile.png"> My Profile</a></li>
	 						<li><a href="<?php echo base_url(); ?>upload"><img src="<?php echo base_url(); ?>/images/header/upload.png"> Upload to Gallery</a></li>
	 						<li><a href="<?php echo base_url(); ?>edit"><img src="<?php echo base_url(); ?>/images/header/edit.png"> Edit Profile</a></li>
	 						<li><a href="<?php echo base_url(); ?>logout"><img src="<?php echo base_url(); ?>/images/header/logout.png"> Logout</a></li>
	 					</ul>
	 				</li>
	 			</ul>
	 			<form class="navbar-form navbar-left" role="search" style="margin-left: 3%;">
	 				<div class="form-group">
	 					<input type="text" class="form-control" placeholder="Find him/her" style="width: 350px;">
	 				</div>
	 				<button type="submit"><img src="<?php echo base_url(); ?>/images/header/dashboard.png"></button>
	 			</form>
	 		
	 		</div><!-- /.navbar-collapse -->
	 	</nav>
	 </div>