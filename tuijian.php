<?php
//include ("checkSession.php");
include ("libs/Smarty.class.php");
$smarty = new Smarty();

include("conn/conn.php");
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();         //获取数据库连接对象

$sql = "select * from `tb_shangpin` where `tuijian` = 1";
$result = mysqli_query($conn, $sql);
$arra= array();
$n=0;
while($res = mysqli_fetch_row($result))
{
$arra[$n]=$res;
$n++;
}
$sqls="select mingcheng from tb_shangpin where id=4";
$re00=mysqli_query($conn,$sqls);
$results=mysqli_fetch_row($re00);
$smarty->assign('arra', json_encode($arra));
$smarty->assign('k', $results[0]);
$smarty->display('index.php');


?>