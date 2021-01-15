<?php
$conn = mysqli_connect('localhost','root','','d_bankingsystem');
if(!$conn)
{
    die('Connection error '.mysqli_connect_error($conn));
}
?>