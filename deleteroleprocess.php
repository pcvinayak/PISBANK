<?php
require_once('connection.php');
session_start();
if(isset($_POST['delete']))
{
    $query="DELETE FROM d_ur WHERE role_Id=".$_POST['roleid'].";";
    mysqli_query($conn,$query);
    $query="DELETE FROM d_roles WHERE role_Id=".$_POST['roleid'].";";
    mysqli_query($conn,$query);
    $query="DELETE FROM d_pr WHERE role_Id=".$_POST['roleid'].";";
    mysqli_query($conn,$query);
    header("location:deleterole.php");
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>