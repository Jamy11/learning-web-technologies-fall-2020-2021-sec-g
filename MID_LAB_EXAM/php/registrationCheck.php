<?php
    session_start();

    if(isset($_POST['submit']))
    {

        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
        }
        else
        {
            $id ='';
        }
        if(!empty($_POST['password'] && !empty($_POST['con_pas'])))
        {
            if($_POST['password'] == $_POST['con_pas'] )
            {
                $pas = $_POST['password'];
            }
            else
            {
                $pas ='';
            }
        }

        if(!empty($_POST['name']))
        {
            $name = $_POST['name'];
        }
        else
        {
            $name='';
        }

        if(!empty($_POST['user_t']))
        {
            $user = $_POST['user_t'];
        }
        else
        {
            $user='';
        }

        if($id != '' && $pas !='' && $name!='' && $user !='' )
        {
            $_SESSION['id'] = $id;
            $_SESSION['pas'] = $pas;
            $_SESSION['name'] = $name;
            $_SESSION['user'] =$user;
            

            $file = 'log.txt';
            $current = file_get_contents($file);
            $add = $id.' '.$pas.' '.$name.' '.$user.'\n';
            $current .= $add;
            file_put_contents($file, $current);
            echo 'done';
        }
        else
        {
            echo 'fill';
        }

    }
    else
    {
        echo 'submit';
    }
    

    //fclose($myfile);
    
    //$file = 'log.txt';
    // Open the file to get existing content
    //$current = file_get_contents($file);
    // Append a new person to the file
    //$current .= "John Smith\n";
    // Write the contents back to the file
    //ile_put_contents($file, $current);

?>