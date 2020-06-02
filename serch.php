<link href="css/index.css" rel="stylesheet" type="text/css">
<header>
    <!--定义导航栏以及标题栏部分  -->
    <div id="intos">
        <a href="login.html"> 登录</a>
    </div>

    <div class="divs">
        <span><img src="images/Logo.png" id="img_logo"></span>
        <div class="child">

            <form name="form0" method="post" action="serch.php">


                搜索: &nbsp &nbsp<input type="text" name="txt" id="txt"
                                      style="width:200px; height:40px; border-radius: 15px 15px">
                <input type="submit" name="submit" value="确定"/>
            </form>
        </div>
    </div>
    <div class="div2">                                       <!--  封装导航栏盒子  -->

        <span><a href="#">首页</a></span>

        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        <span><a href="#second">关于我们</a></span>

        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        &nbsp
        <span><a href="#first">推荐商品</a></span>
    </div>

<div class="information">
<table width="45%"  border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td width="5%" align="center" height="25" class="top">名称</td>
        <td width="30%" align="center" class="top">id</td>
        <td width="10%" align="center" class="top">市场价</td>
        <td width="10%" align="center" class="top">折扣价</td>
        <td width="10%" align="center" class="top">品牌</td>
        <td width="10%" align="center" class="top">#</td>

    </tr>
<?php
include("conn/conn.php");
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();
if(isset($_POST['submit']))
    $sql="select mingcheng, id ,shichangjia,zhekoujia,pingpai from tb_shangpin where mingcheng like  '%" .$_POST['txt']."%'";
$re=mysqli_query($conn,$sql);

if(mysqli_num_rows($re)>0)
  while($result=mysqli_fetch_row($re))
  {
      echo "<tr>";
      for($i = 0; $i < count($result); $i++){
          echo "<td height='25' align='center' class='m_td'>".$result[$i]."</td>";
      }
      echo "<td  class='m_td' width='10%' align='center'><a href=loop.php?action=update&id=".$result[1].">查看</a></td>";
      echo "</tr>";
  }

else
{ echo"<script>
alert('搜索失败');
    </script>";
}
?>
    </div>


</table>
