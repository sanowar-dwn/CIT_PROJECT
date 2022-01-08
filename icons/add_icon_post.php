<?php
session_start();
require '../db.php';

$error = [];
$field_names = ['code'=>'This field cannot be empty', 'name'=> 'This field cannot be empty'];

foreach($field_names  as $field_name => $error_msg){
    if(empty($_POST[$field_name])){
        $error[$field_name] = $error_msg;
    }
    if(empty($_POST[$field_name])){
        $error[$field_name] = $error_msg;
    }
}
if(count($error)==0){
    $code = $_POST['code'];
    $name = $_POST['name'];

    $insert_icon = "INSERT INTO icon (code, name) VALUES ('$code', '$name')";
    $insert_icon_result = mysqli_query($db_connect, $insert_icon);
    
    $_SESSION['register_success'] = "Icon added successfully";
    header('location:add_icon.php');
}

else{
    header('location:add_icon.php');
}
?>