<?php
//根据自己的数据库账号密码等信息修改值
$conn = mysqli_connect("localhost","root","123","db_ecoshop","3308") or die("数据库连接失败！".mysqli_error());
mysqli_query($conn,"set names gb2312");
?>

//如果某页面需要连接数据库，请在使用前添加一下代码：
<?php
//include('conn/conn.php');
?>
