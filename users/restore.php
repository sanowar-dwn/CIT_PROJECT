<?php
session_start();
require '../db.php';
$id = $_GET['id'];
$restore_user = "UPDATE users SET status = 0 WHERE id = $id";
$restore_user_result = mysqli_query($db_connect, $restore_user);

$_SESSION['restore'] = "User restored successfully";
header('location:user-all.php');
?>