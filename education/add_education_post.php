<?php

require '../db.php';
$year = $_POST['year'];
$course = $_POST['course'];
$bar = $_POST['bar'];

$insert_education = "INSERT INTO education(year, course, bar) VALUES('$year', '$course', '$bar')";
$insert_education_results = mysqli_query($db_connect, $insert_education);

header('location:add_education.php');


?>