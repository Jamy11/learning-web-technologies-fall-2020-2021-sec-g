<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Date Of Birth</legend>
        dd/mm/yyyy <br>

        <form method="POST">

            <input type="date" name="dob" id=""> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
            
        </form>
        
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['dob']))
        {
            $dobb = $_POST['dob'];
            echo $_POST['dob'];

        }
        else{
            echo 'Please Set dob';
        }
	}
?>