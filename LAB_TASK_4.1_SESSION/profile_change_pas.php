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
                <form method="POST" action="">
                    Current Password : <input type="password" name="cu_pas" id=""> <br>
                    New Password: <input type="password" name="new_pas" id=""> <br>
                    Confirm New Passord: <input type="password" name="con_pas" id=""> <br>

                    <input type="submit" name='submit' value="Submit">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        if($_POST['cu_pas'] == $_SESSION['password'])
        {

            if($_POST['new_pas']==$_POST['con_pas'])
            {
                $_SESSION['password'] = $_POST['new_pas'];

                echo '<h1>Password Changed.</h1>';
            }
            else
            {
                echo '<h1>Password Dont match.</h1>';
            }
        }
        else
        {
            echo '<h1> Wrong Password.</h1>';
        }
    }

?>


<?php

    include_once('footer.html');
?>
