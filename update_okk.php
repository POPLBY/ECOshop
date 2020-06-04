<?php
include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();
if(!isset($_GET['action']))
{if(!($_POST['id'] and $_POST['mingcheng'] and $_POST['pinpai'] and $_POST['leibie'] and $_POST['shichang'] and $_POST['zhekou'] and $_POST['num']
 and $_POST['tuijian'] and $_POST['time']))
    echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
else

    {
        $sql = "UPDATE `tb_shangpin` SET `id` = '".$_POST['id']."', `mingcheng` = '".$_POST['mingcheng']."', `pingpai` = '".$_POST['pinpai']."', `leibie` = '".$_POST['leibie']."',`shichangjia`='".$_POST['shichang']."',`zhekoujia`='".$_POST['zhekou']."',`shuliang`='".$_POST['num']."',`tuijian`='".$_POST['tuijian']."'
         ,`shijian`='".$_POST['time']."' WHERE `tb_shangpin`.`id` = ".$_POST['id'];

        $result = mysqli_query($conn,$sql);//执行更新语句
        if($result)
            echo "修改成功点击<a href='xiugaishangpin.php'>这里</a>查看";
        else
        {echo "修改失败<a href='xiugaishangpin.php'>返回</a>";
        echo $sql;}
    }


}
?>