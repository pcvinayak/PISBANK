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
    <button class="button"  onclick="window.location.href='logout.php';">LOGOUT</button>
    <div>
        <h2>Hello</h2>
        <h3>You have not been assigned a role yet... Try again later!</h3>
    </div>
</body>
</html>