<?php
session_start();
require '../db.php';
$id = $_GET['id'];
$delete_user = "DELETE FROM users WHERE id =$id";
$delete_user_result = mysqli_query($db_connect, $delete_user);

$_SESSION['delete'] = "User deleted successfully";
header('location:user-all.php');
?>