<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>待收货</title>
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
    <h3>待收货</h3>
    <a class="iconb" href="self">
    </a>
</header>

<div class="contaniner fixed-conta">
    <section class="order">

        <dl>
            <dt>
                <time>2015-11-15 22:55:59</time>
                <span>待收货</span>
            </dt>
            <ul>
                <a href="detail">
                    <figure><img src="phone/images/classify-ph03.png"/></figure>
                    <li>
                        <p>超级大品牌服装，现在够级大品牌服装，现在够买只要998</p>
                        <small>颜色：经典绮丽款</small>
                        <span>尺寸：XL</span>
                        <b>￥32.00</b>
                        <strong>×3</strong>
                    </li>
                </a>
            </ul>
            <dd>
                <h3>商品总额</h3>
                <i>￥98.00</i>
            </dd>
            <dd>
                <input type="button" value="申请退款" class="order-que" />
                <input type="button" value="查看物流" onclick="javascript:location.href='wuliu.html'" />
                <a href="orderList">
                    <input type="button" value="订单详情" />
                </a>
                <input type="button" value="确认收货" class="order-que"/>
            </dd>
        </dl>

    </section>
</div>

</body>
</html>