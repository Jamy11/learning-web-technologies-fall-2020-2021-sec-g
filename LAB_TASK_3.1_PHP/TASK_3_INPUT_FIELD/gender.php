<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Gender</legend>
        <form method="POST" >
            <input type="radio" name="gender"  value="<?php
    if(isset($_POST['submit']))
    {
        echo $_POST['gender'];
    }
    else
    {
        echo 'Enter Gender';
    }
?>"> Male 
			<input type="radio" name="gender"  value="<?php
    if(isset($_POST['submit']))
    {
        echo $_POST['gender'];
    }
    else
    {
        echo 'Enter Gender';
    }
?>"> Female
            <input type="radio" name="gender" selected value="<?php
    if(isset($_POST['submit']))
    {
        echo $_POST['gender'];
    }
    else
    {
        echo 'Enter Gender';
    }
?>"> other <br>
            <hr>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </fieldset>
</body>
</html>

