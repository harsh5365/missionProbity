<?php
session_start();
$id = $_SESSION['id'];
include 'lib/dao.php';
include 'lib/model.php';
$d = new dao();
$m = new model();
extract($_POST);
if(isset($_POST['changename'])){
    $m->set_data('name', $name);
                    $a1= array('name'=> $m->get_data('name'));
                    $q=$d->update("ngo", $a1, "id='$id'");
                    if ($q==true) {
                        header("Location: upd_profile.php");
                    } else {
                        echo "Couldn't change Name";
                    }
}
if(isset($_POST['changeemail'])){
    $m->set_data('email', $email);
                    $a1= array('email'=> $m->get_data('email'));
                    $q=$d->update("ngo", $a1, "id='$id'");
                    if ($q==true) {
                        session_destroy();
                        header("Location: login.php");
                    } else {
                        echo "Couldn't change Email";
                    }
}
if(isset($_POST['changemobile'])){
    $m->set_data('mobile', $mobile);
                    $a1= array('mobile'=> $m->get_data('mobile'));
                    $q=$d->update("ngo", $a1, "id='$id'");
                    if ($q==true) {
                        header("Location: upd_profile.php");
                    } else {
                        echo "Couldn't change Mobile";
                    }
}
if(isset($_POST['changeaddress'])){
    $m->set_data('address', $address);
                    $a1= array('address'=> $m->get_data('address'));
                    $q=$d->update("ngo", $a1, "id='$id'");
                    if ($q==true) {
                        header("Location: upd_profile.php");
                    } else {
                        echo "Couldn't change Address";
                    }
}
?>