<?php
include("database.php");
    $p1='none';
    $p2='none';
    $p3='none';
    $p4='none';
    $p5='none';
    $p6='none';
    $p7='none';
    $p8='none';
?>
<html>
<head>
<link rel="stylesheet" href="css/d_style2.css?v=<?php echo time();?>">
</head>
<?php
session_start();
 if(isset($_SESSION['user_id']))
    {
      echo '<a style="text-decoration:none;font-size:0.7cm;font-weight:bold" href="logout.php?logout">LOGOUT</a>';
	  $query="select distinct permission from d_permissions where per_Id in (select per_Id from d_pr where role_Id = (select role_Id from d_ur where user_Id=".$_SESSION['user_id']." ));";
      $result=mysqli_query($connect,$query);
	  
        while($row = mysqli_fetch_array($result)) 
        {
            if($row[0]=="debit")
            {
                $p1='block';
            }
            else if($row[0]=="credit")
            {
                $p2='block';
            }
			else if($row[0]=="insert")
            {
                $p3='block';
            }
			else if($row[0]=="block")
            {
                $p4='block';
            }
			else if($row[0]=="update")
            {
                $p5='block';
            }
			else if($row[0]=="view1")
            {
                $p6='block';
            }
			else if($row[0]=="view2")
            {
                $p7='block';
            }
			else if($row[0]=="transfer")
            {
                $p8='block';
            }
        }
	}
    else
    {
        header("location: index.php");
    }
?>
<body style="background-image:url('img/pic1.jpg');">
<div class="in">
<div style="display:<?php echo $p3 ?>;">
<a style="text-decoration:none;font-size:0.7cm" href="insert.php">INSERT</a></br>
</div>
<div style="display:<?php echo $p2?>;">
<a style="text-decoration:none;font-size:0.7cm" href="credit.php">CREDIT</a></br>
</div>
<div style="display:<?php echo $p5?>;">
<a style="text-decoration:none;font-size:0.7cm" href="update.php">UPDATE</a></br>
</div>
<div style="display:<?php echo $p7?>;">
<a style="text-decoration:none;font-size:0.7cm" href="view_all.php">VIEW CUSTOMERS</a></br>
</div>
<div style="display:<?php echo $p4?>;">
<a style="text-decoration:none;font-size:0.7cm" href="block.php">CLOSE ACCOUNT</a></br>
</div>
<div  style="display:<?php echo $p8 ?>;">
<a style="text-decoration:none;font-size:0.7cm" href="transfer.php">TRANSFER</a></br>
</div>
<div style="display:<?php echo $p1?>;">
<a style="text-decoration:none;font-size:0.7cm" href="debit.php">DEBIT</a></br>
</div>
</div>
</body>
</html>
