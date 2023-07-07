<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iYell社員管理システム</title>
</head>
<body>
    <table style="width:50%" border="2" align="center">
        <tr>
            <th style="width:14%">ID</th>
            <th style="width:14%">社員番号</th>
            <th style="width:14%">氏名</th>
            <th style="width:30%">部署</th>
            <th style="width:14%">性別</th>
            <th style="width:14%"><a href="register.php">登録</a></th>
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
            <td><a href="edit.php?ID=<?php echo $rows["ID"] ?>">編集</a>/ <a href="delete.php?ID=<?php echo $rows["ID"]?>" onclick="return confirm('Are you really want to delete?')">削除</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

