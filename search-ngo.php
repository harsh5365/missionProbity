<?php

$connection=mysqli_connect("localhost","root","","mission");
$query="SELECT ngo_type, count(*) as number FROM ngo GROUP BY ngo_type";
$result=mysqli_query($connection, $query);
include 'get_state.php';
?>

<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="WowThemez">
	<title>Mission Probity</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/faviconn.png">
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
	<script type="
	text/javascript" src="\xampp\htdocs\project\tools\CodeSeven-toastr-50092cc/build/toastr.min.js">
	</script>
	<link href="css/showhide.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/showhide.js"></script>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['ngo_type', 'number'],
  <?php
   while ($row=mysqli_fetch_array($result)) {
     	echo "['".$row["ngo_type"]."',".$row["number"]."],";
     }  
  ?>
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'NGO TYPE REGISTER', 'width':630, 'height':300


  };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

	
	<!-- jQuery Lib -->
	
	
<style type="text/css" media="screen">
	#mainmenu li{
    position: relative; 
    margin-left: 6px !important;
    padding-top: 4px !important;
    margin-bottom: 1px !important;
    padding-left: 22px !important;
    display: inline-block !important;
    text-align: left !important;
    text-decoration: none;
}
.nav
{
    margin-bottom:4px !important;
}
#mainmenu li a{
   /*  color: #1f293d; */
    font-weight: 700 !important;
    padding: 0px 0 !important;
    text-transform: uppercase;
    display: inline-block;
    font-size: 14px !important;
    text-decoration: none;
}
#mainmenu li a:hover{
    color: #f8b864;

}
 #mainmenu .default-btn{
   background-color: #f8b864;
    color: #fff !important;
    line-height: 45px;
    display: inline-block;
    padding: 1px 5px;
    border-radius: 3px;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 600;
    text-decoration: none;
}
.default-btn a{
	color: #fff !important;
}
#mainmenu li .default-btn:hover{
    /* background-color:#fff; */
    /* border: 1px solid yellow; */
    /* color:yellow !important; */
     box-shadow: 0px 0px 0px 2.5px #fff, 0px 0px 0px 5px #f7b765, 0px 0px 0px 8px white, 0px 0px 0px 8.5px #f7b765;
    background: white;
    color: #f7b765 !important;
}
#mainmenu li .default-btn:hover a{
	color: #f7b765 !important;
}

		.form-control{
		height: 34px !important;
	}
			.panel
			{
				margin-top: 180px;
			}
			.panel-default .panel-heading
			{
				background-color: #f7b765;
		    border-color: #d6e9c6;
		    color: #fff;
		}
</style>
	
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
					<ul id="mainmenu" class=" nav-menu">
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

	
<body>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Search for a NGO
                    </h3>
                 
                </div>
                <div class="panel-body">



							<form action="" method="post">
					       <div class="form-group">
						      <label for="name" class ="control-label col-sm-4">STATE</label>
						      <div class="col-sm-8">
								      <select name="state" id="country-list"  class="form-control" onchange="getState(this.value);">
						                 <option value="">Select state</option>


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
						   </div></div><br><br><br>


					       <div class="form-group">
						      <label for="name" class ="control-label col-sm-4">CITY</label>
						      <div class="col-sm-8">
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

							                           <option value="<?php echo $result[" city_id"];?>">
								                       <?php echo $result["city_name"];?>
							                      </option>
							                  <?php
				                            }
						                  }
					                    }
				                     ?>

						   </div></div><br><br>


					       <div class="form-group">
						      <label for="name" class ="control-label col-sm-4">NGO Type</label>
						      <div class="col-sm-8">
						      <select  class="form-control" name="ngo_type">
							<option>Select Ngo Type</option>
                 			<option>Private Sector Companies (Sec 25)</option>
			                <option>Cooperative Society</option>
		                    <option>Registered Societies (Non-Government)</option>
		                    <option>Trust (Non-Government)</option>
			                <option>Other Registered Entities (Non-Government)</option>
			                <option>Academic Institutions (Private)</option>					
			                </select>
						   </div></div><br><br>


						     <div class="form-group">
						     <button type="submit" onclick="showtable()" name="search" id="search" class="default-btn">SEARCH</button>
							 
						   </div></form>



						</div><br><br>


                              
					     
	                 </div>


                </div>




		<div class="panel panel-default" id="real_text">
			<div class="panel-heading">
			<h3 class="panel-title">Welcome to a NGO Directory</h3>
			</div>
			<div class="panel-body" style="height: 300px">
				
				<div id="piechart"></div>
		</div> 
		<br>
	
            </div>
           
           
        </div>
    </div>
</div>

<div class="container">
<div class="row">
<div class="col--12 col-md-12 col-sm-12 hid">
	 <div class="panel panel-default" style="margin-top: 35px">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Data Searched
                    </h3>
                 
                </div>
                <div class="panel-body">
<table class="table table-striped" id="searchlist">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">Name</th>
      <th scope="col">Registration No.</th>
      <th scope="col">Address</th>
	  <th scope="col">District</th>
	  <th scope="col">State</th>
	  <th scope="col">Sectors</th>
    </tr>
  </thead>
  <tbody>
                                              <?php
											  		if(isset($_POST['search'])){
													$state=$_POST['state'];
													$city=$_POST['city'];
													$ngo_type=$_POST['ngo_type'];
                                                    $q = $d->select("ngo","state = '$state' AND city = '$city' AND ngo_type = '$ngo_type'");
                                                    $i = 0;
                                                while ($result=mysqli_fetch_array($q)) 
                                                {
                                                        $i++;
                                                    
                                                    ?>
    <tr>
    <th scope="row"><?php echo $i;?></th>
    <td><a href="profile.php?id=<?php echo $result['id']; ?>&email=<?php echo $result['email'];  ?>"><?php echo $result['name'];?></a></td>
    <td><?php echo $result['reg_id'];?></td>
	<td><?php echo $result['address'];?></td>
	<td><?php echo $result['city'];?></td>
    <td><?php echo $result['state'];?></td>
	<td><?php echo $result['sectors'];?></td>
	<?php
											}
										}
                                                    ?>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div></div>
<br><br><br><br>
<?php
include 'footer.php';
?>