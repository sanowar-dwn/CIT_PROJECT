<?php

require '../db.php';
$id = $_GET['id'];

$select_about = "SELECT * FROM about WHERE id = $id";
$select_about_result = mysqli_query($db_connect, $select_about);
$after_assoc = mysqli_fetch_assoc($select_about_result);

if ($after_assoc['status'] == 1) {
    $deactive_about = "UPDATE about SET status = 0 WHERE id = $id";
    $deactive_about_result = mysqli_query($db_connect, $deactive_about);
    header('location:all_about.php');
} else {
    $deactive_all_about = "UPDATE about SET status = 0";
    $deactive_all_about_result = mysqli_query($db_connect, $deactive_all_about);

    $active_about = "UPDATE about SET status = 1 WHERE id = $id";
    $active_about_result = mysqli_query($db_connect, $active_about);
    header('location:all_about.php');
}
