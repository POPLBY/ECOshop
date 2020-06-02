<?php
session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>alert('请先登录！');location.href='login.html'</script>";
    exit;
}
?>