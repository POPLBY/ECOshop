<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 02:45:20
  from 'C:\wamp64\www\phpstorm\smart_example\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecf25c0807ae3_78039997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6990b3dcfb8adcfe829cc8d4eadb450f588196dc' => 
    array (
      0 => 'C:\\wamp64\\www\\phpstorm\\smart_example\\templates\\index.html',
      1 => 1590633916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
  ),
),false)) {
function content_5ecf25c0807ae3_78039997 (Smarty_Internal_Template $_smarty_tpl) {
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
