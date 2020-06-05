<?php
    include ('conn/conn.php');
    $Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
    $conn = $Db->getConnect();
    $sqlstr1 = "TRUNCATE TABLE tb_gouwuche";		//定义删除语句
    $result = mysqli_query($conn,$sqlstr1);				//执行删除操作
    if ($result){
        echo "<script>alert('删除成功');location='gouwuche.php';</script>";
    }else{
        echo "删除失败";
    }

?>