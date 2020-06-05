<?php
include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();					//设置数据库编码格式utf8

for($i = 0; $i < count($_POST['tex']); $i++){
    echo $_POST['tex'][$i]."\n";
       $sql = "UPDATE `tb_gouwuche` SET `spnum` = ".$_POST['tex'][$i]." where id=".($i+1);
        $result = mysqli_query($conn,$sql);//执行更新语句
   }
    echo "<script>alert('修改成功');location='gouwuche.php';</script>";
?>