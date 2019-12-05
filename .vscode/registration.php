<?php
include 'get_state.php';
?>

<head>
	<style type="text/css" media="screen">
	.well{
 background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
 }	
	</style>
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
	<link rel="stylesheet" href="css/registration.css">

	<link rel="stylesheet" type="text/css" href="\xampp\htdocs\project\tools\CodeSeven-toastr-50092cc/build/toastr.css"/>
	<script type="text/javascript" src="\xampp\htdocs\project\tools\CodeSeven-toastr-50092cc/build/toastr.min.js">
	</script>
	<link href="css/showhide.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/showhide.js"></script>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">

	<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
 -->
	
			

</head>
<header id="header" class="header-section">
	<div class="top-header">
		<div class="container">
			<div class="top-content-wrap row">
				<div class="col-sm-8">
					<ul class="left-info">
						<li><a href="#"><i class="ti-email"></i>missionprobity@gmail.com</a></li>
						<li><i class="ti-mobile" style="color: white">(+91)7359446501</i></li>
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
						<img src="img/NGGGO.jpg" class="logo" alt="Brand"> 
					</div>
				</div>
				<div class="col-sm-9 text-right text-left">
					<ul id="mainmenu" class="nav navbar-nav nav-menu">
						<li class="active"> <a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="#">Ngo Directory</a>
							<ul>
								<li><a href="statewise.php">NGO's (State-wise)</a></li>

								<li><a href="sectorwise.php">NGO's (Sector-wise)</a></li>
							</ul>
						</li>
						<li><a href="search-ngo.php">Search NGOs</a></li>

						<li><a href="#">BlockList NGOS</a> </li>
						<li><button class="default-btn"> <a href="login.php" >NGO login</a></button></li>
						<li><button class="default-btn"> <a href="registration.php" >New NGO registeration</a></button></li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
	
</header><!-- /Header Section -->





