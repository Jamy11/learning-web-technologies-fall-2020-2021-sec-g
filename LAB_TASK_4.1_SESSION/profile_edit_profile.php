<?php
//session_start();
include_once('userloginheader.php');
if(!isset($_SESSION['active']))
{
    header('location: public.html');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <form method="POST" action="profile_edit_check.php">
        <table align="center" width='50%' border="1">
            <tr>
                <td>
                    <h3>Account</h3>
                    <hr>
                    <ul>
                        <li><a href="profile_dash.php">Dashboard</a></li>
                        <li><a href="profile_view_profile.php">View Profile</a></li>
                        <li><a href="profile_edit_profile.php">Edit Profile</a></li>
                        <li><a href="">Change Profile Picture</a></li>
                        <li><a href="">Change Password</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>                
                </td>
                <td>
                    Name : <input type="text" name="pname" id="">  <br>
                    Email : <input type="text" name="pemail">  <br>
                    Gender : <input type="radio" name="pgen" id="" value="Male">Male
                            <input type="radio" name="pgen" id="" value="Female">Female
                            <input type="radio" name="pgen" id="" value="Other">Other   
                    <br>
                    Date Of Birth : <input type="date" name="pdob" id="">  <br>

                    <input type="submit" name="submit" id="">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

    if(isset($_GET['msg']))
    {
        if($_GET['msg'] == 'wrong_data')
        {
            echo '<h1>Please fill up all the form </h1>';
        }
    }

?>

<?php

    include_once('footer.html');
?>
