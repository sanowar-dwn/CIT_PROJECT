<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$delete_banner = "DELETE from banners WHERE id = $id";
$delete_banner_result = mysqli_query($db_connect, $delete_banner);
$_SESSION['success'] = "Deleted successfully";
header('location:all_banner.php');
?>