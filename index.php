<?php
include "db.php";
$table = getTable();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>aboba</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <?php
            for ($i=0; $i<count($table);$i++)
            {
                $linkID=$table[$i]["linkID"];
                $linkName=$table[$i]["linkName"];
                $link=$table[$i]["link"];
                echo "<tr><td>$linkID</td><td>$linkName</td><td>$link</td></tr>";
            }
            ?>
        </table>
    </body>
</html>