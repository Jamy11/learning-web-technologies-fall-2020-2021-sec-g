<?php
    //session_start();

    if(!isset($_COOKIE['isValid']))
    {
        header('location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Jamy</h1>
    <a href="logout.php">logout</a>
</body>
</html>