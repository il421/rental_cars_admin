<?php
require_once('conn.php');
$id = $_GET['ID'];

$sqlCommandDelete = "DELETE FROM `users` WHERE user_id=$id";
$query = mysqli_query($connection, $sqlCommandDelete);
header('Location: ../admin.users.php');
?>
