<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>义县东升水果</title>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.timelinr-0.9.53.js"></script>

</head>
<body id="page-top" class="index" style="background-color: #99CC01">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="marg-rig" style="background-color: darkgreen">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <h2 style="color: white">义县东升水果专业合作社</h2></div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden"><a href="#page-top"></a></li>
                <li class="hidden"><a href="#"></a></li>
                <li class="page-scroll"><a href="#product">特色产品</a></li>
                <li class="page-scroll"><a href="#portfolio">资质荣誉</a></li>
                <li class="page-scroll"><a href="#guoMuFengCai">果木风采</a></li>
                <li class="page-scroll"><a href="#integrated">发展历程</a></li>
                <li class="page-scroll"><a href="#dig">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container">
        <div class="jumbotron con-tsb">
            <p> 义县东升水果专业合作社成立于2010年5月，是响应上级各级党和政府的号召， 在农民自愿的基础上，由义县张家堡镇一家峪村的一些果树种植户共同组建的农民组织。合作社成立以来，
                在'精心组织求发展，热忱服务富农民'宗旨下，取得了一些发展。广大社员在取得一定的利益后，更加满怀信心，并为合作社今后的发展献计献策，使得我们更有信心为本乡的经济腾飞作出更大的贡献，
                义县东升水果专业合作社位于辽西锦州市义县张家堡乡一家峪村，在三零五省道路边，交通便利，通讯网络齐全。我们村三面环山，独特的地理和气候条件，适合我们大力发展果树事业。因此在合作社成立之初我们主要采取大宗农资集体团购
                取消中间流通环节来让参加合作社的农户在投资上节约成本，农产品集体捆绑销售使得农户产品得到最大的收益的办法，使得合作社农户的收入有了明显的提高，对合作社的发展倍感信心十足。</p>
        </div>
    </div>
