<?php
require_once('conn.php');
$id = $_GET['ID'];

$sqlCommandDelete = "DELETE FROM `cars` WHERE car_id=$id";
$query = mysqli_query($connection, $sqlCommandDelete);
header('Location: ../admin.cars.php');
?>
