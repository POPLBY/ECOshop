<?php
include ('checkSession.php');

include ('admin/conn/conn.php');
$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();

include ('libs/Smarty.class.php');
$smarty = new Smarty();

$userid = $_SESSION['user_id'];
$dingdanhao = date("YmjHis").$userid;
print($dingdanhao);

$sql = "SELECT `name`, `dianhua`, `youbian`, `dizhi`, `qq` FROM `tb_user` WHERE `id`=$userid";
$xx = $Db->useSQL($sql);
//print_r($xx[0]);

$sql = "select * from `tb_gouwuche` where `userid`=$userid";
$result = $Db->useSQL($sql);

$n = 0;
$res = Array();
//print(isset($result[$n]));
while ($list = $result[$n]) {
    $sql = "select `mingcheng`, `zhekoujia` from `tb_shangpin` where `id`=$list[1]";
    $res[$n] = $Db->useSQL($sql);
    $sp[$n] = $res[$n][0];
    $sp[$n][2] = $list[2];
    $n++;
    //echo "<br>";
}

$smarty->assign('xx',$xx[0]);
$smarty->assign('sp',json_encode($sp));
$smarty->assign('dingdanhao',$dingdanhao);
$smarty->display('shengchengdingdan.html');