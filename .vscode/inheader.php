<?php
include 'get_state.php';
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="WowThemez">

<title>Mission Probity</title>

<link rel="shortcut icon" type="image/png" href="img/faviconn.png">
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

<link rel="stylesheet" type="text/css" href="\xampp\htdocs\project\tools\CodeSeven-toastr-50092cc/build/toastr.css"/>
<script src="\xampp\htdocs\project\tools\CodeSeven-toastr-50092cc/build/toastr.min.js">
</script>
<link href="css/showhide.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/showhide.js"></script>
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<!-- jQuery Lib -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/vendor/bootstrap.min.js"></script>
<!-- Tether JS -->
<script src="js/vendor/tether.min.js"></script>
<!-- Imagesloaded JS -->
<script src="js/vendor/imagesloaded.pkgd.min.js"></script>
<!-- OWL-Carousel JS -->
<script src="js/vendor/owl.carousel.min.js"></script>
<!-- isotope JS -->
<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
<!-- Smooth Scroll JS -->
<script src="js/vendor/smooth-scroll.min.js"></script>
<!-- venobox JS -->
<script src="js/vendor/venobox.min.js"></script>
<!-- ajaxchimp JS -->
<script src="js/vendor/jquery.ajaxchimp.min.js"></script>
<!-- Counterup JS -->
<script src="js/vendor/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script src="js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
<!-- Slick Nav JS -->
<script src="js/vendor/jquery.slicknav.min.js"></script>
<!-- Nivo Slider JS -->
<script src="js/vendor/jquery.nivo.slider.pack.js"></script>
<!-- Letter Animation JS -->
<script src="js/vendor/letteranimation.min.js"></script>
<!-- Wow JS -->
<script src="js/vendor/wow.min.js"></script>
<!-- Contact JS -->
<script src="js/contact.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
<style type="text/css">
	#mainmeny li{
		padding-left: 20px !important;
	}
	#mainmenu li{
    position: relative; 
    margin-left: 6px !important;
    padding-top: 4px !important;
    margin-bottom: 1px !important;
    padding-left: 22px ;
    display: inline-block !important;
    text-align: left !important;
}
.nav
{
    margin-bottom:4px !important;
}
#mainmenu li a{
    color: #1f293d;
    font-weight: 700;
    padding: 0px 0;
    text-transform: uppercase;
    display: inline-block;
    font-size: 14px;
}
#mainmenu li a:hover{
    color: #f8b864;
}
#mainmenu{
    display: inline-block;
   /*  padding-left: 30px; */
    
}
	.eml{
		padding-left: 110px !important;
		color: #f8b864;
		font-weight: bolder;
		font-size: 19px;
	}
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
				<div class="col-sm-3">
					<div class="site-branding">
						<img src="img/NGGGO.jpg" alt="Brand">
					</div>
				</div>
				<div class="col-sm-8  text-left">
					<ul id="mainmenu" class="nav navbar-nav nav-menu">
						<li class="active"> <a href="upd_profile.php">Update Profile</a></li>
						<li><a href="membersngo.php">Add member</a></li>
						<li><a href="up_gallary.php">Gallary</a></li>
						<li><a href="volunteer.php">Volunteers</a></li>
						<li><a href="logout.php">logout</a> </li>
	<li class="eml"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo$_SESSION['email'] ?></li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
	
			
		
			</header><!-- /Header Section -->