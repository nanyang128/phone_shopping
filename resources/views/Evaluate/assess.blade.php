<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>去评价</title>
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
<header class="top-header fixed-header">
    <a class="icona" href="javascript:history.go(-1)">
        <img src="phone/images/left.png"/>
    </a>
    <h3>去评价</h3>

    <a class="iconb" href="evaluate">
    </a>
</header>

<div class="contaniner fixed-cont">
    <section class="assess">
        <p>
            <img src="phone/images/detail-pp01.png"/>
            <textarea rows="5" placeholder="请写下对宝贝的感受吧，对他人帮助很大哦" ></textarea>

        </p>
        <ul>
            <li>
                商品评价
            </li>
            <li class="assess-right">
                <img onclick="level(1)" src="phone/images/detail-iocn01.png"/>
                <img onclick="level(2)" src="phone/images/detail-iocn01.png"/>
                <img onclick="level(3)" src="phone/images/detail-iocn01.png"/>
                <img onclick="level(4)" src="phone/images/detail-iocn01.png"/>
                <img onclick="level(5)" src="phone/images/detail-iocn01.png"/>
            </li>
        </ul>
    </section>
</div>

<footer class="assess-footer fixed-footer ">
    <ul>
        <li>
            <input type="checkbox" id="ass"/>
            <label for="ass" onselectstart="return false">匿名评价</label>

        </li>
        <input type="button" value="发表评论" />
    </ul>
</footer>

<script type="text/javascript">
    $(".assess-footer ul li label").on('touchstart',function(){
        if($(this).hasClass('assd')){
            $(".assess-footer ul li label").removeClass("assd")
        }else{
            $(".assess-footer ul li label").addClass("assd")
        };
    });
    function level(s)
    {

        var str = '';

        var k = 6-s;

        for(i=1;i<s+1;i++)
        {
            str += "<img onclick='level("+i+")' src='phone/images/detail-iocn01.png'/>";
        }
        for(j=1;j<k;j++)
        {
            var d=j+s
            str += "<img onclick='level("+d+")' src='phone/images/detail-iocn001.png'/>";
        }


        $('.assess-right').html(str);
    }


</script>
</body>
</html>