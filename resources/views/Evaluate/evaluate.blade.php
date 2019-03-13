<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>待评价</title>
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
    <h3>待评价</h3>

    <a class="iconb" href="self">
    </a>
</header>

<div class="contaniner fixed-cont">
    <section class="go-order">
        <h3>
            <img src="phone/images/b-iocn02.png"/>
            <span>待评价</span>
        </h3>
        <dl class="map">
            <dt><img src="phone/images/a-icon02.png"/></dt>
            <dd>
                <span>瑾晨</span>
                <small>13035059860</small>
                <p>安徽省合肥市XXXXXXXX</p>
            </dd>
        </dl>
        <div class="order-shop">
            <dl>
                <a href="detail">
                    <dt><img src="phone/images/index-ph01.png"/></dt>
                    <dd>
                        <p>超级大品牌服装，现在够买只要998</p>
                        <small>颜色：经典绮丽款</small>
                        <span>尺寸：L</span>
                        <input type="button" value="退货/退款" />
                        <b>￥32.00</b>
                        <strong>×3</strong>
                    </dd>
                </a>

            </dl>
            <ul>
                <li>
                    <span>运费</span>
                    <small>包邮</small>
                </li>
                <li>
                    <span>商品总额</span>
                    <small>￥98.00</small>
                </li>
                <li>
                    <p>
                        下单时间：2015-1125 22:04:41<br />订单编号：214484605204859
                    </p>
                </li>
            </ul>
        </div>
    </section>
</div>

<footer class="order-footer fixed-footer">
    <a href="assess"><input type="submit" value="去评价" /></a>

</footer>


</body>
</html>