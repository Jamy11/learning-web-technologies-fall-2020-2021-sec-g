
<?php

//print_r($_GET);
echo $_GET['abc'];
?>


<!DOCTYPE html>
<html>
<head>
<title>Test page</title>
</head>
<body>
<h1>Data:</h1>
</body>
</html>
if($_GET['msg'] == "invalid_user"){
			echo "username/password not valid...";
		}

		if($_GET['msg'] == "null_un"){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_pass"){
			echo "Password field is empty...";
        }
        


        ////
        
        $u = $_POST['Username'];
        $p = $_POST['Password'];
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
				header('location: home.html');

			}else{
				//echo "invalid user!please register...";
				header('location: login.php?msg=invalid_user');
			}
		}