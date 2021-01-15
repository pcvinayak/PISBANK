<?php
include("database.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"delete from d_userinfo where user_Id=$id");
$result1=mysqli_query($connect,"delete from d_ur where user_Id=$id");
$result2=mysqli_query($connect,"delete from d_users where user_Id=$id");
if($result and $result1 and $result2){
			header("location:block.php?Account closed");
		}else{
			echo "Account not closed";
		}
?>