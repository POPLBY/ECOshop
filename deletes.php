<?php
header ( "Content-type: text/html; charset=utf-8" );
include("conn/conn.php");
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();
if($_POST['action'])
{
    if(count($_POST['chk'])<=0)
    {	echo "<script>alert('请选择记录');history.go(-1);</script>";

    }
    else {
        for($i=0;$i<count($_POST['chk']);$i++)
        {
            $sql="delete from tb_shangpin where id=".$_POST['chk'][$i];
            mysqli_query($conn,$sql);
        }
echo "<script>
alert('删除成功');
location='shanchushangpin.php';
</script>";
                                }
}
?>