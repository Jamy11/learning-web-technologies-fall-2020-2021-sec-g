<?php

    require_once('db.php');

    function validateUser($user){

		$conn = getConnection();
		$sql = "select * from user where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row > 0){
			return true; 
		}else{
			return false;
		}
	}
    
    function getAllUser(){

		$conn = getConnection();
		$sql = "select * from user";

		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
    }

    
    function updateUser($user){

        // $user = ['e_name'=>  $_POST['e_name'], 'com_name'=>$_POST['con_no'],
        // 'con_no'=> $_POST['con_no'], 
        // 'username'=> $un, 'password'=>$_POST['pass'] ];

		$conn = getConnection();
        $sql = "UPDATE user SET e_name='{$user['usee_namername']}', 
        com_name='{$user['com_name']}', con_no='{$user['con_no']}', 
        password='{$user['pass']}' WHERE id = '{$user['username']}' ";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}


?>