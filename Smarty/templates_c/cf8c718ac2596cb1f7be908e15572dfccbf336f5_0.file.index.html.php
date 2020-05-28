<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 03:35:45
  from 'D:\wamp64\www\three\Smarty\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecf319158b928_50620778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf8c718ac2596cb1f7be908e15572dfccbf336f5' => 
    array (
      0 => 'D:\\wamp64\\www\\three\\Smarty\\templates\\index.html',
      1 => 1590633916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
  ),
),false)) {
function content_5ecf319158b928_50620778 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>smarty test1</title>
</head>
<body>
它的名字叫<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php $_smarty_tpl->_subTemplateRender('file:top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
