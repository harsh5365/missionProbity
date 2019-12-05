<?php
require 'lib/dao.php';
require 'lib/model.php';
$d = new dao();
$m = new model();
extract($_POST);
if(isset($_POST['btn'])){
    $q=$d->select("admin_login","email='$email' AND password='$password'");
    $result=mysqli_fetch_array($q);
    if($result > 0){
		session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $result['name'];
        header('location:dashboard.php');
    }
    else{
		$_SESSION['error']='invalid details';
        header('location:index.php');
    }
}

?>