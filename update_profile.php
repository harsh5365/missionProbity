<?php
session_start();

include 'inheader.php';
$email = $_SESSION['email'];
$id = $_SESSION['id'];
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/registration.css">
<style>
 #contact-modal{
 	background-color: transparent;
 	box-shadow: unset !important;
 	border: none;


 }	
</style>

<div class="reg">
	

<div class="container ">
    <h3 class="well">Update NGO Profile for <span style="font-size:.8em; color:blue;"><?php echo $email;?><?php echo $id; ?></span></h3>
	<div class="col-lg-12 well">
	<div class="row">
	<?php $q = $d->select("ngo", "email='$email'");
            $result=mysqli_fetch_array($q);
    ?>
				<form action="updateprocess.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Register Ngo's Name</label>
								<input type="text" name="name" value="<?php echo $result['name']; ?>" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Enter Registration Id</label>
								<input type="text" name="reg_id" value="<?php echo $result['reg_id']; ?>" class="form-control">
							</div>
						</div>
						<div class="row">					
						    <div class="col-sm-6 form-group">
							  <label>Email</label>
							  <input type="text" name="email" value="<?php echo $result['email']; ?>"  class="form-control">
						    </div>	
						
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="text" name="password" value="<?php echo $result['password']; ?>" class="form-control">
							</div>
						</div>	
						<div class="row">	
							<div class="col-sm-6 form-group">
								<label>Contact Number</label>
								<input type="text" name="mobile" value="<?php echo $result['mobile']; ?>" class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Enter Pan Number</label>
								<input type="text" name="pan" value="<?php echo $result['pan']; ?>" class="form-control">
							</div>		
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" rows="3" class="form-control"><?php echo $result['address']; ?></textarea>
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
							 <select name="state" id="country-list" class="form-control" onchange="getState(this.value);">
				                 <option value="">Select state</option>
				                  <?php
                                      $q = $d->select("cities");
                                      while ($result = mysqli_fetch_array($q)) {
                                          ?>
				                  <option value="<?php echo $result["state_id"]; ?>">
					                 <?php echo $result["state_name"]; ?>
				                      </option>
				                     <?php
                                      }
                               ?>
		                  </select>
							</div>		
							<div class="col-sm-6 form-group">
								<label>City</label>
							    <select id="state-list" class="form-control" name="city" value="<?php echo $result['city'];?>">
				                 <option value="" selected="selected">Select city</option>
			                 </select>



			                   <?php
                                   if (isset($_POST['state_id'])) {
                                       $cd = $_POST["state_id"];
                                       if ($_POST["state_id"] == null) {
                                           ?>
			                         <option>Select State</option>
			                     <?php

                                    exit();
                                       }

                                       $q = $d->select("cities", "state_id=$cd");
        
                                       if (mysqli_num_rows($q) > 0) {
                                           while ($result = mysqli_fetch_array($q)) {
                                               ?>

			                           <option value="<?php echo $result[" city_id"]; ?>">
				                       <?php echo $result["city_name"]; ?>
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
							<option>Agriculture</option>	
							<option>Art & Culture	</option>								
                            <option>Animal Husbandry, Dairying  &  Fisheries</option>
							<option>Biotechnology	</option>								
							<option>Children </option>								
							<option>Civic Issues</option>									
							<option>Dalit Upliftment</option>	
							<option>Differently Abled</option>									
							<option>Disaster Management</option>										
							<option>Drinking Water</option>								
							<option>Education & Literacy</option>								
							<option>Aged/Elderly</option>									
							<option>Environment & Forests	</option>									
							<option>Food Processing	</option>							
							<option>Health & Family Welfare </option>									
							<option>HIV/AIDS</option>							
							<option>Housing</option>										
							<option>Human Rights</option>								
							<option>Information & Communication Technology</option>							
							<option>Labour & Employment	</option>					
							<option>Land Resources	</option>									
							<option>Legal Awareness & Aid</option>						
							<option>Micro Finance (SHGs)		</option>							
							<option>Micro Small & Medium Enterprises		</option>							
							<option>Minority Issues</option>
							<option>New & Renewable Energy</option>	
							<option>Nutrition </option>														
							<option>Panchayati Raj</option>		
							<option>Prisoner's Issues</option>						
							<option>	Right to Information & Advocacy</option>								
							<option>Rural Development & Poverty Alleviation</option>							
							<option>Science & Technology</option>								
							<option>Scientific & Industrial Research</option>							
							<option>Sports	</option>									
							<option>Tourism	</option>									
							<option>Tribal Affairs	</option>										
							<option>Urban Development & Poverty Alleviation</option>
							<option>Vocational Training	</option>						
							<option>Water Resources	</option>								
							<option>Women's Development & Empowerment	</option>						
							<option>Youth Affairs</option>
							<option>Any Other</option>										
															
						</select>							
						</div>


						<div class="col-sm-6 form-group">
							<label>Ngo Type</label>
						    <select  class="form-control" name="ngo_type">
							<option > Select Ngo Type</option>
                 			<option >Private Sector Companies (Sec 25)</option>
			                <option >Cooperative Society</option>
		                    <option >Registered Societies (Non-Government)</option>
		                    <option >Trust (Non-Government)</option>
			                <option >Other Registered Entities (Non-Government)</option>
			                <option >Academic Institutions (Private)</option>					
			                </select>
						</div>
						</div>	
			
				
<button type="submit"  name="updatedetails" class="btn btn-lg btn-info">Submit</button>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal">Show Contact Form</button>
<div id="contact-modal" class="modal fade m-auto" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <a class="close" data-dismiss="modal">×</a> -->
				<h3 style="margin-left: 5px !important"
					
				>Change Password</h3>
			</div>
			<form id="contactForm" name="contact" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Old Password</label>
						<input type="text" name="oldpassword" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">New Passwor</label>
						<input type="text"  name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="message">Confirm New Password</label>
						<input type="text" name="cpassword" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit"  name="changepassword"  value="Change Password" class="btn btn-success" id="submit">
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<?php

include 'footer.php';
?>

