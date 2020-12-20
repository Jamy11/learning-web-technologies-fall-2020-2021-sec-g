<center>
    <h1>Give Your Data Below</h1>
<br>
<br>
<br>
<form method="POST" action="../php/registrationCheck.php" onsubmit='return formvalidation()'>
    <fieldset style="width:30%">
        <legend> Edit Your Data</legend>
    
        <table>
            <tr>
                <td>
                    Employee Name :
                </td>
                <td>
                    <input type="text" name="e_name" id="ename">
                </td>
            </tr>           
            
            
            <tr>
                <td>
                    Contact No :
                </td>
                <td>
                    <input type="text" name="con_no" id="c_no">
                </td>
            </tr>

            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="un" id="un">
                </td>
            </tr>


            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="text" name="pass" id="pass">
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

<script src="../js/script.js"></script>
