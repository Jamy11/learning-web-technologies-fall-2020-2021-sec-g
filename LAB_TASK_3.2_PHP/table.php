<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persone Profile</title>
</head>
<body>
    <table border="1">
        <form method="POST" action="">
            <tr>
                <td colspan="2">
                   <h1>Persone Profile</h1> 
                </td>
            </tr>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="name" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <input type="radio" name="gender"  > Male 
                    <input type="radio" name="gender"  > Female
                    <input type="radio" name="gender"  > other <br>
                </td>
            </tr>
            <tr>
                <td>
                    Date Of Birth
                </td>
                <td>
                    <input type="date" name="dob"  > <br>
                </td>
            </tr>
            <tr>
                <td>
                    Blodd Group
                </td>
                <td>
                    <select name="blood_group" >
                        <option value="" ></option>
                        <option value="A+" >A+</option>
                        <option value="B+">B+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Degree
                </td>
                <td>
                    <input type="checkbox" name="deg" value='SSC'> SSC
                    <input type="checkbox" name="deg" value='HSC'> HSC
                    <input type="checkbox" name="deg" value='BSC'> BSc 
                    <input type="checkbox" name="deg" value="MSC"> MSc 
                </td>
            </tr>
            <tr>
                <td>
                    Photo
                </td>
                <td>
                    <input type="file" name="file" id="">
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" name='submit'>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </form>
    </table>
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
                            echo '<br>'.'Cant be any number or special Char'.'<br>';
                            break;
                        }
                    }
                }
                else
                {
                    echo "Please use 1st letter betweeen A-z".'<br>';
                }

            }
            else
            {
                echo 'Please use at least 2 words'.'<br>';
            }
            

        }
        else
        {
            echo "Please input your name".'<br>';
        }

        echo '<br>';
        
        $em = $_POST['email'];
        if(!empty($em))
        {
            if(filter_var($em, FILTER_VALIDATE_EMAIL)==true)
            {
                echo 'Valid Email adress'.'<br>' .$em.'<br>';
            }
            else
            {
                echo "Please enter a valid email adress".'<br>';
            }
        }
        else{
            echo "Email cant be empty".'<br>';
        }

        if(isset($_POST['gender']))
        {
           $gen =  $_POST['gender'];
            echo $gen.'<br>';
        }
        else
        {
            echo "please Select gender".'<br>';
        }

        if(!empty($_POST['dob']))
        {
            $dobb = $_POST['dob'];
            echo $_POST['dob'].'<br>';

        }
        else{
            echo 'Please Set dob'.'<br>';
        }

        $bd = $_POST['blood_group'];

        if(!empty($bd))
        {
            echo $bd.'<br>';
        }
        else
        {
            echo 'Enter blood Group'.'<br>';
        }

        if(!empty($_POST['deg']))
        {
            $degg = $_POST['deg'];
            echo $degg.'<br>';
        }
        else
        {
            echo 'Seclect degree'.'<br>';
        }

        $file = $_POST['file'];
        if(!empty($file))
        {
            echo 'done'.'<br>';
        }
        else
            echo 'User id and picture cant be empty'.'<br>';

}


?>