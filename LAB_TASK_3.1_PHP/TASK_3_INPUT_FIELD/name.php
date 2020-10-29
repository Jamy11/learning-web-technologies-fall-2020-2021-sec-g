<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Name</legend>
        <form method="POST" action="">
            <input type="text" name="name" id="" value="<?php
    if(isset($_POST['submit'])){
		$name = $_POST['name'];
		echo $name. "<br>";	
	}else{
		echo "enter a name";
	}
?> "> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
        </form>
    </fieldset>
</body>
</html>



