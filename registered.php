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

if ($name == "") {
    echo "<script>alert('姓名输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($pwd == "") {
    echo "<script>alert('密码输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($dianhua == "") {
    echo "<script>alert('电话输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($youbian == "") {
    echo "<script>alert('邮编输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($dizhi == "") {
    echo "<script>alert('地址输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($qq == "") {
    echo "<script>alert('QQ输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($timu == "") {
    echo "<script>alert('题目输入有误');location.href = 'registered.html'</script>";
    exit();
}

if ($daan == "") {
    echo "<script>alert('答案输入有误');location.href = 'registered.html'</script>";
    exit();
}

$Db = new connDB('localhost', 'root', '123', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb //获取数据库连接对象
$conn = $Db->getConnect();

$sql = "insert into `tb_user` (`id`, `name`, `pwd`, `dianhua`, `youbian`, `dizhi`, `qq`, `timu`, `daan`) VALUES (NULL,'$name','$pwd','$dianhua','$youbian','$dizhi','$qq','$timu','$daan')";
$rs = $Db->useSQL($sql);
if ($rs) {
    echo "<script>alert('注册成功！');location.href = 'login.html'</script>";
} else {
    echo "<script>alert('注册失败！');location.href = 'registered.html'</script>";
}




