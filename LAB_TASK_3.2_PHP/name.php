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
            <input type="text" name="name" id=""> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $n = $_POST['name'];

        if(!empty($n))
        {
            if(strlen($n)>1)
            {
                if($n[0]>='A' && $n[0]<='z')
                {
                    $k = str_split($n);
                    foreach ($k as $ks)
                    {
                        if(($ks>='A' && $ks<='z') || $ks =='.' || $ks == '-')
                        {
                            echo "$ks";
                        }
                        else
                        {
                          break;
                        }
                    }
                }
                else
                {
                    echo "Please use 1st letter betweeen A-z";
                }

            }
            else
            {
                echo 'Please use at least 2 words';
            }
            

        }
        else
        {
            echo "Please input your name";
        }  
    }

?>