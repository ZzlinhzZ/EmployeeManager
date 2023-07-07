<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iYell社員管理システム</title>
</head>
<body>
    <?php
        require_once("conectdb.php");
        if(isset($_GET["ID"])){
            $id = $_GET["ID"];
        }
        $stmt = $conn->query("SELECT * FROM 社員管理システム WHERE ID = $id");
        // $conn->exec($sql);
        while ($rows = $stmt->fetch()) {
    ?>
    <center><b>iYell社員管理システム</center>
    <table style="width:20%"align="center">
        <tr>
            <th>ID </th>
            <th><?php echo $rows["ID"] ?></th>
        </tr>
        <tr>
            <th>社員番号 </th>
            <th><?php echo $rows["社員番号"] ?></th>
        </tr>
        <tr>
            <th>氏名</th>
            <th><?php echo $rows["氏名"] ?></th>
        </tr>
        <tr>
            <th>部署 </th>
            <th><?php echo $rows["部署"] ?></th>
        </tr>
        <tr>
            <th>性別 </th>
            <th><?php echo $rows["性別"] ?></th>
        </tr>
        <?php
            require_once "conectdb.php";
            $stmt = $conn->query("SELECT * FROM 社員管理システム");
            while ($rows = $stmt->fetch()) {
        ?>

        <?php } ?>
    </table>

    <?php } ?>
</body>
</html>