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

            <input type="date" name="dob" id="" value="<?php
    if(isset($_POST['submit'])){
		$name = $_POST['dob'];
		echo $name;	
	}else{
		echo "Enter date";
	}
?>"> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
            
        </form>
        
    </fieldset>
</body>
</html>

