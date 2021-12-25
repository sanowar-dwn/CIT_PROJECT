<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$delete_user = "UPDATE users SET status = 1 WHERE id =$id";
$delete_user_result = mysqli_query($db_connect, $delete_user);

$_SESSION['trash'] = "User moved to trash";
header('location:user-all.php');

?>