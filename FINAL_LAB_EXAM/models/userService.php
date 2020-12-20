<?php

    require_once('db.php');

    function validateUser($user){

		$conn = getConnection();
		$sql = "select * from emp where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row)> 0){
			return true; 
		}else{
			return false;
		}
	}
	
	function insertUser($user)
	{
		$conn = getConnection();
		$sql = "INSERT INTO emp
		VALUES ('{$user['e_name']}', '{$user['c_no']}', 
		'{$user['username']}', '{$user['password']}' )";

		$status = mysqli_query($conn,$sql);

		if($status)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
    
    

?>