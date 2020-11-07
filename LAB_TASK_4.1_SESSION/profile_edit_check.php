<?php
    session_start();
    if(isset($_SESSION['active']))
    {
        if(isset($_POST['submit']))
        {
            $name='';
            if(!empty($_POST['pname']))
            {
                $name = $_POST['pname'];
            }
            else{
                $name='';
            }

            $email = $_POST["pemail"];
            $atSign = strpos($email, "@");
            $lastDot = strripos($email, ".");
            if(!empty($_POST["pemail"]))
            {
                if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
                {
                    $email = $_POST['pemail'];
                }
                else
                {
                // echo "Invalid email!";
                //header('location: registration.php?msg=invalid_name');
                $email='';
                }
        
            }
            else
            {
                //echo "Email field is empty! Please enter your email!";
                //header('location: registration.php?msg=null_email');
                $email='';
            }


        if(isset($_POST['pgen']))
        {
           $gen =  $_POST['pgen'];
            //echo $gen;
        }
        else
        {
            //echo "please Select gender";
            //header('location: registration.php?msg=null_gen');
            $gen ='';
        }

        if(!empty($_POST['pdob']))
        {
            $dobb = $_POST['pdob'];
            //echo $_POST['dob'];

        }
        else{
            //echo 'Please Set dob';
            //header('location: registration.php?msg=null_dob');
            $dobb ='';
        }
        
        if($name!="" && $email!='' && $gen!='' && $dobb !='')
        {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['gen'] = $gen;
            $_SESSION['dob'] = $dobb;

            header('location: profile_dash.php');
        }
        else
        {
            header('location: profile_edit_profile.php?msg=wrong_data');
        }


        }
        else
        {
            header('location: profile_edit_profile.php');
        }
    }
    else
    {
        header('location: public.html');
    }
    

?>