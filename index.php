<?php
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <main class = "main">
        <table class = "table">
            <tr>
                <th class = "table__cell table__cell_type_title">ID</th>
                <th class = "table__cell table__cell_type_title">Имя</th>
                <th class = "table__cell table__cell_type_title">Фамилия</th>
                <th class = "table__cell table__cell_type_title">Город</th>
            </tr>

            <?php
                $users = mysqli_query($connect, "SELECT * FROM `users`");
                $users = mysqli_fetch_all($users);

                foreach ($users as $user) {
                    ?>
                        <tr>
                            <td class = "table__cell"><?= $user[0] ?></td>
                            <td class = "table__cell"><?= $user[1] ?></td>
                            <td class = "table__cell"><?= $user[2] ?></td>
                            <td class = "table__cell"><?= $user[3] ?></td>
                            <td class = "table__cell table__cell_type_change">
                                <a class = "table__cell_type_link" href = "update.php?id=<?= $user[0] ?>">Редактировать</a>
                            </td>
                            <td class = "table__cell table__cell_type_change">
                                <a class = "table__cell_type_link" href = "vendor/delete.php?id=<?= $user[0] ?>">Удалить</a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </table>
        <h3 class = "form__title">Добавить пользователя в базу данных</h3>
        <form action = "vendor/create.php" class = "form" method = "post">
            <div class = "form-input-list">
                <input class = "form__input" type = "text" name = "name" placeholder = "Имя">
                <input class = "form__input" type = "text" name = "surname" placeholder = "Фамилия">
                <input class = "form__input" type = "text" name = "city" placeholder = "Город">
            </div>
            <button class = "form__button" type = "submit">Добавить</button>
        </form>
    </main>
</body>
</html>
