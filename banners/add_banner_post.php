<?php
session_start();
require '../db.php';
$errors = [];
$field_names = [
    'intro'=> "Field cannot be empty", 
    'name'=> 'Field cannot be empty', 
    'descrip'=> "Field cannot be empty",
    'link1'=> "Field cannot be empty",
    'link2'=> "Field cannot be empty",
    'link3'=> "Field cannot be empty",
    'link4'=> "Field cannot be empty",
    'button'=> "Field cannot be empty"
];

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
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $error_msg;
    }
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $error_msg;
    }
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
    $intro = $_POST['intro'];
    $name = $_POST['name'];
    $descrip = $_POST['descrip'];
    $link1 = $_POST['link1'];
    $link2 = $_POST['link2'];
    $link3 = $_POST['link3'];
    $link4 = $_POST['link4'];
    $button = $_POST['button'];

    $insert_banner = "INSERT INTO banners (intro, name, descrip, link1, link2, link3, link4, button) VALUES('$intro','$name','$descrip','$link1','$link2','$link3','$link4','$button')";
    $insert_banner_result = mysqli_query($db_connect, $insert_banner);
    $_SESSION['register_success'] = "Banner added successfully";
    header("location:add_banner.php");
    
}

else {
    echo "saasaas";
}

?>