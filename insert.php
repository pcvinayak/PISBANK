<?php
include("database.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/d_style1.css?v=<?php echo time();?>">
	</head>
	<body style="background-image:url('img/pic1.jpg');">
	<div class="in">
	<form action="" method="POST"><br>
		USERNAME------<input type="text" name="username"><br>
		FIRST NAME----<input type="text" name="Fname"><br>
		LAST NAME-----<input type="text" name="Lname"><br>
		PHONE---------<input type="text" name="PHONE"><br>
		EMAIL---------<input type="text" name="email"><br>
		AMOUNT--------<input type="text" name="amount"><br>
		HOME Branch---<input type="text" name="home"><br>
		PIN-----------<input type="text" name="Pin"><br>
		<input type="submit" name="insert" value="NEW CUSTOMER" class="btn">
		<a style="font-decoration:none;font-weight:bold;" href="main.php">GO BACK</a>
	</form>
	<?php
		if(isset($_POST['insert']))
		{
			$uname=$_POST['username'];
			$fname=$_POST['Fname'];
			$lname=$_POST['Lname'];
			$phone=$_POST['PHONE'];
			$email=$_POST['email'];
			$amount=$_POST['amount'];
			$branch=$_POST['home'];
			$Pin=$_POST['Pin'];
			if($uname and $fname and $lname and $phone and $email and $amount and $branch and $Pin){
			$result=mysqli_query($connect,"insert into d_userinfo values('$uname','$fname','$lname','$phone','$email','$amount','$branch','$Pin')");
			
			if($result){
				$result1=mysqli_query($connect,"insert into d_users values('$uname','$Pin')");
				$result1=mysqli_query($connect,"insert into d_ur values('$uname',1)");
				echo "successfully added a new accout";
			}else{
				echo "Something inappropriate with your entered data";
			}}else{
				echo "ALL ENTERIES ARE REQUIRED";
			}
		}
	?>
	</div>
	</body>
</html>