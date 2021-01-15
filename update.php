<?php
include("database.php");
$result=mysqli_query($connect,"select * from d_userinfo order by user_Id ");
?>
<!DOCTYPE html>
<html>
<head></head>
<body style="background-size:cover;background-image:url('img/pic1.jpg');">
	<table style="margin:10% auto;width:60%;height:auto;background-color:rgba(22,144,167);font-family:courier;" BORDER="2">
			<tr style="font-weight:bold"> 
				<th>USER ID</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>PHONE NO.</th>
				<th>EMAIL ID</th>
				<th>HOME BRANCH</th>
				<th>UPDATE</th>
			</tr>
		<?php
			while($res=mysqli_fetch_array($result)){
				echo '<tr>';
				echo '<td>'.$res['user_Id'].'</td>';
				echo '<td>'.$res['First_name'].'</td>';
				echo '<td>'.$res['Last_name'].'</td>';
				echo '<td>'.$res['phone'].'</td>';
				echo '<td>'.$res['email'].'</td>';
				echo '<td>'.$res['home_branch'].'</td>';
				echo "<td><a href=\"edit.php?id=$res[user_Id]\"><input style='width:100%' type='submit' value='EDIT'></a>";
				echo '</tr>';
			}
		?>
		<div style="width:2cm;padding:0.3cm;font-family:courier;height:auto;background-color:rgba(22,144,167);font-family:courier;">
		<a style="font-decoration:none;font-weight:bold;" href="main.php">GO BACK</a>
	    </div>
	</table>
    
</body>
</html>
