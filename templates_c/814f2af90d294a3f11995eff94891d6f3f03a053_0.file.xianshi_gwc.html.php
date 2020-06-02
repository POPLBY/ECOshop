<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 06:38:56
  from 'F:\wamp64\www\EcoShop\xianshi_gwc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed5f400f188b0_54836932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '814f2af90d294a3f11995eff94891d6f3f03a053' => 
    array (
      0 => 'F:\\wamp64\\www\\EcoShop\\xianshi_gwc.html',
      1 => 1591079935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed5f400f188b0_54836932 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>

</head>

<body>

<table id="table1">
    <tr>
        <td>商品名称</td>
        <td>商品数量</td>
    </tr>
</table>
<?php echo '<script'; ?>
>
    var gwc = <?php echo $_smarty_tpl->tpl_vars['sp']->value;?>

    console.log(gwc)
    var table1 = document.getElementById('table1')
    var n = 0;
    while (gwc[n]) {
        // document.write(gwc[n][0])
        // document.write(gwc[n][1])
        // document.write("<br>")
        var tr = document.createElement('tr')
        var td1 = document.createElement('td')
        var td2 = document.createElement('td')
        td1.innerHTML = gwc[n][0]
        td2.innerHTML = gwc[n][1]
        tr.appendChild(td1)
        tr.appendChild(td2)
        table1.appendChild(tr)
        n++
    }
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
