<?php
include("database.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/d_style2.css?v=<?php echo time();?>">
</head>
<body style="background-image:url('img/pic1.jpg');">
	<div class="in">
	<form action="" method="POST">
	CREDIT AMOUNT----------------<input type="text" name="amount"><br>
	ENTER ACCOUNT FOR CREDITING--<input type="text" name="account"><br>
	<input type="submit" name="insert" value="CONFIRM AMOUNT" class="btn">
	<a style="font-decoration:none;font-weight:bold;" href="main.php">GO BACK</a><br>
	
	<?php
		if(isset($_POST['insert']))
		{
			$account=$_POST['account'];
			$amount=$_POST['amount'];
			$result=mysqli_query($connect,"select amount from d_userinfo where user_Id=$account");
			if($account and $amount){
			if(mysqli_num_rows($result)>0){
				$sql=mysqli_query($connect,"update d_userinfo set amount=amount+$amount where user_Id=$account");
				if($sql){
					echo "AMOUNT ADDED ...SUCCESSFULLY";
				}else{
					echo "AMOUNT CANNOT BE CREDITED ";
				}
			}else{
				echo "WRONG ACCOUNT NUMBER";
			}}
			else{
				echo "ENTER ALL THE ENTERIES";
			}
		}
	?>
	</form>
	</div>
</body>
</html>