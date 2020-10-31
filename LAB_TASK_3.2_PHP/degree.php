<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Degree</legend>
        <form method="POST" >
            <input type="checkbox" name="deg" value='SSC'> SSC
			<input type="checkbox" name="deg" value='HSC'> HSC
            <input type="checkbox" name="deg" value='BSC'> BSc 
            <input type="checkbox" name="deg" value="MSC"> MSc 
            <br>
            <hr>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['deg']))
        {
            $degg = $_POST['deg'];
            echo $degg;
        }
        else
        {
            echo 'Seclect degree';
        }
    }
    

?>