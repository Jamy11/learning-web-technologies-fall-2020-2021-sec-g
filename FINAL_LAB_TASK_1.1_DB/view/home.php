
<?php
	include('header.php');
	require_once('../db/db.php');
	define('Delete', TRUE);

	$conn = getConnection();
	$sql = 'select * from user';
	$result = mysqli_query($conn, $sql);
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

	<?php while($data = mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['username']?></td>
				<td><?=$data['password']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['type']?></td>
				<?php $id = $data['id'] ?>;
				<td><a href="edit.php?msg=<?php echo urlencode($id)?>">Edit</a></td>
				<td><a href="../php/delete.php?msg=<?php echo urlencode($id)?>">Delete</a></td>
			</tr>
	<?php } ?>

	</table>


</body>
</html>


