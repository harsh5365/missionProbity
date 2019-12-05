<?php

include 'header.php';
?>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> <script>
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
<style>
	.Form{
		background-color: white;
		border-color: #F4B15F;
		border-radius: 1px;
		border-style: solid;
		width: 90%;
		margin-left: 10px;
		padding-left: 5px;
		text-align: left;
	}
	.space{
		height:10px;
	}
	.input{
		width:50%;
		display: inline-block;
	}
	#input{
		width:50%;
		display: inline-block;
	}
	label{
		display: inline-block;
	}
</style>
<div class="header-height"></div>
<div class="space"></div>
<div class="content">
<div class="Form col-5">
	<h1>Search For NGO</h1>
	<form action="controller.php" method="POST">
		<div class="form">
			<label>Name</label>
			<input type="text" id="input" name="name" placeholder="Enter NGO Name">
		</div>
		<div class="form">
			<label>State</label>
			<select name="state" id="country-list" class="input" onchange="getState(this.value);">
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
		<div class="form">
			<label>City</label>
			<select id="state-list" name="city" class="input">
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
	</form>
</div></div>
<div class="space"></div>
<?php
include 'footer.php';
?>