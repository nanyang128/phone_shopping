<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>个人资料</title>
    <link rel="stylesheet" type="text/css" href="phone/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="phone/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="phone/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="phone/css/style.css"/>
    <script src="phone/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $(".loading").addClass("loader-chanage")
            $(".loading").fadeOut(300)
        })
    </script>
</head>
<!--loading页开始-->
<div class="loading">
    <div class="loader">
        <div class="loader-inner pacman">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--loading页结束-->
<body>
<header class="top-header">
    <a class="icona" href="javascript:history.go(-1)">
        <img src="phone/images/left.png"/>
    </a>
    <h3>我的资料</h3>
    <a class="iconb" href="#">
    </a>
</header>

<div class="contaniner">
    <ul class="self-data">
        <li>
            <a href="#">
                <p>头像</p>
                <span><img src="phone/images/right.png"/></span>
                <figure><img src="phone/images/detail-tou.png"/></figure>
            </a>
        </li>
        <li>
            <a href="namechange.html">
                <p>昵称</p>
                <span><img src="phone/images/right.png"/></span>
                <small>瑾晨</small>

            </a>
        </li>
        <li>
            <a href="#">
                <p>性别</p>
                <span><img src="phone/images/right.png"/></span>
                <select>
                    <option>男</option>
                    <option>女</option>
                </select>

            </a>
        </li>
    </ul>
</div>





</body>
</html>