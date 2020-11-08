<?php
session_start();

if(!isset($_SESSION['active']))
{
    header('location: public.html');
}
include_once('userloginheader.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table align="center" width='50%' border="1">
        <tr>
            <td>
                <h3>Account</h3>
                <hr>
                <ul>
                    <li><a href="profile_dash.php">Dashboard</a></li>
                    <li><a href="profile_view_profile.php">View Profile</a></li>
                    <li><a href="profile_edit_profile.php">Edit Profile</a></li>
                    <li><a href="profile_change_pic.php">Change Profile Picture</a></li>
                    <li><a href="profile_change_pas.php">Change Password</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>                
            </td>
            <td>
                <h1>Welcome <?php echo $_SESSION['name']; ?></h1>
            </td>
        </tr>
    </table>
</body>
</html>

<?php

    include_once('footer.html');
?>
