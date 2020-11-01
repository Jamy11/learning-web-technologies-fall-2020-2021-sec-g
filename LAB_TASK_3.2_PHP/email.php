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
    $email = $_POST["email"];
    $atSign = strpos($email, "@");
    $lastDot = strripos($email, ".");


    if(!empty($_POST["email"]))
    {
        if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
        {
            echo "Your email is $email";
        }
        else
        {
            echo "Invalid email!";
        }

    }
    else
    {
        echo "Email field is empty! Please enter your email!";
    }
    

    
}


?>