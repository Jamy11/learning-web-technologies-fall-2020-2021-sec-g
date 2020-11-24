<?php
	
	require_once('../db/db.php');

	if(isset($_POST['submit'])){

		//declaration
		$uname 	= $_POST['username'];
		$pass 	= $_POST['password'];

		//validation
		if($uname == ""){
			
			header('location: ../view/login.php?msg=null_username');

		}else if(empty($pass)){
			
			header('location: ../view/login.php?msg=null_password');

		}else{

			$conn = getConnection();
			$sql = "select * from user where username='$uname' and password='$pass'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				setcookie('isValid', 'true', time()+3600, '/');
				header('location: ../view/home.php');
			}else{
				header('location: ../view/login.php?msg=invalid_user');
			}
		}
	}else{
		header('location: login.php');
	}
?>