<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iYell社員管理システム</title>
</head>
<body>
    <table border="2" align="center">
        <tr>
            <th>ID</th>
            <th>社員番号</th>
            <th>氏名</th>
            <th>部署</th>
            <th>性別</th>
            <th><a href="register.php">登録</a></th>
        </tr>
        <?php
            require_once "conectdb.php";
            $stmt = $conn->query("SELECT * FROM 社員管理システム");
            while ($rows = $stmt->fetch()) {
        ?>
        <tr>
            <td><a href="detail.php?ID=<?php echo $rows["ID"] ?>"><?php echo $rows["ID"] ?></a></td>
            <td><?php echo $rows["社員番号"] ?></td>
            <td><?php echo $rows["氏名"] ?></td>
            <td><?php echo $rows["部署"] ?></td>
            <td><?php echo $rows["性別"] ?></td>
            <td><a href="edit.php?ID=<?php echo $rows["ID"] ?>">編集</a>/ <a href="delete.php?ID=<?php echo $rows["ID"] ?>">削除</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

