<?php
//include ("checkSession.php");
include ("libs/Smarty.class.php");
$smarty = new Smarty();

include("conn/conn.php");
$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();         //获取数据库连接对象

$sql = "select * from `tb_shangpin` where `tuijian` = 1";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_row($result);
$smarty->assign('row', $res);
$smarty->display('index.html');
?>