<?php

    //sleep(3);
    //$val = $_GET['myname'];

    require_once('db.php');

    //echo 'registration su';
   // echo $_POST['email'];
    if(isset($_POST['email']))
    {
        //echo $_POST['email'];
        if(checkUniqe($_POST['email']))
        {
            echo "exist";
            
        }
    }

    if(isset($_POST['data']))
    {
        if(insertionEmail($_POST['data']))
        {
            echo 'Registered';
        }
    }

?>