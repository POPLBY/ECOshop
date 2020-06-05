<?php
include ('conn/conn.php');
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');
$conn = $Db->getConnect();					//设置数据库编码格式utf8

?>
<form name="form1" id="form1" method="post" action="updategouwuche1.php">
            <table  cellspacing="0" cellpadding="0" id="table1">
                <tr>
                    <td>商品名称:</td>
                    <td>数量</td>
                </tr>
                <?php
                    $sql = "SELECT mingcheng,spnum FROM `tb_gouwuche`";
                    $result = mysqli_query($conn,$sql);
                while ($rows = mysqli_fetch_row($result)){
                    echo "<td height='25' align='center' class='m_td'>".$rows[0]."</td>";

                    echo "<td height='25' align='center' class='m_td'>";
                    echo "<input type=text name='tex[]' id='tex' value=".$rows[1].">";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                <tr><td colspan="2" align="center"><input type="submit" value="修改"> <input type="reset"></td></tr>
            </table>
</form>


