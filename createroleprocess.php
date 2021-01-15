<?php
require_once('connection.php');
session_start();
if(isset($_POST['create']))
{
    $query="SELECT * from d_roles where role='".$_POST['rolename']."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)!=0)
    {
        header("location:createrole.php?nameerr=1");
    }
    else
    {
        $query="INSERT INTO d_roles (role) VALUES ('".$_POST['rolename']."')";
        mysqli_query($conn,$query);
        $query1="SELECT * from d_roles where role='".$_POST['rolename']."'";
        $result1=mysqli_query($conn,$query1);
        while($row = mysqli_fetch_array($result1))
        {
            $name = $_POST['permissions'];
            foreach ($name as $color)
            { 
                $query="INSERT INTO d_pr (role_Id,per_Id) VALUES (".$row[0].",".$color.");";
                mysqli_query($conn,$query);
            }
        }
        header("location:createrole.php");
    }
}
else
{
    header("location:index.php?empty= Invalid credentials");   
}
?>