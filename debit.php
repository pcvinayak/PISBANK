<?php
include("database.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/d_style1.css?v=<?php echo time();?>">
</head>
<body style="background-image:url('img/pic1.jpg');">
    <div class="in">
	<form action="" method="POST">
	WITHDRAWAL AMOUNT--<input type="text" name="amount"><br>
	ENTER YOUR PIN-----<input type="text" name="Pin"><br>
	<input type="submit" name="insert" value="PROCEED TO WITHDRAW" class="btn">
	<a style="font-decoration:none;font-weight:bold;" href="main.php">GO BACK</a><br>
	<?php
		if(isset($_POST['insert']))
		{
			$Pin=$_POST['Pin'];
			$amount=$_POST['amount'];
			$result=mysqli_query($connect,"select amount from d_userinfo where Pin=$Pin");
			if($Pin and $amount){
			if(mysqli_num_rows($result)>0){
				$sql=mysqli_query($connect,"update d_userinfo set amount=amount-$amount where Pin=$Pin and amount>=$amount");
				$res=mysqli_fetch_array($result);
				if($res['amount']>=$amount){
					echo "AMOUNT DEBITED";
				}else{
					echo "INSUFFICIENT AMOUNT";
				}
			}else{
				echo "WRONG PIN ENTERED";
			}}else{
				echo "ENTER ALL VALUES";
			}
		}
	?>
	</form>
	</div>
</body>
</html>