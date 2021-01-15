<?php
    session_start();
    require_once('connection.php');
    $admin_per1='none';
    $admin_per2='none';
    $admin_per3='none';
    $admin_per4='none';
    $admin_per5='none';
    $admin_per6='none';
    $admin_per7='none';
    $admin_per8='none';
    
    if(isset($_SESSION['user_id']))
    {
        $query="select v_admin_permission_name from v_admin_permission where v_admin_permission_id in (select v_admin_permission_id from v_admin_pr where v_admin_roll_id = (select v_admin_roll_id from v_admin_ur where v_admin_user_id=".$_SESSION['user_id']."));";
        $result=mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)) 
        {
            if($row[0]=="assign roll")
            {
                $admin_per1='block';
            }
            else if($row[0]=="deassign roll")
            {
                $admin_per2='block';
            }
            else if($row[0]=="add admin")
            {
                $admin_per3='block';
            }
            else if($row[0]=="remove admin")
            {
                $admin_per4='block';
            }
            else if($row[0]=="create roll")
            {
                $admin_per5='block';
            }
            else if($row[0]=="delete roll")
            {
                $admin_per6='block';
            }
            else if($row[0]=="add employee")
            {
                $admin_per7='block';
            }
            else if($row[0]=="remove employee")
            {
                $admin_per8='block';
            }
        }
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
        <h2>Hello Admin</h2>
        <h3>What do you want to do?</h3>
    </div>
    <div style="display:<?php echo $admin_per1 ?>;">
        <button class="button"  onclick="window.location.href='assignrole.php';">Assign  Role</button>
    </div>
    <div style="display:<?php echo $admin_per2 ?>;">
        <button class="button"  onclick="window.location.href='deassignrole.php';">Deassign  Role</button>
    </div>
    <div style="display:<?php echo $admin_per3 ?>;">
        <button class="button"  onclick="window.location.href='addadmin.php';">Add Admin</button>
    </div>
    <div style="display:<?php echo $admin_per4 ?>;">
        <button class="button"  onclick="window.location.href='deleteadmin.php';">Remove Admin</button>
    </div>
    <div style="display:<?php echo $admin_per5 ?>;">
        <button class="button"  onclick="window.location.href='createrole.php';">Create  Role</button>
    </div>
    <div style="display:<?php echo $admin_per6 ?>;">
        <button class="button"  onclick="window.location.href='deleterole.php';">Delete  Role</button>
    </div>
    <div style="display:<?php echo $admin_per7 ?>;">
        <button class="button"  onclick="window.location.href='addemployee.php';">Add Empployee</button>
    </div>
    <div style="display:<?php echo $admin_per8 ?>;">
        <button class="button"  onclick="window.location.href='deleteemployee.php';">Remove Employee</button>
    </div>
</body>
</html>