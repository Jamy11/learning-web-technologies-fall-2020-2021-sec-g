<?php

    if(isset($_POST['login']))
    {

        if(!empty($_POST['uid']) &&  !empty($_POST['upas']))
        {

            $uid=$_POST['uid'];
            $upas=$_POST['upas'];

            $myfile = fopen('log.txt', 'r');
            //$data = fread($myfile, filesize('test.txt'));
            //$data = fgets($myfile);
            // /echo $data;
            
            $i =0;
            while($data = fgets($myfile)){
                $test[i] = explode(" ",$data);
                echo $test . "<br>";
                $i++;
            }
        }
        else {
            echo "fill";
        }
    
    }

?>
