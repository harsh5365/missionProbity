<?php
session_start();
if(isset($_SESSION['pan'])){
include 'inheader.php';
$email = $_SESSION['email'];
$id = $_SESSION['id'];
 ?>
<style>
	 .page-title h1 {
                margin: 0;
                padding: 5px 0 5px 20px;
                color: #fff;
                font-size: 20px;
                line-height: 20px;
            }

            .page-title {
                font-size: 34px;
                color:#F8B864;
                font-weight: 700;
                margin-bottom: 0;
            }

            .page-title 
            { 
                background:#F8B864 ;
                background: -moz-linear-gradient(left, #F8B864 0%, #feffff 80%);
                background: -webkit-linear-gradient(left, #F8B864 0%, #feffff 80%);
                background: linear-gradient(to right, #F8B864 0%, #feffff 80%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F8B864', endColorstr='#feffff', GradientType=1);
             }

              .header-height .page-title
              {
                padding-top: 30px;
               }

	  .breadcrumbs
                  {
                    padding-top: 9px;
                    padding-bottom: 4px;  
                  }
      label{
      	font-weight: bolder !important;
      	margin-left: 5px;
      }
    label,p{
    	font-size: 15px;
    	line-height: 35px;
    	padding-bottom: 0px;
    	padding-top: 0px;
    	margin-bottom: 0px;
    	margin-bottom: 0px;
    }
    #updpassword{
 	background-color: transparent;
 	box-shadow: unset !important;
 	border: none;
  }
   #updname{
 	background-color: transparent;
 	box-shadow: unset !important;
 	border: none;
  }
   #updphone{
 	background-color: transparent;
 	box-shadow: unset !important;
 	border: none;
  }
   #updemail{
 	background-color: transparent;
 	box-shadow: unset !important;
 	border: none;
  }
  
  #updaddress{
 	background-color: transparent;
 	box-shadow: unset !important;
 	border: none;
  }
  #contactForm .form-control{
    height: 34px !important;
  }
  button{
  	float: right;
  	background: #f7b765 !important;
  	color: white !important;
  	border: none !important;
  }	
  .leff{
    margin:auto !important;
  }
</style>
<div class="section-space" style="padding-top:170px;"></div>
<div class="container leff">
  <div class="main">
    
 
	<div class="page-title">
		<h1><strong>Update Profile</strong></h1>
	</div>

<br><br>
	                  <div class="col-md-10 main">
                       <?php $q = $d->select("ngo AS n INNER JOIN cities AS c", "email='$email' AND n.city=c.city_id");
            $result=mysqli_fetch_array($q);
    ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>NGO Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p name="name"><?php echo $result['name']; ?></p>
                                            </div>
                                            <div class="col-md-2">
                                               <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#updname" data-whatever="<?php echo $result['name']; ?>">Update</button>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Registartion Id</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p name="reg_id"><?php echo $result['reg_id']; ?></p>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p name="email"><?php echo $result['email']; ?></p>
                                            </div>
                                            <div class="col-md-2">
                                               <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#updemail">Update</button>
                                            </div>
                                        </div><hr>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p name="password"></p>
                                            </div>
                                            <div class="col-md-2">
                                               <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#updpassword">Update</button>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p name="mobile"><?php echo $result['mobile']; ?></p>
                                            </div>
                                              <div class="col-md-2">
                                              <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#updphone">Update</button>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Pan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p name="pan"><?php echo $result['pan']; ?></p>
                                            </div>
                                              
                                        </div><hr>
                                       <div class="row">
                                            <div class="col-md-4">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p name="address"><?php echo $result['address']; ?></p>
                                            </div>
                                              <div class="col-md-2">
                                               <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#updaddress">Update</button>
                                            </div><hr>
                                        </div><hr>
                                          <div class="row">
                                            <div class="col-md-4">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['city_name']; ?></p>
                                            </div>
                                              
                                        </div><hr>
                                          <div class="row">
                                            <div class="col-md-4">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['state_name']; ?></p>
                                            </div>
                                              
                                        </div><hr>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <label>Sectors</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['sectors']; ?></p>
                                            </div>
                                        </div><hr>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <label>NGO Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $result['ngo_type']; ?></p>
                                            </div>
                                        </div><hr>
                                        
                    </div>
  <div id="updpassword" class="modal fade m-auto" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <a class="close" data-dismiss="modal">×</a> -->
				<h3 style="margin-left: 5px !important">Change Password</h3>
			</div>
			<form id="contactForm" name="contact" role="form" action="controller.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Old Password</label>
						<input type="text" name="oldpassword" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">New Password</label>
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



<div id="updname" class="modal fade m-auto" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <a class="close" data-dismiss="modal">×</a> -->
				<h3 style="margin-left: 5px !important">Change NGO Name</h3>
			</div>
			<form id="contactForm" name="contact" role="form" action="updateprocess.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Enter New Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit"  name="changename"  value="Change Name" class="btn btn-success" id="submit">
				</div>
			</form>
		</div>
	</div>
</div>


<div id="updemail" class="modal fade m-auto" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <a class="close" data-dismiss="modal">×</a> -->
				<h3 style="margin-left: 5px !important">Change Email</h3>
			</div>
			<form id="contactForm" name="contact" role="form" action="updateprocess.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="name"> Enter New Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit"  name="changeemail"  value="Change Email" class="btn btn-success" id="submit">
				</div>
			</form>
		</div>
	</div>
</div>




<div id="updphone" class="modal fade m-auto" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <a class="close" data-dismiss="modal">×</a> -->
				<h3 style="margin-left: 5px !important">Change Phone.No</h3>
			</div>
			<form id="contactForm" name="contact" role="form" action="updateprocess.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="name"> Enter New Phone.No</label>
						<input type="text" name="mobile" class="form-control">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit"  name="changemobile"  value="Change Phone.No" class="btn btn-success" id="submit">
				</div>
			</form>
		</div>
	</div>
</div>





<div id="updaddress" class="modal fade m-auto" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <a class="close" data-dismiss="modal">×</a> -->
				<h3 style="margin-left: 5px !important">Change Address</h3>
			</div>
			<form id="contactForm" name="contact" role="form" action="updateprocess.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="name"> Enter New Address</label>
						<input type="text" name="address" class="form-control">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit"  name="changeaddress"  value="Change Address" class="btn btn-success" id="submit">
				</div>
			</form>
		</div>
	</div>
</div>

</div>

</div>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<?php 
include 'footer.php';
}
else{
    header('Location: login.php');
}
?>