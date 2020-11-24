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
            
           
            while($data = fgets($myfile)){
                $test = explode(" ",$data);
               
               if($_POST['uid'] == $test[0] && $_POST['upas'] == $test[1] )
               {
                $_SESSION['id'] = $test[0];
                $_SESSION['pas'] = $test[1];
                $_SESSION['name'] = $test[2];
                $_SESSION['user'] = $test[3];
                
                if($_SESSION['user']=="User")
                {
                    header('location: ../views/view_users.html');
                }

                else {
                    header('location: ../views/admin_home.html');
                }

                
               }
               
            }
                echo 'wrong user';
        }
        else 
        {
            echo "fill";
        }
    
    }

?>
