
<?php
	include('header.php');
	require_once('../model/userService.php');
	$userlist = getAllUser();

?>


<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>Welcome home, </h1>
	<a href="create.php">Create New User</a> |
	<a href="profile.php">Profile</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>

		<?php for($i=0; $i< count($userlist); $i++){ 
			$un = $userlist[$i]['username'];
			?>

			<tr>
				<td><?=$userlist[$i]['e_name']?></td>
				<td><?=$userlist[$i]['com_name']?></td>
				<td><?=$userlist[$i]['con_no']?></td>
				<td><?=$userlist[$i]['username']?></td>
				<td><?=$userlist[$i]['password']?></td>

				<td><a href="edit.php?msg=<?php echo urlencode($un)?>">Edit</a></td>
				<td><a href="../php/delete.php?msg=<?php echo urlencode($un)?>">Delete</a></td>
			</tr>
	<?php } ?>

	</table>


</body>
</html>


