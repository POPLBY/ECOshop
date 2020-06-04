<!doctype html>
<html lang="en">
<head>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
</head>
<header>
    <!--定义导航栏以及标题栏部分  -->
    <div id="intos">
        <a href="login.html"> 登录</a>
    </div>

    <div class="divs">
        <span><img src="images/Logo.png" id="img_logo"></span>
        <div class="child">

            <form name="form0" method="post" action="serch.php">


                搜索: &nbsp &nbsp<input type="text" name="txt" id="txt"
                                      style="width:200px; height:40px; border-radius: 15px 15px">
                <input type="submit" name="submit" value="确定"/>
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
    <a href="#"><img src="images/sanxing.PNG" width="270px" height="270px"></a>
    <p><a href="#">三星显示器</a></p>
</div>

<div class="show4">
    <a href="#">
        <img src="images/soni.PNG" width="270px" height="270">
        <p><a href="#">索尼耳机</a></p>
    </a>
</div>



<div class="D" id="first">                                   <!-- 推荐商品盒子  -->
    <p>推荐商品</p> <img src="images/logo3.png" width="200px" height="200px;">
</div>
<div class="tuijian">

   <a href="#" id="link_node"> <img src="images/akko.PNG" width="80%" height="280px" id="imge" onmouseover="link(false)" onmouseout="link(true)">

  </a>
</div>

</body>                                                     <!-- 切换图片函数-->
<script>

    var arrays=new Array({$arra});




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
        var t=document.getElementById("link_node");
        x1.src = arrays[0][i][10];
        if(i==0)
            t.href="test1.php";
        else
            if(i==1)
                t.href="test2.php";
      console.log(x1.src);
i++;
    }


</script>
<div id="timesell" class="miaosha">
    <span>
        距离秒杀还有:<span id="time"></span>结束

    </span>
    <a href="#" id="aa"> <img src="images/akko.PNG" width="300px" height="300px" id="tp"></a>
</div>
<script>
var f=document.getElementById("timesell");
var x=document.createElement("p");
var x1=document.createElement("p");
x.innerHTML="限时秒杀";
x.className="word";
x1.innerHTML="{$k}";
x1.className="word1";
f.appendChild(x);
f.appendChild(x1);

var stopTime = new Date(2020,6,6,0,0,0);
var nowTime = new Date();
var jianGe = (stopTime-nowTime)/1000;
var day = Math.floor(jianGe/60/60/24);
day=0;
var hour = Math.floor(jianGe/60/60%24);
hour=0;
var min = Math.floor(jianGe/60%60);
min=0;
var sec = Math.floor(jianGe%60);
var showTime = day+'天'+hour+'小时'+min+'分钟'+sec+'秒';
document.getElementById('time').innerText = showTime;


//定时器：每隔多长事件执行一次某函数
//setInterval(func,ms)
var timer = setInterval(function () {


    var nowTime = new Date();
    var jianGe = (stopTime-nowTime)/1000;


    var day = Math.floor(jianGe/60/60/24);
    day=0;
    var hour = Math.floor(jianGe/60/60%24);
    hour=0;
    var min = Math.floor(jianGe/60%60);
    min=0;
    var sec = Math.floor(jianGe%60);


    var showTime = day+'天'+hour+'小时'+min+'分钟'+sec+'秒';


    document.getElementById('time').innerText = showTime;


    if(day==0&&hour==0&&min==0&&sec==0){
        //关闭定时器
        clearInterval(timer);
    var node=document.getElementById("aa");
    var node2=document.getElementById("tp");
    node.removeChild(node2);
    alert("抢购结束请下次一定来Wdnmd");
    }


},1000);


</script>
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

    </div>

</address>
</html>
