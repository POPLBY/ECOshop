<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 01:30:03
  from 'F:\wamp64\www\EcoShop\commodity.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed45a1b122a14_36337234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81425ceb5152994b0b9c90889d6cb5912b0938dd' => 
    array (
      0 => 'F:\\wamp64\\www\\EcoShop\\commodity.html',
      1 => 1590974995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed45a1b122a14_36337234 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</title>
    <link rel="stylesheet" type="text/css" href="css/commodity.css">
</head>
<body>
<div id="main" >
    <div class="left">
        <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value[10];?>
" alt="加载中..." class="img"></a>
    </div>
    <div class="right">
        <h1><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</h1>
        <span id="xiangqing"><?php echo $_smarty_tpl->tpl_vars['row']->value[11];?>
</span>
        <br>
        <br>
        <span><?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
</span>
        <br>
        <div class="ps">
            <div class="price">
                <span class="zekou">折扣价：</span>
                <br>
                <span class="zekou">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp￥<?php echo $_smarty_tpl->tpl_vars['row']->value[5];?>
</span>
                <br>
                <br>
                <span class="shichang">市场价：</span>
                <span class="shichang">￥<?php echo $_smarty_tpl->tpl_vars['row']->value[4];?>
</span>
            </div>

            <div class="sales">
                <span id="xiaoliang">销量：<?php echo $_smarty_tpl->tpl_vars['row']->value[7];?>
</span>
            </div>
        </div>

        <div class="buy">
            <form action="#">
                <span style="font: 20px '微软雅黑';">请输入购买数量：</span>
                <input type="text" name="shuliang" placeholder="1">
                <span>库存：<?php echo $_smarty_tpl->tpl_vars['row']->value[6];?>
</span>
                <br>
                <input type="submit" name="buy" value="加入购物车">
            </form>
        </div>
    </div>
    <div class="pingjia">
        <br>
        <div>
            <h3>商品评价：</h3>
        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['pj']->value[3];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['pj']->value[4];?>
</p>
        <br>
        <br>
    </div>
</div>
</body>
</html><?php }
}
