<?php
require 'connectDb.php';
$tableName = $_GET['tableName'];
$oldNameColumn = $_GET['oldNameColumn'];
$newNameColumn = $_GET['newNameColumn'];
$newNameQuery = $pdo->query ('ALTER TABLE `' . $tableName . '` CHANGE `' . $oldNameColumn . '` `' . $newNameColumn . '` INT');

echo 'Имя столбца изменено на ' . $newNameColumn;echo '<br />';
echo "<a href='tableDetails.php?table=" . $tableName . "'>К таблице</a>";