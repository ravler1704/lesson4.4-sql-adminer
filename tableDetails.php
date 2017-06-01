<?php
require 'connectDb.php';
$table = $_GET['table'];
echo '<h3>Таблица - ' . $table . '</h3>';
$result = $pdo->query ("
SELECT `COLUMN_NAME`, `COLUMN_TYPE`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='netology4_4'
AND `TABLE_NAME`='$table';");
$result = $result->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1"><tr>';
foreach ($result as $row) {
echo '<td>';
    echo 'Имя столбца - ' . $row['COLUMN_NAME'] .
        '<br />Тип столбца - ' . $row['COLUMN_TYPE'] .
        '<br /><a href="fieldRemove.php?table=' . $table . '&nameColumn=' . $row['COLUMN_NAME'] . ' ">Удалить столбец</a>' .
        '<br />Изменить тип на: '.
            '<a href="fieldRename.php?table=' . $table . '&nameColumn=' . $row['COLUMN_NAME'] . '&typeColumn=int ">INT</a>' . ' ' .
            '<a href="fieldRename.php?table=' . $table . '&nameColumn=' . $row['COLUMN_NAME'] . '&typeColumn=date ">DATE</a>' . ' ' .
            '<a href="fieldRename.php?table=' . $table . '&nameColumn=' . $row['COLUMN_NAME'] . '&typeColumn=text ">TEXT</a>' . ' ' .
        '<br />';
$oldNameColumn = $row['COLUMN_NAME'];
?>

<html>
    <head>
    </head>
    <body>
        <form action="nameRename.php" method="GET" enctype="multipart/form-data">
            <input type='text' name='newNameColumn' placeholder='Введите новое имя'/>
            <input type='hidden' name="tableName" value="<?php echo $table; ?>" />
            <input type='hidden' name="oldNameColumn" value="<?php echo $oldNameColumn; ?>" />
            <input type='submit' value='Изменить имя столбца'></form>
    </body>
</html>

<?php
echo '</td>';
}
echo '</tr></table>';echo "<br />";echo "<br />";
echo "<a href='list.php'>К списку таблиу</a>";echo "<br />";
echo "<a href='index.php'>Добавить таблиу</a>";



