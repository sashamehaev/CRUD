<?php
require_once '../config/connect.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$city = $_POST['city'];

mysqli_query($connect,"INSERT INTO `users` (`id`, `name`, `surname`, `city`) VALUES (NULL, '$name', '$surname', '$city')");
header('Location: /');