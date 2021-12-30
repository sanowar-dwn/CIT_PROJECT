<?php

require '../db.php';
$id = $_GET['id'];

$select_banner = "SELECT * FROM banners WHERE id = $id";
$select_banner_result = mysqli_query($db_connect, $select_banner);
$after_assoc = mysqli_fetch_assoc($select_banner_result);

if($after_assoc['status'] == 1){
    $deactive_banner = "UPDATE banners SET status = 0 WHERE id = $id";
    $deactive_banner_result = mysqli_query($db_connect, $deactive_banner);
    header('location:all_banner.php');
}

else {
    $deactive_all_banner = "UPDATE banners SET status = 0";
    $deactive_all_banner_result = mysqli_query($db_connect, $deactive_all_banner);
    
    $active_banner = "UPDATE banners SET status = 1 WHERE id = $id";
    $active_banner_result = mysqli_query($db_connect, $active_banner);
    header('location:all_banner.php');
}

?>