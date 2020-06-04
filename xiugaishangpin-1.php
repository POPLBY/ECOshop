<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加商品</title>
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
        td{
            height: 30px;
        }
        .ca1 .tr1{
            height: 50px;
            background-color: #fff11b;
            color: #ff5a5a;
        }
        td:first-child{
            width: 250px;
        }
        input{
            border:0px;
            width: 100%;
            background: #d9fff5;
            height: 100%;
            text-indent: 1em;
        }
        .submit,.reset{
            height: 25px;
            width: 50px;
            background: #eeeeee;
            border:1px solid #020202;
            border-radius: 5px;
            text-align: center;
            text-indent: 0em;
        }
    </style>
</head>
<body>
<?php
include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();
?>
<?php
if($_GET['action']=="update") {
    $sql = "select id,mingcheng,pingpai,leibie,shichangjia,zhekoujia,shuliang,tuijian,shijian from tb_shangpin where id=" . $_GET['id'];
    $res = mysqli_query($conn, $sql);
    $result = mysqli_fetch_row($res);
    ?>
    <form method="post" class="form" name="form1" action="update_okk.php">
        <table class="ca1">
            <tr class="tr1">
                <td colspan="2" class="td1" align="center">修改商品</td>
            </tr>
            <tr>
                <td>商品编号：</td>
                <td><input name="id" type="text" placeholder="商品编号" id="t1" pattern="^\d{1,4}$" maxlength="4" value="<?php
                    echo $result[0]?>"/></td>
            </tr>
            <tr>
                <td>商品名称：</td>
                <td><input name="mingcheng" type="text" placeholder="商品名称" id="t2" value="<?php
                    echo $result[1] ?>"/></td>
            </tr>
            <tr>
                <td>商品品牌：</td>
                <td><input name="pinpai" type="text" placeholder="商品品牌" id="t3" value="<?php
                    echo $result[2] ?>"/></td>
            </tr>
            <tr>
                <td>商品类别：</td>
                <td><input name="leibie" type="text" placeholder="商品类别" id="t4" pattern="^\d{1,4}$" maxlength="4" value="<?php
                    echo $result[3] ?>"/></td>
            </tr>
            <tr>
                <td>市场价：</td>
                <td><input name="shichang" type="text" placeholder="市场价" id="t5" value="  <?php
                    echo $result[4]
                    ?>"/>
                </td>
            </tr>
            <tr>
                <td>折扣价：</td>
                <td><input name="zhekou" type="text" placeholder="折扣价" id="t6" value=" <?php echo $result[5] ?>"/>
                </td>
            </tr>
            <tr>
                <td>商品数量：</td>
                <td><input name="num" type="text" placeholder="商品数量" id="t7" pattern="^\d{1,4}$" maxlength="4" value="<?php
                    echo $result[6] ?>"/>
                </td>
            </tr>
            <tr>
                <td>是否推荐：</td>
                <td><input name="tuijian" type="text" placeholder="是否推荐" id="t8" pattern="^\d{1,4}$" maxlength="4" value="<?php
                    echo $result[7] ?>"/>
                </td>
            </tr>
            <tr>
                <td>上市时间：</td>
                <td><input name="time" type="text" placeholder="上市时间" id="t9" value=" <?php
                    echo $result[8] ?>"/>
                </td>
            </tr>
            <tr>

                <td colspan="2">
                    <input type="submit" value="修改" class="submit"/>
                    <input type="reset" class="reset"/>
                    <input type="hidden" name="action" value="update"/>
                </td>
            </tr>
        </table>
    </form>
        <a href="javascript:" onclick="self.location=document.referrer;">返回</a>

    <?php
}
?>
</body>
</html>