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
    <title>Login Page</title>
</head>
<body>
    <button class="button"  onclick="window.location.href='adminhome.php';">Home</button>
    <button class="button"  onclick="window.location.href='logout.php';">LOGOUT</button>
    <div>
        <h2>Hello Admin</h2>
        <h3>Which user-roll do you want to deassign?</h3>
    </div>
    <div>
        <table style="width:100%">
            <tr>
                <th>User Id</th>
                <th>Roll Name</th>
                <th>Action</th>
            </tr>
            <?php 
            $query="SELECT ur.user_Id,ur.role_Id,r.role from d_roles as r JOIN d_ur as ur On ur.role_Id=r.role_Id where ur.role_Id <> 1";
            $result=mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)) 
            {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td>
                    <form action="deassignroleprocess.php" method="post">
                        <input name="userid" type="hidden" value='<?php echo $row[0]; ?> '>
                        <input name="roleid" type="hidden" value='<?php echo $row[1]; ?> '>
                        <input type="submit" name="delete" value="Deassign">
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