</header>
<section class="success" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><h3>特色产品</h3>
            </div>
        </div>
        <div class="row">
            <div id="carousel-product" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for ($index = 0; $index < count($products); $index++) { ?>
                        <li data-target="#carousel-product" data-slide-to="<?= $index ?>"
                            class="<?= !empty($products[$index]['active']) ? 'active' : ''; ?>"></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php foreach ($products as $product) { ?>
                        <div class="item <?= !empty($product['active']) ? 'active' : ''; ?>">
                            <img src="<?= $product['image'] ?>" class="img-responsive" data-holder-rendered="true"/>

                            <div class="carousel-caption">
                                <h3>First slide label</h3>

                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <a class="left carousel-control" href="#carousel-product" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-product" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><h3>资质荣誉</h3>
            </div>
        </div>
        <div class="container" id="credit">
            <div class="row">
                <div id="carousel-credit" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php for ($index = 0; $index < count($credits); $index++) { ?>
                            <li data-target="#carousel-product" data-slide-to="<?= $index ?>"
                                class="<?= !empty($credits[$index]['active']) ? 'active' : ''; ?>"></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($credits as $credit) { ?>
                            <div class="item <?= !empty($credit['active']) ? 'active' : ''; ?>">
                                <img src="<?= $credit['image'] ?>" class="img-responsive" data-holder-rendered="true"/>

                                <div class="carousel-caption">
                                    <h3>First slide label</h3>

                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <a class="left carousel-control" href="#carousel-credit" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-credit" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="guoMuFengCai">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><h3>果木风采</h3>
            </div>
        </div>
        <div class="container" id="guoMuFengCai">
            <div class="row">
                <div id="carousel-guoMuFengCai" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php for ($index = 0; $index < count($guoMuFengCais); $index++) { ?>
                            <li data-target="#carousel-guoMuFengCai" data-slide-to="<?= $index ?>"
                                class="<?= !empty($guoMuFengCais[$index]['active']) ? 'active' : ''; ?>"></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($guoMuFengCais as $guoMuFengCai) { ?>
                            <div class="item <?= !empty($guoMuFengCai['active']) ? 'active' : ''; ?>">
                                <img src="<?= $guoMuFengCai['image'] ?>" class="img-responsive"
                                     data-holder-rendered="true"/>

                                <div class="carousel-caption">
                                    <h3>First slide label</h3>

                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <a class="left carousel-control" href="#carousel-guoMuFengCai" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-guoMuFengCai" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="integrated" class="success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><h3>发展历程</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div id="timeline">
                    <ul id="dates">
                        <?php foreach ($histories as $history) { ?>
                            <li><a href="#<?= 'timeline-' . $history['id'] ?>"><?= $history['id'];?></a></li>
                        <?php } ?>
                    </ul>
                    <ul id="issues">
                        <?php foreach ($histories as $history) { ?>
                            <li id="<?= 'timeline-' . $history['id'] ?>">
                                <h1><?= $history['title'] ?></h1>

                                <p><?= $history['content'] ?></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!--            <div class="col-md-6"><img class="img-responsive" src="/image/top.png" width="550"></div>-->
            <!--            <div class="col-md-6">-->
            <!--                <ul class="add text-left">-->
            <!--                    义县东升水果专业合作社成立于2010年5月，是响应上级各级党和政府的号召， 在农民自愿的基础上，由义县张家堡镇一家峪村的一些果树种植户共同组建的农民组织。合作社成立以来，-->
            <!--                    在'精心组织求发展，热忱服务富农民'宗旨下，取得了一些发展。广大社员在取得一定的利益后，更加满怀信心，并为合作社今后的发展献计献策，使得我们更有信心为本乡的经济腾飞作出更大的贡献，-->
            <!--                    义县东升水果专业合作社位于辽西锦州市义县张家堡乡一家峪村，在三零五省道路边，交通便利，通讯网络齐全。我们村三面环山，独特的地理和气候条件，适合我们大力发展果树事业。因此在合作社成立之初我们主要采取大宗农资集体团购-->
            <!--                    取消中间流通环节来让参加合作社的农户在投资上节约成本，农产品集体捆绑销售使得农户产品得到最大的收益的办法，使得合作社农户的收入有了明显的提高，对合作社的发展倍感信心十足。-->
            <!--                </ul>-->
            <!--            </div>-->
        </div>
    </div>
</section>


<section id="dig">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><h3>联系我们</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered">
                    <tr>
                        <td>名　称：
                        </td>
                        <td>
                            义县东升水果专业合作社
                        </td>
                    </tr>
                    <tr>
                        <td>地　址：
                        </td>
                        <td>
                            义县张家堡镇一家峪村
                        </td>
                    </tr>
                    <tr>
                        <td>电　话：
                        </td>
                        <td>
                            0416-7307023
                        </td>
                    </tr>
                    <tr>
                        <td>手　机：
                        </td>
                        <td>
                            13941630378
                        </td>
                    </tr>
                    <tr>
                        <td>传　真：
                        </td>
                        <td>
                            0416-7307023
                        </td>
                    </tr>
                    <tr>
                        <td>邮　箱：
                        </td>
                        <td>
                            2799006140@qq.com
                        </td>
                    </tr>
                    <tr>
                        <td>邮　编：
                        </td>
                        <td>
                            121112
                        </td>
                    </tr>
                    <tr>
                        <td>联系人：
                        </td>
                        <td>
                            商士民
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 版权所有：义县东升水果专业合作社 ICP备案编号：辽ICP备14017603号
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top page-scroll visible-xs visble-sm"><a class="btn btn-primary" href="#page-top"> <i
            class="fa fa-chevron-up"></i> </a></div>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>-->
<!---->
<!--<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->-->
<!--<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<script>
    $(function () {
        $('#timeline').timelinr({
            orientation: 	'vertical',
            issuesSpeed: 	300,
            datesSpeed: 	100,
            arrowKeys: 		'true',
            startAt:		3
        });
    });
</script>
</body>
</html>
