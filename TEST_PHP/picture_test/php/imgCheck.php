<?php

    //echo $_FILES['mypic']['name'];
    //print_r($_FILES);

    if(isset($_FILES['mypic']))
    {
        $mydir = '../assets/'.$_FILES['mypic']['name'];
        $src = $_FILES['mypic']['tmp_name'];

        if(move_uploaded_file($src,$mydir))
        {
                echo 'Done';
        }
        else
        {
            echo 'Failed';
        }
    }
    else{
        echo 'Invalid image';
    }



?>