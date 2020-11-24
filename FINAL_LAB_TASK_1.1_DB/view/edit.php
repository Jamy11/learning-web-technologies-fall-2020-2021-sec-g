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
                <input type="text" name="username" id="">
            </td>
        </tr>


        <tr>
            <td>
                E-mail :
            </td>
            <td>
                <input type="text" name="username" id="">
            </td>
        </tr>

        <tr>
            <td>
               <input type="submit" value="Change Data">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </tr>
        
    </fieldset>
    </table>
    
</form>

</center>


<?php

$value =$_GET['msg'];
require_once('../db/db.php');
$conn = getconnection();
UPDATE CUSTOMERS
SET ADDRESS = 'Pune'
WHERE ID = 6
$sql = "select id from user where id={$value}";

$result = mysqli_query($conn , $sql);
$data = mysqli_fetch_assoc($result);
//print_r($_GET); 

//echo $value;
echo $data['id'];
if(isset($_POST['submit']))
{
    if(count($data['id'])> 0)
    {
        echo 'connction stablished';
    }
    else
    {
        echo 'wrong data';
    }
}

?>