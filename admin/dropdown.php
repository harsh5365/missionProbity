<?php
require 'lib/dao.php';
require 'lib/model.php';
include 'header.php';
include 'footer.php';
$d= new dao();
?>
<!DOCTYPE html>
<html>

	<head>
		<title></title>
	</head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

	<body>

		<form>
			<label>State: </label>
			<select name="state_id" id="country-list" onchange="getState(this.value);">
				<option value="">Select state</option>
				<?php
			$q = $d->select("cities");
			while($result = mysqli_fetch_array($q)){
				?>
				<option value="<?php echo $result[" state_id"];?>">
					<?php echo $result["state_name"];?>
				</option>
				<?php 
			} 
			?>
			</select>
			<label>City: </label>
			<select id="state-list">
				<option value="" selected="selected">Select city</option>
			</select>
			<button value="submit">Submit</button>
			<?php
		
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
?>
		</form>
	</body>

</html>