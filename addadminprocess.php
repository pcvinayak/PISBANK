<?php
require_once('connection.php');
session_start();
if(isset($_POST['assign']))
{
    $query="INSERT INTO v_admin_ur (v_admin_roll_id,v_admin_user_id) VALUES (2,".$_POST['userid'].");";
    mysqli_query($conn,$query);
    header("location:addadmin.php");
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>