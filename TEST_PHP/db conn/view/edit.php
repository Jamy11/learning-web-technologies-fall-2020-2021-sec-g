<center>
    <h1>Give Your Data Below</h1>
<br>
<br>
<br>
<form method="POST" action="">
    <fieldset style="width:30%">
        <legend> Edit Your Data</legend>
    
        <table>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="username" id="">
                </td>
            </tr>


            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="text" name="pass" id="">
                </td>
            </tr>


            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input type="text" name="email" id="">
                </td>
            </tr>

            <tr>
                <td>
                <input type="submit" name='submit' value="Change Data">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
            
        
        </table>
    </fieldset>
    
</form>

</center>


<?php

    $value = $_GET['msg'];


if(isset($_POST['submit']))
{
    require_once('../db/db.php');
    $conn = getConnection();
    $username = $_POST['username'];
    $pas = $_POST['pass'];
    $email = $_POST['email'];   
    if($username!= '' && $pas!='' && $email!='')
    {

        $sql = "UPDATE user
        SET username = '$username', password = '$pas', email= '$email'
        WHERE id = '$value'";
        mysqli_query($conn,$sql);
        $conn->close();
        header('location: home.php');
        exit;
    }
    else
    {
        echo 'Fill the form';
    }
}

?>