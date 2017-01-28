<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Sports Arebia</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="SportsArebia">
		<meta name="keywords" content="SportsArebia">
		<!-- Icons -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon_152.png"> -->
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,100,100italic,300,300ita‌​lic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- <link rel="stylesheet" href="css/spinner.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
		<!-- // <script src="js/jquery.stellar.min.js"></script> -->
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<script type="text/javascript">
			// $(document).ready(function (argument) {
			// 	$.blockUI({ 
		 //            message: '<img src="loader.gif">', 
		 //            overlayCSS: { backgroundColor: 'white' },
		 //            css: { 
		 //                top:  ($(window).height() - 300) /2 + 'px', 
		 //                left: ($(window).width() - 400) /2 + 'px', 
		 //                width: '400px',
		 //                border: 'none',
		 //            } 
		 //        }); 

		 //        setTimeout($.unblockUI, 2000);
			// });
		</script>
	</head>
	<body>
		<div id="displayBox1" style="display:none;"> 
		    <img src="loader.gif">
		</div> 
		

		<!-- -----------Nav-Bar------------ -->
			<nav id="navbar" class="navbar navbar-default navbar-fixed-top w3-card-2">
			  <div class="container-fluid w3-green1">
				<div class="navbar-header">
					<span class="hidden-sm hidden-xs w3-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<a class="navbar-brand" href="index.php">
						<!-- <img src="images/wesolv_logo_bulb_white_BG.png" class="img-responsive"  alt="p" width="130px" height="40%" style="object-fit: contain;"> -->
						<div class="w3-border w3-border-green">
							<span class="w3-btn w3-hover-none w3-green w3-hover-green w3-padding w3-xlarge">Sports</span>
							<span class="w3-btn w3-hover-none w3-transparent w3-padding w3-xlarge">Arabian</span>
						</div>
					</a>
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<!-- <h6><span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></h6> -->
						<h6 class="w3-margin-0"><i class="fa fa-bars" style="font-size:24px"></i></h6>
				  </button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
					  <li class="visible-xs">
					  	<div class="input-group w3-border-yellow w3-margin-left w3-margin-right w3-margin-bottom">
					  		<span class="input-group-btn w3-round-left">
				  				<select class="form-control selectpicker" data-style="w3-grey w3-border-grey w3-text-white w3-round-left" style="">
						  			<option>players</option>
						  			<option>clubs</option>
						  		</select>
				  			</span>
					  		<input class="form-control" type="text">
				  			<span class="input-group-btn">
				  				<button type="submit" class="btn w3-yellow w3-text-white">&nbsp;<i class="fa fa-search"></i></button>	
				  			</span>
					  	</div>	
					  </li>
					  <li id="li1"><a href="index.php"><h6 class="text-center w3-text-yellow">Home</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li id="li2"><a href="about.php"><h6 class="text-center w3-text-yellow">About Us</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li id="li3"><a href="clubs.php"><h6 class="text-center w3-text-yellow">Clubs</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li id="li4"><a href="players.php"><h6 class="text-center w3-text-yellow">Players</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li id="li5"><a href="services.php"><h6 class="text-center w3-text-yellow">Our Services</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li id="li6"><a href="shop.php"><h6 class="text-center w3-text-yellow">Shop</h6></a></li>
			   		  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li id="li7"><a href="contact.php"><h6 class="text-center w3-text-yellow">Contact Us</h6></a></li>
			   		  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			   		  <li class="visible-xs text-center">
			   		  	<button class="btn btn-default w3-text-yellow" type="button">Login</button>	
				  		<button class="btn btn-default w3-text-yellow" type="button">SignUp</button>
			   		  </li>
					  <!-- <li id="li2"><a href="companies_and_challenges.php" data-toggle="collapse" data-target="#navbar-bottom" ><h6 class="w3-text-dark-blue text-center">COMPANIES & CHALLANGES</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;</li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;</li>
					  <li><h6 class="text-center"><button class="w3-btn w3-round w3-card-2 w3-padding-large w3-light-gray w3-text-dark-blue w3-border-dark-blue nav-btn-top">FOR COMPANIES</button></h6></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<?php //if(isset($_SESSION['LOG'])){ ?>
					  <li><a href="signin.php" class="w3-text-dark-blue text-center"><h6 class="w3-text-dark-blue text-center">PROFILE</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					  <li><a href="session_out.php" class="w3-text-dark-blue text-center"><h6 class="w3-text-dark-blue text-center">LOG OUT</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<?php //} else { ?>
					  <li><a href="javascript:void(0);" class="w3-text-dark-blue text-center" data-toggle="modal" data-target="#signupModal"><h6 class="w3-text-dark-blue text-center">SIGN UP</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					  <li><a href="javascript:void(0);" class="w3-text-dark-blue text-center" data-toggle="modal" data-target="#loginModal"><h6 class="w3-text-dark-blue text-center">LOG IN</h6></a></li>
					  <li class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<?php //} ?> -->

					</ul>
				</div>
			  </div>
			  <div class="container-fluid w3-green2 w3-text-white w3-padding hidden-xs">
			  	<div class="container-fluid">
		  			<div class="col-md-61 col-sm-31 w3-left w3-large">
		  				<a href="#"><i class="fa fa-home w3-hover-text-yellow"></i></a> |
					  	<a href="#"><i class="fa fa-facebook w3-hover-text-yellow"></i></a> |
					  	<a href="#"><i class="fa fa-twitter w3-hover-text-yellow"></i></a>
		  			</div>
		  			<div class="col-md-61 col-sm-91 w3-right">
		  				<div class="col-xs-7">
		  					<div class="input-group w3-border-yellow input-grp">
						  		<span class="input-group-btn w3-round-left">
					  				<select class="form-control selectpicker" data-style="btn-sm w3-grey w3-border-grey w3-text-white w3-round-left" style="">
							  			<option>players</option>
							  			<option>clubs</option>
							  		</select>
					  			</span>
						  		<input class="form-control input-sm" type="text">
					  			<span class="input-group-btn">
					  				<button type="submit" class="btn w3-yellow w3-text-white btn-sm">&nbsp;<i class="fa fa-search"></i></button>	
					  			</span>
						  	</div>	
		  				</div>
		  				<div class="col-xs-5 text-right">
		  					<button class="btn btn-default w3-text-yellow btn-sm" type="button">Login</button>	
					  		<button class="btn btn-default w3-text-yellow btn-sm" type="button">SignUp</button>	
		  				</div>
		  			</div>
			  	</div>

			  </div>
			</nav>
		<!-- -----------Nav-Bar------------ -->