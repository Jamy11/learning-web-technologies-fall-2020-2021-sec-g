<?php
include_once('header.html');
?>

<?php

    if(isset($_GET['msg']))
    {
        if($_GET['msg']=='null_name' || $_GET['msg']=='invalid_name' || $_GET['msg']=='null_email' || $_GET['msg']=='style_error' || $_GET['msg']=='null_user_name' || $_GET['msg']=='wrong_pass' || $_GET['msg']=='null_gen' || $_GET['msg']=='null_dob')
        {
            echo "Please fill out the form".$_GET['msg'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method='POST' action="registrationcheck.php">
        <fieldset>
            <legend>Registration</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name='user_name'></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td>Confirm password</td>
                    <td><input type="password" name="con_pas" id=""></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gen" id="" value="Male">Male
                            <input type="radio" name="gen" id="" value="Female">Female
                            <input type="radio" name="gen" id="" value="Other">Other
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date Of Birth</legend>
                            <input type="date" name="dob" id="">
                        </fieldset>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" id="">
                        <button type="reset">Reset</button>
                    </td>

                </tr>
                
            </table>
        </fieldset>
    </form>
</body>
</html>



<?php

    include_once('footer.html');
?>

