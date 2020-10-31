<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Blood
        </legend>
        <form method="POST" >
            <select name="blood_group" >
                <option value="" ></option>
				<option value="A+" >A+</option>
				<option value="B+">B+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                
            </select> <br>
            <hr>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $bd = $_POST['blood_group'];

        if(!empty($bd))
        {
            echo $bd;
        }
        else
        {
            echo 'Enter blood Group';
        }
        
    }

?>