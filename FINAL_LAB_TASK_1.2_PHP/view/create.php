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
                    Employee Name :
                </td>
                <td>
                    <input type="text" name="e_name" id="">
                </td>
            </tr>           
            
            
            <tr>
                <td>
                    Company Name :
                </td>
                <td>
                    <input type="text" name="com_name" id="">
                </td>
            </tr>


            <tr>
                <td>
                    Contact No :
                </td>
                <td>
                    <input type="text" name="con_no" id="">
                </td>
            </tr>

            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="un" id="">
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
                <input type="submit" name='submit' value="Add Employee">
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
require_once('../model/userService.php');

if(isset($_POST['submit'])){
    $user = ['e_name'=>  $_POST['e_name'], 'com_name'=>$_POST['com_name'],
    'con_no'=> $_POST['con_no'], 
    'username'=> $_POST['un'], 'password'=>$_POST['pass'] ];

    $status = insertUser($user);

    if($status)
    {
        header('location: home.php');
    }
    else
    {
        echo 'Wrong data';
    }
}

else{

}
?>