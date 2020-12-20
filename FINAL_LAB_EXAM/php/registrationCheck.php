<?php

require_once('../models/userService.php');

if(isset($_POST['submit'])){
    $user = ['e_name'=>  $_POST['e_name'],
    'c_no'=> $_POST['con_no'], 
    'username'=> $_POST['un'], 'password'=>$_POST['pass'] ];

    $status = insertUser($user);

    if($status)
    {
        header('location: home.php');
    }
    else
    {
        echo 'Wrong data';
    }
}

else{

}

?>