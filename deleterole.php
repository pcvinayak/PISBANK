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
    <title>Login Page</title>
</head>
<body>
    <button class="button"  onclick="window.location.href='adminhome.php';">Home</button>
    <button class="button"  onclick="window.location.href='logout.php';">LOGOUT</button>
    <div>
        <h2>Hello Admin</h2>
        <h3>Which roll do you want to delete?</h3>
    </div>
    <div>
        <table style="width:100%">
            <tr>
                <th>Role Name</th>
                <th>Action</th>
            </tr>
            <?php 
            $query="select * from d_roles";
            $result=mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)) 
            {
            ?>
            <tr>
                <td><?php echo $row[1]; ?></td>
                <td>
                    <form action="deleteroleprocess.php" method="post">
                        <input name="roleid" type="hidden" value='<?php echo $row[0]; ?> '>
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