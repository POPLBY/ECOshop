<?php
include ('libs/Smarty.class.php');
//include ('checkSession.php');
include ('conn/conn.php');

$smarty = new Smarty();
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();

$userid = 2;

$sql = "select * from `tb_gouwuche` where `userid`=$userid";
$result = $Db->useSQL($sql);
$n=0;
while ($list = $result[$n]) {
//    print_r($list);
//    echo '<br>';
//    echo "$list[1]";
    $sql = "select mingcheng from `tb_shangpin` where `id`=$list[1]";
    $sp[$n][0] = $Db->useSQL($sql);
//    print_r($sp[$n][0][0][0]);
    $spmc[$n][0] = $sp[$n][0][0][0];
    $spmc[$n][1] = $list[2];
//    print_r($spmc);
    $n++;
}
$smarty->assign('sp', json_encode($spmc));
$smarty->display('xianshi_gwc.html');
?>

