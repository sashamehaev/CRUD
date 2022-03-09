<?php
require_once '../config/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$city = $_POST['city'];

mysqli_query($connect, "UPDATE `users` SET `name` = '$name', `surname` = '$surname', `city` = '$city' WHERE `users`.`id` = '$id'");
header('Location: /');