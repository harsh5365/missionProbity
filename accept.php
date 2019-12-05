<?php
session_start();
$id = $_SESSION['id'];
$self = $_GET['id'];
include 'lib/dao.php';
include 'lib/model.php';
$d = new dao();
$m = new model();
$status = 'acc';
$m->set_data('status', $status);
$a1= array('status'=> $m->get_data('status'));
$q = $d->update("vol_details", $a1,"rel_ngo='$id' AND sr='$self'");
if($q == true){
    header('Location: requests.php');
}
else{
    echo "Did not change.Sorry...";
}
?>