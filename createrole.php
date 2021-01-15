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
            if(isset($_GET['nameerr']))
            {
        ?>
        <h2>Please enter different role name. This one already exists.</h2>
        <?php
            }
        ?>
        <form action="createroleprocess.php" method="post">
        Roll name : <input type="text" name="rolename" required>
        <br><br>
        <?php
            $query="select per_Id, permission from d_permissions";
            $result=mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($result)) 
            {
        ?>
        <label for="<?php echo $row[1] ?>"><?php echo $row[1] ?></label><input id="<?php echo $row[1] ?>" type="checkbox" name="permissions[]" value=<?php echo $row[0] ?>>
        <br><br>
        <?php
            }
        ?>
        <input type="submit" name="create" value="Create">
        </form>
    </div>
</body>
</html>