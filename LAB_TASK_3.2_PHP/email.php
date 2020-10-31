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
    if(isset($_POST['submit']))
    {
        $em = $_POST['email'];
        if(!empty($em))
        {
            if(filter_var($em, FILTER_VALIDATE_EMAIL)==true)
            {
                echo 'Valid Email adress'.'<br>' .$em;
            }
            else
            {
                echo "Please enter a valid email adress";
            }
        }
        else{
            echo "Email cant be empty";
        }
    }
    
?>