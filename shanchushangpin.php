<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除商品</title>
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
        .m_td{
            text-align: left;
        }
    </style>
</head>
<body>
<script>
    function del(){
        if(!window.confirm('是否要删除数据??'))
            return false;
    }
    function chek(){
        var leng = this.form1.chk.length;
        if(leng==undefined){
            leng=1;
            if(!form1.chk.checked)
                document.form1.chk.checked=true;
            else
                document.form1.chk.checked=false;
        }else{
            for( var i = 0; i < leng; i++)
            {
                if(!form1.chk[i].checked)
                    document.form1.chk[i].checked = true;
                else
                    document.form1.chk[i].checked = false;
            }
        }
        return false;
    }
</script>
<table>
    <form name="form1" id="form1" method="post" action="deletes.php">
    <tr class="tr1">
        <td colspan="11" class="td1" align="center">删除商品</td>
    </tr>
    <tr align="center">
        <td>删除</td>
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
    $conn = $Db->getConnect();
    $re="select id,mingcheng,pingpai,leibie,shichangjia,zhekoujia,shuliang,tuijian,shijian from tb_shangpin ";
    $result=mysqli_query($conn,$re);
    while($res=mysqli_fetch_row($result)) {
        echo "<tr> ";
        echo"<td height='25'align='cente' class='m_td'><input type=checkbox name='chk[]' id='chk' value=".$res[0]."></td>";
        for ($i = 0; $i<count($res); $i++) {

            echo "<td height='25' align='center' class='m_td'>" . $res[$i] . "</td>";

        }
        echo" <td><a href=delete.php?action=del&id=".$res[0]." onclick='return del();'>删除</a></td>";
        echo"</tr>";


    }
    echo"<tr>
        <td colspan='11' class='m_td'>
            <a href='#' onClick='return chek();'>全部选择/取消</a>&nbsp;&nbsp;
            <input type='hidden' name='action' value='delall'><input type='submit' value='删除选择' onclick ='return del();'>&nbsp;&nbsp;
        </td>

    </tr>";

    ?>

</table>

</body>
</html>