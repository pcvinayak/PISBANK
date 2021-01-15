<?php
require_once('connection.php');
session_start();
if(isset($_POST['delete']))
{
    $query="DELETE FROM d_ur WHERE role_Id=".$_POST['roleid']." and user_Id=".$_POST['userid'].";";
    mysqli_query($conn,$query);
    header("location:deassignrole.php");
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>