<?php
session_start();
$id = $_GET['id'];
include 'lib/dao.php';
$d = new dao();
$q = $d->delete("ngo","id='$id'");
if ($q==true) {
    header('Location:ngo_details.php');
}
else{
    echo "could not delete";
}
?>