<?php
/**
 * Created by PhpStorm.
 * User: xgy
 * Date: 2017/9/15
 * Time: 9:54
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
    <a href="#" class="list-group-item active">查找资源</a>
    <div class="col-sm-2">
        <div class="list-group" style="margin-bottom: 0px">
            <a href="#" class="list-group-item">书刊信息查询</a>
            <a href="#" class="list-group-item">电子资源</a>
        </div>
        <div>
            <img src="decoration1.png" class="img-responsive" >
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
    </div>
</div>
</body>
</html>

