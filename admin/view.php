<?php
session_start();
if(isset($_SESSION['sucess']))
{
    echo $_SESSION['email'];
}
?>
<a href="logout.php">logout</a>