<?php
$local="localhost";
$dk="3308";
$username="root";
$pwd="";
$dbname="db_ecoshop";
$cons=mysqli_connect($local,$username,$pwd,$dbname,$dk)or die(mysqli_error()); //连接MySQL服务器，选择数据库
mysqli_query($cons,"set names utf8");
$result=$cons;
if(!$result)
    echo"连接数据库失败";

?>