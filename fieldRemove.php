<?php
require 'connectDb.php';
$tableName = $_GET['table'];
$column = $_GET['nameColumn'];
$result = $pdo->query ("ALTER TABLE `" . $tableName . "` DROP COLUMN `" . $column ."`");

if ($result == true) {
    echo 'Столбец удален';
} else {
    echo 'Error';
}

echo '<br />';
echo "<a href='tableDetails.php?table=" . $tableName . "'>К таблице</a>";