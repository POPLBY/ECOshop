<?php
include("conn/conn.php");

$name = $_POST["name"];
$pwd = $_POST["pwd"];
$dianhua = $_POST['dianhua'];
$youbian = $_POST['youbian'];
$dizhi = $_POST['dizhi'];
$qq = $_POST['qq'];
$timu = $_POST['timu'];
$daan = $_POST['daan'];

$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb //获取数据库连接对象
$conn = $Db->getConnect();

//INSERT INTO `tb_user` (`id`, `name`, `pwd`, `dianhua`, `youbian`, `dizhi`, `qq`, `timu`, `daan`) VALUES (NULL, '1', '12345', '11111111111', '100010', '长江师范学院', '111111111', '你是哪个学校？', '长江师范学院');

$sql = "insert into `tb_user` (`id`, `name`, `pwd`, `dianhua`, `youbian`, `dizhi`, `qq`, `timu`, `daan`) VALUES (NULL,'$name','$pwd','$dianhua','$youbian','$dizhi','$qq','$timu','$daan')";
$rs = $Db->useSQL($sql);
if ($rs) {
    echo "<script>alert('创建成功！');location.href ='login.html'</script>";
} else {
    echo "<script>alert('创建失败！');location.href ='registered.html'</script>";
}
//根据用户类型判断用户名和密码