<div class="reg">
	

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="mmc.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Register Ngo's Name</label>
								<input type="text" name="name" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Enter Registration Id</label>
								<input type="text" name="reg_id" placeholder="Enter Registration Id Here.." class="form-control">
							</div>
						</div>
						<div class="row">					
						    <div class="col-sm-6 form-group">
							  <label>Email</label>
							  <input type="text" name="email" placeholder="Enter Email Here.."  class="form-control">
						    </div>	
						
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="text" name="password" placeholder="Enter Password Here.." class="form-control">
							</div>
						</div>	
						<div class="row">	
							<div class="col-sm-6 form-group">
								<label>Contact Number</label>
								<input type="text"   name="mobile" placeholder="Enter Contact Number Here.." class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Enter Pan Number</label>
								<input type="text"  name="pan" placeholder="Enter Enter Pan Number Here.." class="form-control">
							</div>		
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	




							<script>
		
		                    function getState(val) {
			
			                  $.ajax({
				              type: "POST",
				              url: "get_state.php",
				              data: {
					                'state_id': val
				                    },
				              success: function (data) {
					          $("#state-list").html(data);
				              }
			                });
		                 }
	                 </script>


						<div class="row">
							<div class="col-sm-6 form-group">
							 <label>State</label>
							 <select name="state" id="country-list"  class="form-control" onchange="getState(this.value);">
				                 <option value="">Select state</option>
				                  <?php
			                          $q = $d->select("cities");
			                          while($result = mysqli_fetch_array($q)){
				                   ?>
				                  <option value="<?php echo $result["state_id"];?>">
					                 <?php echo $result["state_name"];?>
				                      </option>
				                     <?php 
			                      } 
			                   ?>
		                  </select>
							</div>		
							<div class="col-sm-6 form-group">
								<label>City</label>
							    <select id="state-list" class="form-control" name="city">
				                 <option value="" selected="selected">Select city</option>
			                 </select>



			                   <?php
		                           if(isset($_POST['state_id']))
		                          {
		                            $cd = $_POST["state_id"];
		                          if($_POST["state_id"] == null)
		                         {
			                      ?>
			                         <option>Select State</option>
			                     <?php

                                    exit();
			                         } 

		                               $q = $d->select("cities","state_id=$cd");
		
		                               if(mysqli_num_rows($q) > 0)
		                           {
			                            while($result = mysqli_fetch_array($q)){
				                   ?>

			                           <option value="<?php echo $result[" city_name"];?>">
				                       <?php echo $result["city_name"];?>
			                      </option>
			                  <?php
                            }
		                  }
	                    }
                     ?>

					</div>	
			</div>
			
	
			     	<div class="row">			
						<div class="col-sm-6 form-group">
							<label>Ngo sector</label>
							<select  name="sectors" class="form-control">
							<option value="">Sector</option>
							<option value="Agriculture">Agriculture</option>	
                            <option value="Animal Husbandry, Dairying  &  Fisheries">Animal Husbandry, Dairying  &  Fisheries</option>
							<option value="Art & Culture">Art & Culture	</option>								
							<option value="Biotechnology">Biotechnology	</option>								
							<option value="Children">Children </option>								
							<option value="Civic Issues">Civic Issues</option>									
							<option value="Dalit Upliftment">Dalit Upliftment</option>	
							<option value="Differently Abled">Differently Abled</option>									
							<option value="Disaster Management">Disaster Management</option>										
							<option value="Drinking Water">Drinking Water</option>								
							<option value="Education & Literacy">Education & Literacy</option>								
							<option value="Aged/Elderly">Aged/Elderly</option>									
							<option value="Environment & Forests">Environment & Forests	</option>									
							<option value="Food Processing">Food Processing	</option>							
							<option value="Health & Family Welfare">Health & Family Welfare </option>									
							<option value="HIV/AIDS">HIV/AIDS</option>							
							<option value="Housing">Housing</option>										
							<option value="Human Rights">Human Rights</option>								
							<option value="Information & Communication Technology">Information & Communication Technology</option>							
							<option value="Labour & Employment	">Labour & Employment	</option>					
							<option value="Land Resources">Land Resources	</option>									
							<option value="Legal Awareness & Aid">Legal Awareness & Aid</option>						
							<option value="Micro Finance (SHGs)	">Micro Finance (SHGs)		</option>							
							<option value="Micro Small & Medium Enterprises	">Micro Small & Medium Enterprises		</option>							
							<option value="inority Issues">Minority Issues</option>
							<option value="New & Renewable Energy">New & Renewable Energy</option>	
							<option value="2Nutrition ">Nutrition </option>														
							<option value="anchayati Raj">Panchayati Raj</option>		
							<option value="Prisoner's Issues">Prisoner's Issues</option>						
							<option value="Right to Information & Advocacy">	Right to Information & Advocacy</option>								
							<option value="Rural Development & Poverty Alleviation">Rural Development & Poverty Alleviation</option>							
							<option value="Science & Technology">Science & Technology</option>								
							<option value="Scientific & Industrial Research">Scientific & Industrial Research</option>							
							<option value="Sports">Sports	</option>									
							<option value="Tourism">Tourism	</option>									
							<option value="Tribal Affairs">Tribal Affairs	</option>										
							<option value="Urban Development & Poverty Alleviation">Urban Development & Poverty Alleviation</option>
							<option value="Vocational Training	">Vocational Training	</option>						
							<option value="Water Resources">Water Resources	</option>								
							<option value="Women's Development & Empowerment">Women's Development & Empowerment	</option>						
							<option value="Youth Affairs">Youth Affairs</option>
							<option value="Any Other">Any Other</option>										
															
						</select>
							<!-- 	<script>
											$(document).ready(function() {
											$('#demo').multiselect();						
					           </script>	 -->
						</div>


						<div class="col-sm-6 form-group">
							<label>Ngo Type</label>
						    <select  class="form-control" name="ngo_type">
							<option value="">Select Ngo Type</option>
                 			<option value="Private Sector Companies (Sec 25)">Private Sector Companies (Sec 25)</option>
			                <option value="Cooperative Society">Cooperative Society</option>
		                    <option value="Registered Societies (Non-Government)">Registered Societies (Non-Government)</option>
		                    <option value="Trust (Non-Government)">Trust (Non-Government)</option>
			                <option value="Other Registered Entities (Non-Government)">Other Registered Entities (Non-Government)</option>
			                <option value="Academic Institutions (Private)">Academic Institutions (Private)</option>					
			                </select>
						</div>
						</div>	
			
				
				
					<button type="submit" name="reg_ngo" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</div>
<?php 
include 'footer.php';
?>
