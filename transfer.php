<?php
include("database.php");
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="css/d_style2.css?v=<?php echo time();?>">
</head>
<body style="background-image:url('img/pic1.jpg');">
	<div class="in">
	<form action="" method="POST">
	TRANSFER AMOUNT-----------<input type="text" name="amount"><br>
	ACCOUNT OF BENEFIACIARY---<input type="text" name="account"><br>
	ENTER YOUR PIN------------<input type="text" name="pin"><br>
	<input type="submit" name="insert" value="TRANSFER AMOUNT" class="btn">
	<a style="font-decoration:none;font-weight:bold;" href="main.php">GO BACK</a><br>
	
	<?php
		if(isset($_POST['insert']))
		{
			$account=$_POST['account'];
			$amount=$_POST['amount'];
			$pin=$_POST['pin']; 
			if($account and $amount and $pin){
			$result=mysqli_query($connect,"select amount from d_userinfo where Pin=$pin");
			$result1=mysqli_query($connect,"select amount from d_userinfo where user_Id=$account");
			if(mysqli_num_rows($result)>0){
				if( mysqli_num_rows($result1)>0){
				$res=mysqli_query($connect,"select amount from d_userinfo where user_Id=$account and amount>=$amount ");
				if(mysqli_num_rows($res)>1){
				$sql1=mysqli_query($connect,"update d_userinfo set amount=amount+$amount where user_Id=$account");
				$sql2=mysqli_query($connect,"update d_userinfo set amount=amount-$amount where Pin=$pin and user_Id=".$_SESSION['user_Id']."");
				if($sql1 and $sql2){
					echo "AMOUNT TRANSFERED INTO THE GIVEN ACCOUNT NUMBER ...SUCCESSFULLY";
				}else{
					echo "AMOUNT CANNOT BE TRANSFERED ....SORRY FOR THE INCONVIENCE CAUSED";
				}}else{
					echo "ENTER A VALID BENEFIACIARY AND CORRECT AMOUNT";
				}}
				else{
					echo "BENEFICIARY ACCOUNT ENTERED DOESNOT EXIST";
				}
			}else{
				echo "WRONG PIN ENTERED";
			}}else{
				echo "CORRECTLY ENTER ALL VALUES";
			}
		}
	?>
	</form>
	</div>
</body>
</html>