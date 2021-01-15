<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$c=mysqli_connect("localhost","root","");
	session_start();
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($c,$username);
	$password=mysqli_real_escape_string($c,$password);
	
	
	mysqli_select_db($c,"d_bankingsystem");
	
	if(isset($username) && isset($password)){
		if(empty($username)){
			header("Location:index.php?error=USER NAME NOT ENTERED");
			exit();
		}else if(empty($password)){
			header("Location:index.php?error=PASSWORD NOT ENTERED");
			exit();
		}else{
			$result=mysqli_query($c,"select * from d_users where user_Id='$username' and Password='$password' ") 
			or die("failed to query database".mysqli_error($c));
			$row1=mysqli_fetch_array($result);
			if(mysqli_num_rows($result))
			{
				$_SESSION['user_id']=$row1['user_Id'];
				$query="select * from d_ur where  user_Id='".$username."'";
				$result=mysqli_query($c,$query);
				if($result=mysqli_fetch_assoc($result))
				{
					header("location:main.php");
				}
				else
				{
					$query="select * from v_admin_ur where  v_admin_user_id='".$_POST['username']."'";

					$result=mysqli_query($c,$query);
					if($result=mysqli_fetch_assoc($result))
					{
						header("location:adminhome.php");
					}
					else
					{
						header("location:noroleman.php");
					}
				}
			}
			else
			{
				header("Location:index.php?error=USER NAME OR PASSWORD IS INVALID");
				exit();
			}
		}
	}
	else{
		header("Location:index.php?error=PLEASE ENTER BOTH USER NAME AND PASSWORD");
		exit();
	}
	
?>