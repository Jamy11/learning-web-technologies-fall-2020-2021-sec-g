<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $name='';
        if(!empty($_POST['name']))
        {
            $name = $_POST['name'];
        }
        else{
            header('location: registration.php?msg=null_name');
        }

        $email = $_POST["email"];
        $atSign = strpos($email, "@");
        $lastDot = strripos($email, ".");
        if(!empty($_POST["email"]))
        {
            if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
            {
                $email = $_POST['email'];
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
        
        
        $n = $_POST['user_name'];
        $j ='';
        $count;
        if(!empty($n))
        {
            if(strlen($n)>1)
            {
                if($n[0]>='A' && $n[0]<='z')
                {
                    $count = strlen($n);
                    $k = str_split($n);
                    foreach ($k as $ks)
                    {
                        if(($ks>='A' && $ks<='z') || $ks =='.' || $ks == '-')
                        {
                            $j = $j.$ks;
                        }
                        else
                        {
                            echo '<br>'.'Cant be any number or special Char';
                            $j = '';
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
        echo $j.'<br>'; 
        
        $password='';
        if($_POST['password']==$_POST['con_pas'])
        {
            $password = $_POST['password'];
        }
        else
        {
            echo 'wrong password';
        }

        if(isset($_POST['gen']))
        {
           $gen =  $_POST['gen'];
            echo $gen;
        }
        else
        {
            echo "please Select gender";
        }

        if(!empty($_POST['dob']))
        {
            $dobb = $_POST['dob'];
            echo $_POST['dob'];

        }
        else{
            echo 'Please Set dob';
        }

    }

    else
    {

    }



?>