<?php
require_once('connection.php');
session_start();
if(isset($_POST['create']))
{
    $query="SELECT * from d_users where user_Id=".$_POST['userid']."";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)!=0)
    {
        header("location:addemployee.php?nameerr=1");
    }
    else
    {
        $query="INSERT INTO d_users (user_Id,Password) VALUES (".$_POST['userid'].",'".$_POST['password']."')";
        mysqli_query($conn,$query);
        header("location:addemployee.php");
    }
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>