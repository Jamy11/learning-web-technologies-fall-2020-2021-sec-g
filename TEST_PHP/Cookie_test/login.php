<?php

	if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "invalid_user"){
			echo "username/password not valid...";
		}

		if($_GET['msg'] == 'null_un'){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_pass"){
			echo "Password field is empty...";
        }
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="logCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>