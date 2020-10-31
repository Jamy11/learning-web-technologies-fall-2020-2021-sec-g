<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Id</title>
</head>
<body>
    <fieldset>
        <legend>Profile Picture</legend>
        <form method="POST" action="uid.php">
            User ID : <input type="number" name='uid'> <br>
            Picture <input type="file" name="file">
            <hr>
            <input type="submit" name="submit">
            
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $uid = $_POST['uid'];
        $file = $_POST['file'];
        if(!empty($uid) && !empty($file))
        {
            echo 'done';
        }
        else
            echo 'User id and picture cant be empty';
    }

?>