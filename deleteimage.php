<?php
session_start();
$id = $_GET['id'];
include 'lib/dao.php';
$d = new dao();
$q = $d->select("doc_upload","doc_id='$id'");
$result = mysqli_fetch_array($q);
$name = $result['docFile'];
unlink("uploadimg/$name");
$s = $d->delete("doc_upload", "doc_id='$id'");
if($s==true){
    header('Location:up_gallary.php');
}
else{
    echo "not going to happen";
}
?>