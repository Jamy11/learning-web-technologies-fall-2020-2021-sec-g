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
    
    

?>