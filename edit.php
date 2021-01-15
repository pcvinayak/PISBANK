<?php
include("database.php");
$id=$_GET['id'];
$result=mysqli_query($connect,"select * from d_userinfo where user_Id=$id");
while($res=mysqli_fetch_array($result)){
	$uname=$res['user_Id'];
	$fname=$res['First_name'];
	$lname=$res['Last_name'];
	$ph=$res['phone'];
	$email=$res['email'];
	$home=$res['home_branch'];
}
?>
	
<?php
	if(isset($_POST['update'])){
		$id=$_POST['username'];
		$fsname=$_POST['Fname'];
		$lsname=$_POST['Lname'];
		$phone=$_POST['PHONE'];
		$eid=$_POST['email'];
		$branch=$_POST['home'];
		
		$result=mysqli_query($connect,"update d_userinfo set user_Id='$id', First_name='$fsname', Last_name='$lsname', phone='$phone', email='$eid', home_branch='$branch' where user_Id=$id");
		if($result){
			header("location:update.php");
		}else{
			echo "UPDATION FAILED";
		}
	}
?>
	<html>
	<head>
		<link rel="stylesheet" href="css/d_style1.css?v=<?php echo time();?>">
	</head>
	<body style="background-image:url('img/pic1.jpg');">
	<div class="in">
    <form action="" method="POST"><br>
		USERNAME-----<input type="text" name="username" value="<?php echo $uname; ?>"><br>
		FIRST NAME---<input type="text" name="Fname" value="<?php echo $fname; ?>"><br>
		LAST NAME----<input type="text" name="Lname" value="<?php echo $lname; ?>"><br>
		PHONE--------<input type="text" name="PHONE" value="<?php echo $ph; ?>"><br>
		EMAIL--------<input type="text" name="email" value="<?php echo $email; ?>"><br>
		HOME BRANCH--<input type="text" name="home" value="<?php echo $home; ?>"><br>
		<input type="submit" name="update" value="UPDATE " class="btn">
		
	</form>
	</div>
	</body>
	</html>