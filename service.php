<?php
/**
 * Created by PhpStorm.
 * User: xgy
 * Date: 2017/9/15
 * Time: 9:52
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>图书馆管理系统</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.bootcss.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .list-group-item.active,
        .list-group-item.active:hover,
        .list-group-item.active:focus {
            z-index: 2;
            color: #fff;
            background-color: #87CEFF;
            border-color: #87CEFF;
        }
        .container{
            padding-left: 0;
            padding-right: 0;
            height:100%;
            width:100%;
        }
        .col-sm-2{
            padding-left: 0;
            height: auto!important;
        }
        .list-group-item:first-child {
            border-top-left-radius:0;
            border-top-right-radius: 0;
        }
        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .img-responsive{
            height:100%;
        }

    </style>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?73c27e26f610eb3c9f3feb0c75b03925";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>

<div class="container">
    <a href="#" class="list-group-item active">读者服务</a>
    <div class="col-sm-2">
        <div class="list-group" style="margin-bottom: 0px">
            <a href="#" class="list-group-item">网上荐书</a>
            <a href="#" class="list-group-item">查找资料</a>
            <a href="#" class="list-group-item">参考咨询</a>
        </div>
        <div>
            <img src="decoration.png" class="img-responsive" >
        </div>
    </div>
    <div class="col-sm-10">
        <p></p>
        <p>图书馆成立于1956年原江苏粮食学校图书馆，有着50年的文献收藏历史和经验。
            八十年代先后更名为南京粮食经济学院图书馆、南京经济学院图书馆。
            2000年三校合并，组建成南京财经大学图书馆。图书馆以仙林新馆建设为契机，
            紧跟学校改革和发展的形势需要，加强基础业务和现代化建设，优化人力资源结构，
            不断探索多校区办学条件下图书馆最大限度满足师生读者需求的服务模式，
            提出了把该馆建设成一个特色鲜明的、网络化的、开放的经济管理类的“文献信息资源中心”、
            “文献传递中心”、以及“教学与科研服务并重，共同发展”的“知识管理中心”和“素质教育基地”
            的发展方向和工作总目标。</p>
        <p>目前图书馆总建筑面积达41600平方米，网络千兆主干，百兆到桌面；有线信息点2088个；
            无线信息接受点15个；存储容量11TB。纸本文献总量162.28万册。电子图书60万册、数据及资料库48个、
            除与CALIS 42个学科导航链接外，自建学科导航8个，阅览座位3898个。图书馆功能齐全、馆藏资源特色鲜明、
            各种动线布局科学合理、技术设施先进高效、阅读环境优雅舒适。图书馆已全面实行开放的“藏、借、还、阅、询、
            查”一体化的管理与服务。</p>
    </div>
</div>
</body>
</html>

