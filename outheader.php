<?php
include 'get_state.php';
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="WowThemez">

	<title>Charitify || NGO/Charity/Fundraising Template</title>

	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Font Awesome Icons CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Themify Icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Elegant Font Icons CSS -->
	<link rel="stylesheet" href="css/elegant-font-icons.css">
	<!-- Elegant Line Icons CSS -->
	<link rel="stylesheet" href="css/elegant-line-icons.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Venobox CSS -->
	<link rel="stylesheet" href="css/venobox/venobox.css">
	<!-- OWL-Carousel CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- Slick Nav CSS -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Css Animation CSS -->
	<link rel="stylesheet" href="css/css-animation.min.css">
	<!-- Nivo Slider CSS -->
	<link rel="stylesheet" href="css/nivo-slider.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/main.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">

	<link href="css/showhide.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/showhide.js"></script>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
	<link href="css/volunteer.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/volunteer.js"></script>
	<script src="jsdatepicker.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/cal.css" />
	<script src="js/cal.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			$('#birthday').simpleDatepicker({
				startdate: 1950,
				enddate: 2019,
				chosendate: new Date('1990-01-01')
			});
		});
	</script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>

		.modal
		{
			margin-left: 0px !important;
		}

		select
		{
			padding:4px;
		width:96%;
		height:40px  !important;
		margin-top:15px;
		font-size:14px
		}


    form h2
    {
    	line-height: 0px !important;
    }
  .eml{
  	color: orange;
  	font-size: 20px;  }
		</style>

</head>
<header id="header" class="header-section">
	<div class="top-header">
		<div class="container">
			<div class="top-content-wrap row">
				<div class="col-sm-8">
					<ul class="left-info">
						<li><a href="#"><i class="ti-email"></i>pjay5095@gmail.com</a></li>
						<li><i style="color: white" class="ti-mobile"></i>(+91)7359446501</li>
					</ul>
				</div>
				<div class="col-sm-4 d-none d-md-block">
					<ul class="right-info">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-header">
		<div class="container">
			<div class="bottom-content-wrap row">
				<div class="col-sm-4">
					<div class="site-branding">
						<img src="img/NGGGO.jpg" alt="Brand">
					</div>
				</div>
				<div class="col-sm-8  text-left">
					<ul id="mainmenu" class="nav navbar-nav nav-menu">
						<li><a href="index.php">Home</a></li>
						<li class="active"> <a href="profile.php">Profile</a></li>
						<li><a href="gallary.php">Wall</a></li>
						<li><a href="paymentgateway.php">Donate Now</a></li>
						<li><a href="volunteer.php">Become A Volunteer</a></li>
						<li class="eml"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo$_SESSION['email'] ?></li>

					</ul>

				</div>
			</div>
		</div>
	</div>

</header><!-- /Header Section -->