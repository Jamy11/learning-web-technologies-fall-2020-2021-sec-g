<?php
    //session_start();

    if(isset($_POST['submit']))
    {

        $u = $_POST['username'];
        $p = $_POST['password'];
        if(empty($u))
        {
            header('location: login.php?msg=null_un');
        }
        elseif(empty($p))
        {
            header('location: login.php?msg=null_pass');
        }
        else{
			if($u == $p){
                //echo "valid user!";
                //$_SESSION['isValid'] = 'true';
                setcookie('isValid','true',time()+3600,'/');
				header('location: home.php');

			}else{
				//echo "invalid user!please register...";
				header('location: login.php?msg=invalid_user');
			}
		}
        
    }
    else{
        header('location: login.php');
    }
    


?>