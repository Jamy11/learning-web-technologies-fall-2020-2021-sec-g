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
            <input type="checkbox" name="deg"> SSC
			<input type="checkbox" name="deg"> HSC
            <input type="checkbox" name="deg"> BSc 
            <input type="checkbox" name="deg"> MSc 
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
        echo $_POST['deg'];
    }
    else
        echo 'Enter Degree';

?>