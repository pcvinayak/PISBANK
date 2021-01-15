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
        <h2>Please enter different user id. This one already exists.</h2>
        <?php
            }
        ?>
        <form action="addemployeeprocess.php" method="post">
        User ID  : <input type="number" name="userid" required>
        <br><br>
        Password : <input type="password" name="password" required>
        <input type="submit" name="create" value="Create">
        </form>
    </div>
</body>
</html>