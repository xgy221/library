<?php
/**
 * Created by PhpStorm.
 * User: xgy
 * Date: 2017/9/7
 * Time: 9:52
 */

session_start();
$username=@$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>图书馆管理系统</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.bootcss.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .jumbotron {
            background-color: #87CEFF;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }
        .logo-small {
            color: #87CEFF;
            font-size: 50px;
        }
        .logo {
            color: #87CEFF;
            font-size: 200px;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: #87CEFF;
        }
        .carousel-indicators li {
            border-color: #87CEFF;
        }
        .carousel-indicators li.active {
            background-color: #87CEFF;
        }
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }
        .panel {
            border: 1px solid #87CEFF;
            border-radius:0 !important;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-footer .btn:hover {
            border: 1px solid #87CEFF;
            background-color: #fff !important;
            color: #87CEFF;
        }
        .panel-heading {
            color: #fff !important;
            background-color: #87CEFF !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .panel-footer {
            background-color: white !important;
        }
        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #87CEFF;
            color: #fff;
        }
        .navbar {
            margin-bottom: 0;
            background-color: #87CEFF;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #87CEFF !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #87CEFF;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
        .xu-radio {
            margin-top: 8px !important;
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">欢迎您，<?=$username?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#services">功能</a></li>
                <li><a href="#pricing">检索区域</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>图书馆管理系统</h1>
    <p>智能管理图书馆</p>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>功能</h2>
    <br>
    <div class="row slideanim" style="visibility: visible">
        <div class="col-sm-4">
            <a href="../guide.php"><span class="glyphicon glyphicon-off logo-small"></span></a>
            <h4><a href="../guide.php">入馆指南</a></h4>
            <p>本馆概况，开放时间，使用规则..</p>
        </div>
        <div class="col-sm-4">
            <a href="../service.php"><span class="glyphicon glyphicon-heart logo-small"></span></a>
            <h4><a href="../service.php">读者服务</a></h4>
            <p>网上荐书，查找资料，参考咨询..</p>
        </div>
        <div class="col-sm-4">
            <a href="../search.php"><span class="glyphicon glyphicon-search logo-small"></span></a>
            <h4><a href="../search.php">查找资料</a></h4>
            <p>书刊信息查询，电子资源..</p>
        </div>
    </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>检索区域</h2>
        <h4>在本区域查找自己想要的书籍</h4>
    </div>
    <form class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <div class="col-md-10">
                <input type="text" class="form-control" size="50" placeholder="请输入检索内容" required>
            </div>
            <button type="button" class="btn btn-info pull-right col-md-2">检索</button>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="radio-inline"><input type="radio" class="xu-radio" checked="checked" name="strSearchType" value="title" />标题</label>
                <label class="radio-inline"><input type="radio" class="xu-radio" name="strSearchType" value="author" />作者</label>
                <label class="radio-inline"><input type="radio" class="xu-radio" name="strSearchType" value="keyword" />关键词</label>
                <label class="radio-inline"><input type="radio" class="xu-radio" name="strSearchType" value="callno" />索书号</label>
                <label class="radio-inline"><input type="radio" class="xu-radio" name="strSearchType" value="publisher" />出版社</label>
                <label class="radio-inline"><input type="radio" class="xu-radio" name="strSearchType" value="isbn"/>ISBN/ISSN</label>
            </div>
        </div>
    </form>

<!--    <div>-->
<!--        <div class="sinput">-->
<!--            <input type="text" name="strText" id="strText" class="txt" />-->
<!--            <input type="button" value="" onClick="searchBook();" class="reset"/>-->
<!--        </div>-->
<!--        <div class="sradio">-->
<!--            <label><input type="radio" checked="checked" name="strSearchType" value="title" />标题</label>-->
<!--            <label><input type="radio" name="strSearchType" value="author" />作者</label>-->
<!--            <label><input type="radio" name="strSearchType" value="keyword" />关键词</label>-->
<!--            <label><input type="radio" name="strSearchType" value="callno" />索书号</label>-->
<!--            <label><input type="radio" name="strSearchType" value="publisher" />出版社</label>-->
<!--            <label><input type="radio" name="strSearchType" value="isbn"/>ISBN/ISSN</label>-->
<!---->
<!--        </div>-->
<!--    </div>-->
</div>

<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>图书管理系统 <a href="../homepage.php" title="Visit w3schools">localhost</a></p>
</footer>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>

