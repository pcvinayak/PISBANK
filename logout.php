<?php
session_start();
if(isset($_SESSION['username']))
{
    $_SESSION=array();
    session_destroy();
}
header("location: index.php");
?>