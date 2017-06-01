<html>
    <head>
        <title>Таблицы базы данных сайта</title>
    </head>
    <body>
        <h3>Добавление новой таблицы в базу данных</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="tableName" placeholder="Введите имя таблицы"/>
            <input type="submit" value="Добавить" />
        </form>
        <a href="list.php">Список таблиц</a>
    </body>
</html>

<?php
require 'connectDb.php';
if (isset($_POST['tableName'])) {
    $tableName = $_POST['tableName'];
    $array = array("tableName" => $tableName);
    $sql = "CREATE TABLE `" . $tableName . "` (firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL)";
    $stm = $pdo->prepare($sql);
    $result = $stm->execute($array);
    echo '<br />';
    echo '<br />';
    if ($result == true) {
        echo 'Таблица создана';
    } else {
        echo 'Error';
    }
}