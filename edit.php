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
        while ($rows = $stmt->fetch()) {
    ?>
    <center><b>iYell社員管理システム</center>
    <form action="" method="post">
        <table align="center">
            <tr>
                <th >ID </th>
                <th><?php echo $rows["ID"] ?></th>
            </tr>
            <tr>
                <th>社員番号 </th>
                <th><input type="text" name="txt社員番号" value="<?php echo $rows["社員番号"]?>" required/></th>
            </tr>
            <tr>
                <th>氏名</th>
                <th><input type="text" name="txt氏名" value="<?php echo $rows["氏名"]?>" required/></th>
            </tr>
            <tr>
                <th>部署 </th>
                <th><select name="部署" style="width: 170px; height: auto;">
                    <?php if ($rows["部署"] == 'A' ) {
                        echo           
                        '<option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>' ;  
                    }else if ($rows["部署"] == 'B' ) {
                        echo           
                        '<option value="B">B</option>
                        <option value="A">A</option>
                        <option value="C">C</option>' ;  
                    }else{
                        echo           
                        '<option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>' ;  
                    }                     
                    ?>
                </select></th>
            </tr>
            <tr>
                <th>性別 </th>
                <th>
                    <input type="radio" name="性別" value="男" <?php if ($rows["性別"] == '男') echo 'checked' ?>>男
                    <input type="radio" name="性別" value="女"<?php if ($rows["性別"] == '女') echo 'checked' ?>>女 
                </th>
            </tr>
            <tr>
                <th><a href="index.php">一覧</a></th>
                <th><input type="submit" value="登録" name="登録"/></th>
            </tr>
        </table>
    </form>
    <?php } ?>
    <?php 
        require_once("conectdb.php");
        if (isset($_POST['登録'])) {
            $社員番号 = $_POST['txt社員番号'];
            $氏名 = $_POST['txt氏名'];
            $部署 = $_POST['部署'];
            $性別 = $_POST['性別'];   
            $sql = "UPDATE `社員管理システム` SET `社員番号` = '$社員番号', `氏名` = '$氏名', `部署` = '$部署', `性別` = '$性別' WHERE `社員管理システム`.`ID` = $id";
            if ($conn->exec($sql)) {
                echo "<script>alert('change successful!')</script>";
                header("location: index.php");
            }else {
                echo "<script>alert('some thing error - try again!')</script>";
            }; 
            
        }
    ?>
</body>
</html>
