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
    <b>iYell社員管理システム
    <table>
        <tr>
            <th >ID </th>
            <th><?php echo $rows["ID"] ?></label></th>
        </tr>
        <tr>
            <th>社員番号 </th>
            <th><?php echo $rows["社員番号"] ?></label></th>
        </tr>
        <tr>
            <th>氏名</th>
            <th><?php echo $rows["氏名"] ?></label></th>
        </tr>
        <tr>
            <th>部署 </th>
            <th><?php echo $rows["部署"] ?></label></th>
        </tr>
        <tr>
            <th>性別 </th>
            <th><?php echo $rows["性別"] ?></label></th>
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