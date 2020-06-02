<?php
include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();

include ('checkSession.php');

if(!($_SESSION['type'] == 'admin')) {
    $userid = $_SESSION['user_id'];
    $spid = 1;
    $shuliang = $_POST['shuliang'];
//echo "<script>alert('成功！');</script>";

//echo "$userid - $shuliang<script>alert('`123`！');</script>";
    $sql = "select * from `tb_gouwuche` where userid=$userid and spid=$spid";
    $result = $Db->useSQL($sql);
    if($result) {
        $sql = "update `tb_gouwuche` SET `spnum`=$shuliang where `userid`=$userid and `spid`=$spid";
        //echo "<script>alert('成功！');</script>";
    } else {
        $sql = "insert INTO `tb_gouwuche`(`userid`, `spid`, `spnum`) VALUES ($userid,$spid,$shuliang)";
        //echo "<script>alert('失败！');</script>";
    }
    $res = $Db->useSQL($sql);
    if($res) {
        echo "<script>alert('添加成功！');history.back()</script>";
    }else {
        echo "<script>alert('添加失败！');history.back()</script>";
    }
} else {
    echo "<script>alert('管理员无法购买！');history.back()</script>";
}
