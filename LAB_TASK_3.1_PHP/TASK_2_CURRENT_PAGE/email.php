<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Email</legend>
        <form method="POST" action="">
            <input type="text" name="email" id=""> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
        </form>
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
		$name = $_POST['email'];
		echo $name. "<br>";	
	}else{
		echo "Enter a Email";
	}
?>