<?php
//include ('checkSession.php');

include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();

//header("Content-type: textml; charset=UTF-8");
include ("libs/Smarty.class.php");
$smarty = new Smarty();


$sql = "SELECT * FROM `tb_shangpin`";
$result = $Db->useSQL($sql);

$smarty->assign('sp',json_encode($result));
$smarty->display('chakanshangpin.html')

?>


