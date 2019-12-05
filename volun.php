<?php
// session_start();
// $id = $_SESSION['id'];
include 'outheader.php';
?>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style type="text/css" media="screen">
  .reg{
  	padding-top:140px;
  }	
  @import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */


/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */


/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
 



 .row .container
 {
 margin-left: 10px;
 }
 input[type="text"], input[type="password"]
 {
  height: 34px !important;
 }
 select
 {
  height: 34px !important;
 }
 label{
 	float: left;
 	padding-bottom: 0px !important;
 }
</style>
<div class="reg">
	

<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="mmc.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label> Name</label>
								<input type="text" name="name" placeholder="Enter First Name Here.." class="form-control">
							</div>
											
						    <div class="col-sm-6 form-group">
							  <label>Email</label>
							  <input type="text" name="email" placeholder="Enter Email Here.."  class="form-control">
						    </div>	
						</div>
						<!-- <div class="row">					
						    <div class="col-sm-6 form-group">
							  <label>Email</label>
							  <input type="text" name="email" placeholder="Enter Email Here.."  class="form-control">
						    </div>	
						
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="text" name="password" placeholder="Enter Password Here.." class="form-control">
							</div>
						</div>	 -->
						<div class="row">	
							<div class="col-sm-6 form-group">
								<label>Contact Number</label>
								<input type="text"   name="mobile" placeholder="Enter Contact Number Here.." class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Occupation</label>
								<input type="text"  name="pan" placeholder="Enter Enter Pan Number Here.." class="form-control">
							</div>		
						</div>
						<div class="row">	
						<div class="col-sm-6 form-group">
							<label>Ngo Type</label>
						    <select  class="form-control" name="gender">
							<option value="">Select Gender</option>
                 			<option value="Male">Male</option>
			                <option value="Female">Female</option>
		                    </select>
						</div>
						<div class="col-sm-6 form-group">
								<label>Birthday</label>
								<input type="text"  name="pan"  class="form-control">
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
