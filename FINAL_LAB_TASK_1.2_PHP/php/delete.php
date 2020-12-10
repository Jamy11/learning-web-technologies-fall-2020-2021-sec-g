<?php



require_once('../model/userService.php');
$value = $_GET['msg'];

$status = deleteUser($value);

    if($status)
    {
        header('location: ../view/home.php');
    }
    else
    {
        echo 'error';
    }
?>