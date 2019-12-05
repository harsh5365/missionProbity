<?php
session_start();
$self = $_GET['id'];
include 'lib/dao.php';
$d = new dao();
$q = $d->delete("vol_details","sr='$self'");
if($q == true){
    header('Location: requests.php');
}
else{
    echo "could not delete";
}
?>