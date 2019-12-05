<?php
include 'header.php';
?><style>.center {
  margin: auto;
  width: 50%;
  padding: 10px;
	display: block;
}
</style>
<div class="header-height"></div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br> 
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	
	<h4 class="card-title mt-2">Register your NGO</h4>
</header>
<article class="card-body">
<form action="mmc.php" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>name </label>   
		  	<input type="text" name="name" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>registeration no</label>
		  	<input type="text" name="reg_id" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
    </div> <!-- form-row end.// -->
    <div class="form-row">
		<div class="col form-group">
			<label>Email </label>   
		  	<input type="taxt" name="email" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Password</label>
		  	<input type="text" name="password" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
	</div> 
     <!-- form-group end.// -->
     <div class="form-row">
		<div class="col form-group">
			<label>Mobile no </label>   
		  	<input type="text" name="mobile" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>PAN no</label>
		  	<input type="text" name="pan" class="form-control" placeholder=" " required>
		</div> <!-- form-group end.// -->
    </div> 
    <div class="form-group">
		<label>Address</label>
	    <input  name="address" class="form-control" type="text" required>
	</div>
	
     <!-- form-row.// -->
     <div class="form-row">
		<div class="col form-group">
        <script>
		// console.log('Aasdfwasd');
		function getState(val) {
			// alert("Hi");
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
			<label>State </label>   
            <select name="state" id="country-list" onchange="getState(this.value);">
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
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>City</label>
            <select id="state-list" name="city">
				<option value="" selected="selected">Select city</option>
			</select>
			
			<?php
		if(isset($_POST['state_id'])){
		$cd = $_POST["state_id"];
		if($_POST["state_id"] == null) {
				?>
			<option>Select State</option>
			<?php

exit();
			} 
		$q = $d->select("cities","state_id=$cd");
		//$result = mysqli_fetch_array($q);
		// if ($result>0){
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
        </div>
        <div class="form-row">
		<div class="col form-group">
			<label>Sectors </label>   
            <select name="sectors">
						<option value="">Sector</option>
						<option>
							Agriculture </option>
						<option>
							Animal Husbandry, Dairying & Fisheries </option>
						<option>
							Art & Culture </option>
						<option>
							Biotechnology </option>
						<option>
							Children </option>
						<option>
							Civic Issues </option>
						<option>
							Dalit Upliftment </option>
						<option>
							Differently Abled </option>
						<option>
							Disaster Management </option>
						<option >
							Drinking Water </option>
						<option >
							Education & Literacy </option>
						<option >
							Aged/Elderly </option>
						<option >
							Environment & Forests </option>
						<option >
							Food Processing </option>
						<option >
							Health & Family Welfare </option>
						<option >
							HIV/AIDS </option>
						<option >
							Housing </option>
						<option >
							Human Rights </option>
						<option >
							Information & Communication Technology </option>
						<option >
							Labour & Employment </option>
						<option >
							Land Resources </option>
						<option >
							Legal Awareness & Aid </option>
						<option >
							Micro Finance (SHGs) </option>
						<option >
							Micro Small & Medium Enterprises </option>
						<option >
							Minority Issues </option>
						<option >
							New & Renewable Energy </option>
						<option >
							Nutrition </option>
						<option>
							Panchayati Raj </option>
						<option>
							Prisoner's Issues </option>
						<option>
							Right to Information & Advocacy </option>
						<option>
							Rural Development & Poverty Alleviation </option>
						<option>
							Science & Technology </option>
						<option>
							Scientific & Industrial Research </option>
						<option>
							Sports </option>
						<option>
							Tourism </option>
						<option>
							Tribal Affairs </option>
						<option>
							Urban Development & Poverty Alleviation </option>
						<option>
							Vocational Training </option>
						<option>
							Water Resources </option>
						<option>
							Women's Development & Empowerment </option>
						<option>
							Youth Affairs </option>
						<option>
							Any Other </option>
					</select>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>NGO type</label>
            <select class="" id="" name="ngo_type">
						<option value="">Select Ngo Type</option>
						<option>Private Sector Companies (Sec 25)</option>
						<option>Cooperative Society</option>
						<option>Registered Societies (Non-Government)</option>
						<option>Trust (Non-Government)</option>
						<option>Other Registered Entities (Non-Government)</option>
						<option>Academic Institutions (Private)</option>

					</select>
		</div> </div>
	 <!-- form-group end.// -->  
    <div class="form-group center">
        <button name="reg_ngo" type="submit" class="btn btn-warning btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->

</div> <!-- card.// -->
</div> <!-- col.//-->

 <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>


<hr>


<?php
include 'footer.php';
?>