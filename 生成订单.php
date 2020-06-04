<?php
//include ('checkSession.php');

include ('admin/conn/conn.php');
$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();

include ('libs/Smarty.class.php');
$smarty = new Smarty();

//$userid = $_SESSION['user_id'];
$userid = 2;
$dingdanhao = date("YmjHis").$userid;
$shijian = date("YmjHis");
//print($shijian);

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
//print_r($sp);
//echo "<br>";
//print_r($xx);

$ssp = $sp[0];
$xxx = $xx[0];
print_r($ssp);
echo "<br>";
print_r($xxx);

$sql = "INSERT INTO `tb_dingdan` (`dingdanhao`, `mingcheng`, `shuliang`, `shouhuoren`, `dizhi`,`youbian`, `dianhua`, `shijian`, `zhuangtai`) VALUES ('$dingdanhao','$ssp[0]', '$ssp[2]','$xxx[0]','$xxx[3]','$xxx[2]','$xxx[1]','$shijian','已付款')";
$result = $Db->useSQL($sql);
var_dump($result);
if($result) {
    echo "<script>alert('成功！')</script>";
} else {
    echo "<script>alert('失败！')</script>";
}

$smarty->assign('xx',$xx[0]);
$smarty->assign('sp',json_encode($sp));
$smarty->assign('dingdanhao',$dingdanhao);
$smarty->assign('shijian',$shijian);
$smarty->display('shengchengdingdan.html');