<?php
require_once('connection.php');
session_start();
if(isset($_POST['delete']))
{
    $query="DELETE FROM v_admin_ur WHERE v_admin_user_id=".$_POST['userid'].";";
    mysqli_query($conn,$query);
    $query="DELETE FROM d_users WHERE user_Id=".$_POST['userid'].";";
    mysqli_query($conn,$query);
    header("location:deleteadmin.php");
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>