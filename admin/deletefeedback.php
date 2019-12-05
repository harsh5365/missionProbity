<?php
session_start();
include 'lib/dao.php';
$d = new dao();
$id = $_GET['id'];
$q = $d->delete("contact_us","sr='$id'");
if ($q==true) {
    header('Location:feedback.php');
}
else{
    echo "could not delete";
}
?>