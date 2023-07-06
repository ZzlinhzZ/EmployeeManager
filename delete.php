<?php
    require_once("conectdb.php");
    if(isset($_GET["ID"])){
        $id = $_GET["ID"];
    }
    $sql = "DELETE FROM 社員管理システム WHERE ID = $id";
    $conn->exec($sql);
    header("location: index.php")
?>