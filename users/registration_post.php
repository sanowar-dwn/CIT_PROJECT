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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_email = "SELECT COUNT(*) as email_exist FROM users where email = '$email'";
    $check_email_result = mysqli_query($db_connect, $check_email);
    $after_assoc_email_exist = mysqli_fetch_assoc($check_email_result);
    if($after_assoc_email_exist['email_exist']==1){
        $_SESSION['exist_email'] = "This email is already in-use";
        header('location:user-add.php');

    }
    else{   
       $insert_users = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
       $insert_users_result = mysqli_query($db_connect, $insert_users);
       $_SESSION['register_success'] = "User added successfully";
       header('location:user-add.php');
    }
}
else{
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['blank_error'] = $errors;
    header('location:user-add.php');
}

?>