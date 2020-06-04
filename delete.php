<?php
include("conn/conn.php");
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();
$re="select id,mingcheng,pingpai,leibie,shichangjia,zhekoujia,shuliang,tuijian,shijian from tb_shangpin ";
$result=mysqli_query($conn,$re);
if($_GET['action']=="del")
{
    $sql="delete from tb_shangpin where id=".$_GET['id'];
    $re0=mysqli_query($conn,$sql);
    if($re0)
    echo "<script>
    alert('删除成功');
    location='shanchushangpin.php';
</script>";
    else
    {echo "<script>
alert('删除失败');
</script>";
    }


}
?>