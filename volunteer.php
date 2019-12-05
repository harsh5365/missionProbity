<?php
session_start();
$id = $_SESSION['id'];
include 'outheader.php';
?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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
<!------ Include the above in your HEAD tag ---------->
<style>
	body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.formBox{
	margin-top: 90px;
	padding: 50px;
}
.formBox  h1{
	margin: 0;
	padding: 0;
	text-align: center;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-size: 48px;
}
.inputBox{
	position: relative;
	box-sizing: border-box;
	margin-bottom: 50px;
}
.inputBox .input{
	position: relative;
	width: 100%;
	height: 50px;
	background: transparent;
	border: none;
    outline: none;
    font-size: 24px;
    border-bottom: 1px solid rgba(0,0,0,.5);


textarea{
	height: 100px !important;
}
.button{
    height: 50px;
    border: none;
    outline: none;
    background: #F4B15F;
    color: #fff;
}
.page-title h1 {
			margin: 0;
			padding: 5px 0 5px 20px;
			color: #fff;
			font-size: 20px;
		}

		.page-title {
			font-size: 34px;
			color: #F8B864;
			font-weight: 700;
			margin-bottom: 0;
		margin-top: 60px;
		}

		.page-title {
			background: #F8B864;
			background: -moz-linear-gradient(left, #F8B864 0%, #feffff 80%);
			background: -webkit-linear-gradient(left, #F8B864 0%, #feffff 80%);
			background: linear-gradient(to right, #F8B864 0%, #feffff 80%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F8B864', endColorstr='#feffff', GradientType=1);
		}
		.header-height .page-title {
			padding-top: 30px;
		}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	 <!-- <div class="container"> -->
	 <div class="header-height"></div>
<div class="container-fluid">
	<div class="page-title">
       <h1 class="text-center"><strong>Become Our Member</strong> </h1>
   							</div>	
		
			<div class="formBox">
				<form action="controller.php" method="POST">
						<div class="row">
							<div class="col-sm-4">
								<div class="inputBox ">
									<input type="text" name="name" class="input" placeholder="Name">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="inputBox">
									<input type="text" name="email" class="input" placeholder="Email">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="inputBox">
									<input type="text" name="mobile" class="input" placeholder="Mobile">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="inputBox">
									<select class="input" name="sex">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="inputBox">
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
							</div>
						<div class="col-sm-4">
							<div class="inputBox">
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
						</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox">
									<input type="text" name="occupation" class="input" placeholder="Occupation">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="inputBox">
                                    <input type="date" name="bday" class="input" placeholder="Birthdate">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<input type="text" name="address" class="input" placeholder="Address"
								</div>
							</div>
						</div>
						
									<input type="hidden" name="rel_ngo" class="input" value="<?php echo $id;?>">
								

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="vol" class="btn btn-warning" value="submit">
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
  $(".input").focus(function() {
      $('#inputText').hide('slow');       
      //return false;
    });
    
  
 $('.input').blur(function(){
    if( !$(this).val() ) {
          $('#inputText').show('slow');
    }
});
	</script>
<?php
include 'footer.php';
?>