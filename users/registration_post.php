<?php
session_start();
require '../db.php';

$errors = [];
$field_names = ['name'=>'Enter your name', 'email'=> 'Enter your mail', 'password'=> 'Enter a password'];

foreach($field_names as $field_name => $error_msg){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $error_msg;
    }
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $error_msg;
    }
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $error_msg;
    }
}

if(count($errors)==0){
    header('location:view.php');
}
else{
    $_SESSION['blank_error'] = $errors;
    header('location:user-add.php');
}

?>