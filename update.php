<?php
    require_once 'config/connect.php';
    $user_id = $_GET['id'];
    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");
    $user = mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Редактировать</title>
</head>
<body>
    <main class = "main">
        <h3 class = "form__title">Редактировать данные о пользователе</h3>
        <form action = "vendor/update.php" class = "form" method = "post">
            <div class = "form-input-list">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <input class = "form__input" type = "text" name = "name" value="<?= $user['name'] ?>" placeholder = "Имя">
                <input class = "form__input" type = "text" name = "surname" value="<?= $user['surname'] ?>" placeholder = "Фамилия">
                <input class = "form__input" type = "text" name = "city" value="<?= $user['city'] ?>" placeholder = "Город">
            </div>
            <button class = "form__button" type = "submit">Изменить</button>
        </form>
    </main>
</body>
</html>