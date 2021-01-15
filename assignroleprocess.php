<?php
require_once('connection.php');
session_start();
if(isset($_POST['assign']))
{
    $query="INSERT INTO d_ur (user_Id,role_id) VALUES (".$_POST['userid'].",".$_POST['dropdownlistroles'].");";
    mysqli_query($conn,$query);
    header("location:assignrole.php");
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>