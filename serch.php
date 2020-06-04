<?php

include("conn/conn.php");
$Db = new connDB('localhost', 'root', '', 'db_ecoshop', '3308', 'utf-8');    //实例化connDb
$conn = $Db->getConnect();
if (isset($_POST['submit'])) {
    $sql = "select leibie from tb_shangpin where mingcheng like '%" . $_POST['txt'] . "%'";
    $re = mysqli_query($conn, $sql);

    if (mysqli_num_rows($re) > 0) {
        $result = mysqli_fetch_row($re);
        header("location:chanpinzhanshi.php?id=$result[0]");
    } else {
        echo "<script>
                alert('搜索失败');
            location.href = 'tuijian.php'
                </script>";
    }

}


$sql = "select leibie from tb_shangpin where leibie=" . $_GET['id'];
$re = mysqli_query($conn, $sql);
if (mysqli_num_rows($re) > 0) {
    $result = mysqli_fetch_row($re);
    header("location:chanpinzhanshi.php?id=$result[0]");
} else {
    echo "<script>
alert('搜索失败');location.href = 'tuijian.php'
    </script>";

}
?>

