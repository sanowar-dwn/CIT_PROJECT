<?php

require '../db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$update_user = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=$id";
$update_user_result = mysqli_query($db_connect, $update_user);
header('location:user-edit.php?id=' . $id);
$_SESSION['edit-success'] = "edited succesfully";
?>