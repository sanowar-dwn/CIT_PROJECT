<?php
session_start();
require '../db.php';

$errors = [];
$field_names = ['about' => 'This field cannot be blank'];

foreach ($field_names as $field_name => $error_msg){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $error_msg;
    }
}

if(count($errors)==0){
    $about = $_POST['about'];
    $insert_about = "INSERT INTO about (about) VALUES ('$about')";
    $insert_about_result = mysqli_query($db_connect, $insert_about);
    $_SESSION['register_success'] = "About added successfully";
    header('location:add_about.php');
}
else{
    $_SESSION['blank_error'] = $errors;
    header('location:add_about.php');
}
?>