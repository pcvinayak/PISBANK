<?php
    session_start();
    require_once('connection.php');
    
    if(isset($_SESSION['user_id']))
    {
        
    }
    else
    {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <title>Admin Home</title>
    <link rel="stylesheet" href="css/style.css">
<head>
    <title>Delete Admin</title>
</head>
<body>
    <button class="button"  onclick="window.location.href='adminhome.php';">Home</button>
    <button class="button"  onclick="window.location.href='logout.php';">LOGOUT</button>
    <div>
        <h2>Hello Admin</h2>
        <h3>Which Employee do you want to delete?</h3>
    </div>
    <div>
        <table style="width:100%">
            <tr>
                <th>Employee id</th>
                <th>Action</th>
            </tr>
            <?php 
            $query="(select u.user_Id from d_users as u join d_ur as ur where ur.user_Id=u.user_Id and role_Id=2)union(select u.user_Id from d_users as u where u.user_Id not in ((select user_Id from d_ur) UNION (SELECT v_admin_user_id from v_admin_ur)))";
            $result=mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)) 
            {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td>
                    <form action="deleteadminprocess.php" method="post">
                        <input name="userid" type="hidden" value='<?php echo $row[0]; ?> '>
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
            <?php   
            }
            ?>
        </table>
    </div>
</body>
</html>