<?php
include("conn/conn.php");
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();
if($_GET['action'] == "update")//判断地址栏参数action的值是否等于update
{

    $sql ="select tupian from tb_shangpin where id=".$_GET['id'];
    $result=mysqli_query($conn,$sql);
    $res=mysqli_fetch_row($result);


}
$name=$res[0];
?>
<img src="<?php
echo $name;
?>"
     width="750px" height="750px">
