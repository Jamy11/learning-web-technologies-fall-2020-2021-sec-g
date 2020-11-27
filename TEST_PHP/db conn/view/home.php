<?php
	include('header.php');
	require_once('../db/db.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>Welcome home,</h1>
	<a href="create.php">Create New User</a> |
	<a href="profile.php">Profile</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>
	<table border='1px'>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Type</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
			<?php
				$conn = getConnection();
				$sql = 'select * from user';
				$result = mysqli_query($conn,$sql);
				
				while($data = mysqli_fetch_assoc($result))
				{ $id = $data['id'];
					?>
		<tr>
			<td><?=$data['id']?> </td>
			<td><?=$data['username']?> </td>
			<td><?=$data['password']?> </td>
			<td><?=$data['email']?> </td>
			<td><?=$data['type']?> </td>
			<td><a href="edit.php?msg=<?php echo urlencode($id)?>">Edit</a></td>
			<td><a href="../php/delete.php?msg=<?php echo urlencode($id)?>">Delete</a></td>
		</tr>

			<?php
				} 
				?>


				

			

	</table>
</body>
</html>