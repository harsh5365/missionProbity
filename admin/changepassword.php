<?php
if(isset($_SESSION['email']))
	{
		echo "Hello!".$_SESSION['email']."<br>";
	?>
    <?php include 'master.php';?>
		<br><form action="controller.php" method="POST" enctype="multipart/form-data">
			<label>Old Password:</label>
			<input type="password" name="oldPassword"><br>
			<label>New Password:</label>
			<input type="password" name="password"><br>
			<label>Confirm Password:</label>
			<input type="password" name="cPassword">
			<input type="submit" name="changePassword" value="Change Password">
			<?php
			if(isset($_SESSION['errorFile'])){
			echo "<b style='color:red'>".$_SESSION['errorFile']."</b><br>";
			unset($_SESSION['errorFile']);
		}else
		{
			echo "";
		}
		?>
		</form>
		<?php
	}else
	{
		header('Location:form.php');
	}
?>