<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online_cart</title>
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/main_page.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/header.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/user_post.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/cart.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/profile_page.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrap-rating.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>js/profile_page.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/search.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap-filestyle.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap-rating.js"></script>
	</head>
	<body id="main_body" style="font-family:lato;font-size:14px;">
	<div class="container-fluid nopadding"><!--container    -->
	 <div class="row"><!--row    -->
	 <!--navbar    -->
	 	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:60px;padding-bottom: 0px;margin-bottom: 0px;">
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
	 		<div id="header" class="collapse navbar-collapse navbar-ex1-collapse" >
	 			<ul class="nav navbar-nav">
	 				<li><a href="<?php echo base_url(); ?>profile_page"><img src="<?php echo base_url(); ?>images/logo.png" style="width: 100px;/* height: 70px; */padding: 0px;/* margin: -10px; */margin-top: -24px;margin-bottom: -22px;"></a></li>
	 				 
	 			</ul>
	 				<ul class="nav navbar-nav navbar-right">
	 				<li><a href="<?php echo base_url(); ?>learn">Learn</a></li>
	 				<li><a href="<?php echo base_url(); ?>competition">Competition</a></li>
	 				<li><a href="<?php echo base_url(); ?>cart">Gallery</a></li>
	 				<li class="dropdown">
	 					<a href="<?php echo base_url(); ?>cartlogin" class="dropdown-toggle" data-toggle="dropdown">
	 					<img src="<?php echo base_url(); ?>images/flaticon/details/notification.png" id="notification_img">
	 					<sup class="badge" style="margin-left:-5px;">4</sup></a>
	 					<ul id="notify" class="dropdown-menu" >
	 					</ul>
	 				</li>
	 				<li>
	 					<a href="<?php echo base_url(); ?>cart/login" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
	 					<ul id="drop_menu" class="dropdown-menu"  >
	 						<li id="od"><a href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url(); ?>images/header/dashboard.png"> Dashboard</a></li>
	 						<li id="od"><a href="<?php echo base_url(); ?>profile_page"><img src="<?php echo base_url(); ?>images/header/my_profile.png"> My Profile</a></li>
	 						<li id="od"><a href="<?php echo base_url(); ?>upload"><img src="<?php echo base_url(); ?>images/header/upload.png">Gallery</a></li>
	 						<li id="od"><a href="<?php echo base_url(); ?>edit"><img src="<?php echo base_url(); ?>images/header/edit.png"> Edit Profile</a></li>
	 						<li id="od"><a href="<?php echo base_url(); ?>login/logout"><img src="<?php echo base_url(); ?>images/header/logout.png"> Logout</a></li>
	 					</ul>
	 				</li>`
	 			</ul>
	 			<form class="navbar-form navbar-left" role="search" style="margin-left: 3%;" id="search_form" >
	 			 <div class="input-group">
				      <input type="text" class="form-control" placeholder="Find him/her" style="width: 200px; -webkit-transition: width 0.4s; transition: width 0.4s;" onkeyup="sethint(this.value)" name="search">
				      <span class="input-group-btn">
				   <button class="btn btn-success" type="button"><img src="<?php echo base_url(); ?>images/header/search.png" width="20px" height="18px"></button>
				      </span>
				    </div><!-- /input-group -->
	 				<!-- <div class="form-group">
	 					<input type="text" class="form-control" placeholder="Find him/her" style="width: 150px;" onkeyup="sethint(this.value)" name="search">
	 				</div>
	 				<button type="submit"><img src="<?php echo base_url(); ?>images/header/dashboard.png"></button> -->
	 			</form>
	 			<div id="txtHint" style="max-height:300px;overflow-y:scroll;">
	 				
	 			</div>
	 		<!-- 	<div id="suggestion_box">
	 				<?php echo modules::run('search'); ?>
	 			</div>
	 		 -->
	 		</div><!-- /.navbar-collapse -->
	 	</nav><!--navbar  -->
	 </div><!--row1 end  -->
	 <div class="row"></br>
	 	 	</br></br>
	 	 	</br>
	 </div>
	 <div class="row"><!--row2 -->


	 <script>

	 $(document).ready(function(){
	     $("input[name='search']").focusin(function(){
	     	$(this).css("width","350px");
    		$("#txtHint").css("opacity","1");
		});

	     $("input[name='search']").focusout(function(){
	     	$(this).css("width","200px");
    		$("#txtHint").css("opacity","0");
		});
	 });
	 </script>
	 <script>
	 $(document).ready(function()
	 {
	     $(".img-circle").error(function(){
	         $(this).attr('src', 'http://localhost/artphilic/images/profile_pic/default.png');
	     });
	 });
	 </script>
