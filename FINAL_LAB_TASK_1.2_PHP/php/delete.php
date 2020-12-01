<?php

// if(!defined('Delete')) 
// {
//     echo '<h1>';
//    die('Direct access not permitted');
//    echo '</h1>';
// }

require_once('../db/db.php');

$conn = getConnection();
$value = $_GET['msg'];
$sql = "DELETE FROM user WHERE id='$value'";
mysqli_query($conn, $sql);
$conn->close();
header('location: ../view/home.php');
exit;

?>