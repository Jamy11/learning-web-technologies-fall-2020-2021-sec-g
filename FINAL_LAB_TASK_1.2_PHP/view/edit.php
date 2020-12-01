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


            </tr>           <tr>
                <td>
                    Contact No :
                </td>
                <td>
                    <input type="text" name="con_no" id="">
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

$value =$_GET['msg'];


require_once('../model/userService.php');



// $result = mysqli_query($conn , $sql);
// $data = mysqli_fetch_assoc($result);
$un = $_GET['msg'];



?>