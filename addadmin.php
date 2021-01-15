<?php
    session_start();
    require_once('connection.php');
    if(!isset($_SESSION['user_id']))
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
    <title>Assign Role</title>
</head>
<body>
    <button class="button"  onclick="window.location.href='adminhome.php';">Home</button>
    <button class="button"  onclick="window.location.href='logout.php';">LOGOUT</button>
    <div>
        <h2>Hello Admin</h2>
    </div>
    <div>
            <?php 
            $query="SELECT user_Id from d_users where user_Id not in ((select v_admin_user_id from v_admin_ur) union (select user_Id from d_ur))";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==0)
            {
                echo "<h2>No user without role exists</h2>";
            }
            else
            {
                ?>                
            <table style="width:100%">
                <tr>
                    <th>User Id</th>
                    <th>Role to Assign</th>
                </tr>
                <?php
                while($row = mysqli_fetch_array($result)) 
                {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td>
                        <form action="assignroleprocess.php" method="post">
                            <input name="userid" type="hidden" value='<?php echo $row[0]; ?> '>
                            <input type="submit" name="assign" value="Assign">
                        </form>
                    </td>
                </tr>
                <?php   
                }
            }
            ?>
        </table>
    </div>
</body>
</html>