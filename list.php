<?php
require 'connectDb.php';
echo '<h3>Список таблиц базы данных сайта:</h3>';
$sql = 'SHOW TABLES';
$stm = $pdo->prepare($sql);
$result = $stm -> execute();
$printTable = $pdo->query("SHOW TABLES");
$table = $printTable->fetchAll(PDO::FETCH_COLUMN);

foreach ($table as $value) {
    echo 'Таблица - <a href="tableDetails.php?table=' . $value . '">' . $value . '</a><br />';
}

echo '<br />';echo '<br />';echo '<br />';
echo "<a href='index.php'>Добавить новую таблицу</a>";

