<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style1.css?v=<?php echo time();?>">
</head>
<body style="background-image:url('img/pic1.jpg');">
<div class="login">
	<form method="POST" action="process.php">  
	
		<?php if(isset($_GET['error'])){ ?>
			<p class="error"> <?php echo $_GET['error']; ?></p>
	        <?php	}?>
		
		<div class="name">
			<input type="text" name="username" placeholder="ENTER YOUR USER ID"/>
		</div>

		<div class="password">
			<input type="password" name="password" placeholder="ENTER YOUR PASSWORD"/>
		</div>

		<input type="submit" name="submit" value="LOGIN" class="btn" />

	</form>
</div>
</body>
</html>