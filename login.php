<?php
include("conn/conn.php");
$type = $_POST['type'];
$name = $_POST["user"];
$pwd = $_POST["pwd"];
$Db = new connDB('localhost','root','123','db_ecoshop','3308','utf-8');    //实例化connDb
$conn = $Db->connect();                                                                                         //获取数据库连接对象
//根据用户类型判断用户名和密码
if($type == '0'){
    $sql = mysqli_query($conn, "select * from tb_admin where name = '$name' and pwd = '$pwd'");     //管理员
} else {
    $sql = mysqli_query($conn, "select * from tb_user where name = '$name' and pwd = '$pwd'");      //用户
}
$finaly = mysqli_fetch_array($sql);     //将查询结果赋值
if ($finaly > 0) {
    session_start();
    $_SESSION['user'] = $finaly;
    //设置登录类型
    if($type == '0') {
        $_SESSION['type'] = 'admin';    //设置为管理员
    }else {
        $_SESSION['type'] = 'user';     //设置为普通用户
    }
    echo "<script>alert('欢迎登录！');location.href = 'index.php'</script>";
} else {
    echo "<script>alert('用户名或密码错误！');location.href='login.html'</script>";
}
