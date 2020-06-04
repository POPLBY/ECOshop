<?php
include('checkSession.php');

include('conn/conn.php');
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();


if (!($_SESSION['type'] == 'admin')) {
    $userid = $_SESSION['user_id'];
    print $userid;
    echo "<br>";
    $spid = $_POST['id'];
//    echo $spid;
//    echo "<br>";
    $shuliang = $_POST['sl'];
//    echo $shuliang;
//    echo "<script>alert('成功！');</script>";

//    echo "$userid - $shuliang<script>alert('`123`！');</script>";
    $sql = "SELECT `mingcheng`, `shichangjia`, `zhekoujia` FROM `tb_shangpin` WHERE `id`=$spid";
    $spxx = $Db->useSQL($sql)[0];
    $mingcheng = $spxx[0];
    $shichangjia = (int)$spxx[1];
    $zhekoujia = (int)$spxx[2];
//    var_dump($shuliang);
    $sql = "select * from `tb_gouwuche` where userid=$userid and spid=$spid";
    $result = $Db->useSQL($sql);
    if ($result) {
        $sql = "update `tb_gouwuche` SET `spnum`=$shuliang where `userid`=$userid and `spid`=$spid";

    } else {
//        insert INTO `tb_gouwuche` (2,1,"显示器",233,231,12) $userid,$spid,$spxx[0],$spxx[1],$spxx[2],$shuliang

        $sql = "insert INTO `tb_gouwuche` (`userid`,`spid`,`mingcheng`,`shichangjia`,`zhekoujia`,`spnum`) values ($userid,$spid,'$mingcheng',$shichangjia,$zhekoujia,$shuliang)";

    }
    $res = $Db->useSQL($sql);
    //echo $res;
    if ($res) {
        echo "<script>alert('添加成功！');history.back()</script>";
    } else {
        echo "<script>alert('添加失败！');history.back()</script>";
    }
} else {
    echo "<script>alert('管理员无法购买！');history.back()</script>";
}