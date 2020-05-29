<?php
if(!isset($_SESSION['user'])) {
    echo"<script>alert('请先登录！');location = 'login.html'</script>";
}
?>

