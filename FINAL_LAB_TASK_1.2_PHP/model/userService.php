<?php

    require_once('db.php');

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

		$conn = getConnection();
        $sql = "update user set e_name='{$user[0]}', 
        com_name='{$user[1]}', con_no='{$user[2]}', 
        password='{$user[4]} WHERE id = '{$user[3]}'";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}


?>