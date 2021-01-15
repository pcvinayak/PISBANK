<?php
require_once('connection.php');
session_start();
if(isset($_POST['delete']))
{
    $query="DELETE FROM d_ur WHERE user_Id=".$_POST['userid'].";";
    mysqli_query($conn,$query);
    $query="DELETE FROM d_users WHERE user_Id=".$_POST['userid'].";";
    mysqli_query($conn,$query);
    header("location:deleteemployee.php");
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>