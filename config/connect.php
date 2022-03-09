<?php
$connect = mysqli_connect('crud', 'root', '', 'crud');

if (!$connect) {
    die('Error connect to database!');
}