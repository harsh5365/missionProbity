<?php
session_start();
$id = $_GET['id'];
include 'lib/dao.php';
$d = new dao();
$q = $d->delete("vol_details","id='$id'");
if ($q==true) {
    header('Location: volunteers.php');
}
else{
    echo "could not delete";
}
?>