<?php
//include ("checkSession.php");
//include("libs/Smarty.class.php");
include ("conn/conn.php");

//$smarty = new Smarty();

$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();

$mingcheng = $_POST['text2'];
$pingpai = $_POST['text3'];
$leibie = $_POST['text4'];
$shichangjia = $_POST['text5'];
$zekoujia = $_POST['text6'];
$shuiang = $_POST['text7'];
$tuijian = $_POST['text8'];
$shijian = $_POST['text9'];
$jianjie = $_POST['textarea'];

$sql = "INSERT INTO `tb_shangpin` 
            ( `mingcheng`, `pingpai`, `leibie`, `shichangjia`, `zhekoujia`, `shuliang`, `xiaoliang`, `tuijian`, `shijian`, `tupian`, `jianjie`) 
        VALUES 
            ( '$mingcheng', '$pingpai', '$leibie', '$shichangjia', '$zekoujia', NULL, NULL, '$tuijian', '$shijian', NULL, '$jianjie');";
$result = $Db->useSQL($sql);
if($result) {
    echo "<script>alert('添加成功！');location.href = history.back()</script>";
} else {
    echo "<script>alert('添加失败！');location.href = history.back()</script>";
}
?>