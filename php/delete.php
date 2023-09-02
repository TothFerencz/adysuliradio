<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

include '../config/db.php';

if (isset($_GET['user_id'])) {
	$user_id = $_GET['user_id'];
	$sql="DELETE FROM users WHERE user_id=$user_id;";
	header('location: manage.php');

    $row = $con->query($sql);
}
?>