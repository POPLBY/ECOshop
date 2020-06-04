<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 02:20:10
  from 'F:\wamp64\www\EcoShop\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed465da05f9a7_71872903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e829a1676c66be05af4d66e46fc8a0e50c9a449' => 
    array (
      0 => 'F:\\wamp64\\www\\EcoShop\\index.php',
      1 => 1590978008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed465da05f9a7_71872903 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
</head>
<header>                                        <!--定义导航栏以及标题栏部分  -->
    <div id="intos">
        <a href="login.html"> 登录</a>
    </div>

    <div class="divs">
        <span><img src="images/Logo.png" id="img_logo"></span>
        <div class="child">

            <form name="form0" method="post" action="#">


                搜索: &nbsp &nbsp<input type="text" name="txt" id="txt"
                                      style="width:200px; height:40px; border-radius: 15px 15px">
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


    <div class="A">
        <img src="images/logo2.png"/>                  <!--  中间圆形图片   -->
    </div>

</header>


<body>                                                   <!--内容部分 -->
<img src="images/05.jpg" class="imgs_1" id="imag">          <!-- 背景图片  -->
</head>


<div class="round">    <!--round：四个圆形盒子 -->
    <div class="in">

    </div>
</div>


<div class="round2">
    <div class="in2">

    </div>
</div>

<div class="round3">

    <div class="in3">

    </div>
</div>

<div class="round4">
    <div class="in4">

    </div>
</div>

<div class="B">
    <img src="images/12.PNG" width="110%">                             <!--介绍图片 -->

</div>

<div class="C">                                                     <!-- 封装字体盒子 -->
    <p>商品展示</p>
    <img src="images/logo3.png" width="200px" height="200px;">          <!--   圆形模板  -->
</div>

<div class="show">                                                   <!-- show:商品展示盒子-->
    <a href="#">
        <img src="images/sairui_rival3.PNG" width="270px" height="280px"/>
    </a>
    <p>
        <a href="#">赛睿rival 3</a>
    </p>
</div>
<div class="show2">
    <a href="#"><img src="images/akko.PNG" width="270px" height="270px"></a>
    <p><a href="#">akko3108键盘</a></p>
</div>

<div class="show3">
    <a href="#"><img src="images/sairui_rival3.PNG" width="270px" height="270px"></a>

</div>

<div class="show4">
    <a href="#">
        <img src="images/akko.PNG" width="270px" height="270">
    </a>
</div>



<div class="D" id="first">                                   <!-- 推荐商品盒子  -->
    <p>推荐商品</p> <img src="images/logo3.png" width="200px" height="200px;">
</div>
<div class="tuijian">
    <a href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value[10];?>
" width="80%" height="280px">

    </a>
<!--    <a href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value[11];?>
" width="80%" height="280px" id="imge" onmouseover="link(false)"-->
<!--                      onmouseout="link(true)">-->

<!--    </a>-->
</div>

</body>                                                     <!-- 切换图片函数-->
<?php echo '<script'; ?>
>
    var arrays = new Array("<?php echo $_smarty_tpl->tpl_vars['row']->value[11];?>
", "<?php echo $_smarty_tpl->tpl_vars['row']->value[11];?>
");
    var i = 0;
    var x;
    var b;

    function link(b) {
        if (b == true)
            x = setInterval(change, 1000);
        else
            clearInterval(x);
    }

    function change() {
        if (i > 1)
            i = 0;
        var x1 = document.getElementById("imge");
        x1.src = arrays[i];
        i++;

    }


<?php echo '</script'; ?>
>
<address>                                                               <!--  页尾部分  -->

    <div class="last" id="second">
        <span>邮箱:&nbsp *****@.com
        <br/>
            <br/>


         NUMBER:&nbsp ****@.com
            <div class="more">
            更多内容请查看:
                <br/>
                More:
            </div>
        </span>
        <p>联系:</p>
        <p>CONTENT:</p>
        <p>
        <div class="content">
            手机:XXXXXXXXX <br/>
            phone:xxxxxxxx
        </div>
        </p>
        <div class="erweima">
            <p>关注我们</p>
            <p>Focus on us</p>
            <img src="images/er.jpeg" width="20%" height="130px">
        </div>
        >
    </div>

</address>
</html>
<?php }
}
