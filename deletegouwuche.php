<?php
include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();					//设置数据库编码格式utf8
if($_POST['action'] == "delall"){						//判断是否执行删除操作
    if(count($_POST['chk']) <= 0){						//判断提交的删除记录是否为空
        echo "<script>alert('请选择记录');history.go(-1);</script>";
    }else{
        for($i = 0; $i < count($_POST['chk']); $i++){		//for语句循环读取复选框提交的值，
            $sqlstr = "Delete from tb_gouwuche where id = ".$_POST['chk'][$i];	//循环执行删除操作
            mysqli_query($conn,$sqlstr);						//执行删除操作
        }
        echo "<script>alert('删除成功');location='gouwuche.php';</script>";
    }
}
?>
