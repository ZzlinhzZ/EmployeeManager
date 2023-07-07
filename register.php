<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>
<body>
    <form action="" method="post">
        <table align="center">
            <tr>
                <th>社員番号 </th>
                <th><input type="text" name="txt社員番号" value="" required/></th>
            </tr>
            <tr>
                <th>氏名</th>
                <th><input type="text" name="txt氏名" value="" required/></th>
            </tr>
            <tr>
                <th>部署 </th>
                <th><select name="部署" style="width: 170px; height: auto;">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select></th>
            </tr>
            <tr>
                <th>性別 </th>
                <th>
                    <input type="radio" name="性別" value="男" checked>男
                    <input type="radio" name="性別" value="女">女 
                </th>
            </tr>
            <tr>
                <th><a href="index.php">一覧</a></th>
                <th><input type="submit" value="登録" name="登録"/></th>
            </tr>
        </table>
    </form>
    <?php 
        require_once("conectdb.php");
        if (isset($_POST['登録'])) {
            $社員番号 = $_POST['txt社員番号'];
            $氏名 = $_POST['txt氏名'];
            $部署 = $_POST['部署'];
            $性別 = $_POST['性別'];   
            $sql = "INSERT INTO `社員管理システム` (`ID`, `社員番号`, `氏名`, `部署`, `性別`) VALUES (NULL, '$社員番号', '$氏名', '$部署', '$性別')";
            if ($conn->exec($sql)) {
                echo "<script>alert('add a new employee successful!')</script>";
            }else {
                echo "<script>alert('some thing error - try again!')</script>";
            }; 
            
        }
    ?>
</body>
</html>