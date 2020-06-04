<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改商品浏览</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        table,td{
            border: 1px solid #020202;
            width: 850px;
            text-align: center;
        }
        .tr1{
            height: 50px;
            background-color: #fff11b;
            color: #ff5a5a;
        }
    </style>
</head>
<body>

<table>
    <tr class="tr1">
        <td colspan="10" class="td1" align="center">修改商品</td>
    </tr>
    <tr align="center">
        <td height="25" width="5%" class="top">id</td>
        <td class="top">商品名称</td>
        <td class="top">商品品牌</td>
        <td class="top">商品类别</td>
        <td class="top">市场价</td>
        <td class="top">折扣价</td>
        <td class="top">商品数量</td>
        <td class="top">是否推荐</td>
        <td class="top">上市时间</td>
        <td width="5%" class="top">操作</td>
    </tr>
    <?php
    include("conn/conn.php");
    $Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
    $conn = $Db->getConnect(); //获取数据库连接对象
    $sql="select id,mingcheng,pingpai,leibie,shichangjia,zhekoujia,shuliang,tuijian,shijian from tb_shangpin";
    $res=mysqli_query($conn,$sql);

    while($result=mysqli_fetch_row($res))
    {echo"<tr> ";
    for($i=0;$i<count($result);$i++)
    echo"<td>".$result[$i]."</td>";
       echo" <td><a href=xiugaishangpin-1.php?action=update&id=".$result[0].">修改</a></td>";
    }
    ?>

</table>

</body>
</html>