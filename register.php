<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>
<body>
    <?php 
        if (isset($_POST['登録'])) {
            $社員番号 = $_POST['txt社員番号'];
            $氏名 = $_POST['txt氏名'];
            $部署 = $_POST['部署'];
            $性別 = $_POST['性別'];

            require_once("conectdb.php");
            $sql = ("INSERT INTO 社員管理システム(社員番号,氏名,部署,性別) VALUES ($社員番号, $氏名,$部署,$性別)");
            $stmt.exec($sql);
        }
    ?>
    <form>
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
                <th><input type="submit" value="登録"/></th>
            </tr>
        </table>
    </form>
</body>
</html>