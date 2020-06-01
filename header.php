<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    <link href="css/css2.css" rel="stylesheet" type="text/css">-->
    <style type="text/css" rel="stylesheet">
        #intos{
            position:relative;
            z-index:500;
            color: rgba(242,254,249,0.98);
            font-size: 30px;
            top:35px;
            left:180%;
        }
        .divs {
            background-color:#980000;
            width: 200%;
            height: 120px;
            text-align: center;
            margin: -10px;
            position: relative;
            top:-50px;
        }
        body {
            background-color: rgba(255,255,255,0.96);
            width:50%;
        }
        div.divs>span img{
            position:relative;
            top:-10px;
            z-index: 300;
            left:1%;

        }
        div.divs span {
            display: inline-block;
            color: white;
            font-family: "幼圆";
            font-size: 55px;
            position: relative;
            top: 40px;
            align-content: center;
            float: left;
            left: 10%;
        }
        div.divs span a {
            color: rgba(236, 248, 255, 0.89);
            font-size: 35px;
            position: relative;
            top: -50px;
            left: 30%;
        }
        div.divs > div.child form {
            position: relative;
            top: 40px;
            right: 4%;
            color: rgba(250, 248, 255, 0.87);
            font-size: 30px;
        }
        a {
            color: #f8f7ff;
            text-decoration: none;
            position: relative;
            font-size: 40px;

        }
        .div2 {
            background-color: rgba(0, 0, 0, 0.87);
            height: 80px;
            width: 200%;
            margin: -10px;
            position: relative;
            top:-40px;
            z-index: 1000;

        }
        div.div2 span a {
            position: relative;
            top: 20px;
            display: inline-block;
            color: rgba(255, 241, 229, 0.89);
            font-family: "幼圆";
            font-size: 30px;
            left: 22%;


        }
        div.div2 span.spa0 {
            display: inline-block;
            position: relative;
            left: 5%;

        }
        div.div2 span {
            position: relative;
            left: 1%;
        }
        div.div2 span a.a1 {
            position: relative;
            left: 5%;
        }
    </style>
</head>
<header>
        <div id="intos">
            <a href="login.html"> 登录</a>
        </div>
        <div class="divs">
            <span><img src="images/logo.png" id="img_logo" width="250px" height="80px"></span>
            <div class="child">
                <form name="form0" method="post" action="#">
                    搜索: &nbsp &nbsp<input type="text" name="txt" id="txt" style="width:200px; height:40px;">
                </form>
            </div>
        </div>
        <div class="div2">

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
            <span><a href="#">关于我们</a></span>
        </div>
</header>
<body>

</body>
</html>