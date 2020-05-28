<?php
    header ( "Content-type: text/html; charset=UTF-8" );
    require './libs/Smarty.class.php';
    $smarty=new Smarty();
    $name='Sulan Zhang';
    $smarty->assign( 'name' , $name );
    $smarty->display('./index.html');
?>