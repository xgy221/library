<?php
/**
 * Created by PhpStorm.
 * User: xgy
 * Date: 2017/9/12
 * Time: 14:14
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
</head>
<body>

<div class="container">
    <a href="#" class="list-group-item active">入馆指南</a>
    <div class="col-sm-2">
        <div class="list-group" style="margin-bottom: 0px">
                <a href="general_situation.html" target="menuFrame" class="list-group-item">本馆概况</a>
                <a href="work_time.html" target="menuFrame" class="list-group-item">开放时间</a>
                <a href="rule.html" target="menuFrame" class="list-group-item">使用规则</a>
                <a href="guider.html" target="menuFrame" class="list-group-item">快速使用指南</a>
        </div>
        <div>
            <img src="decoration.png" class="img-responsive" >
        </div>
    </div>
    <div class="col-sm-10">
            <script type="text/javascript">
                function SetCwinHeight(obj) {
                    var cwin = obj;
                    if (document.getElementById) {
                        if (cwin && !window.opera) {
                            if (cwin.contentDocument && cwin.contentDocument.body.offsetHeight)
                                cwin.height = cwin.contentDocument.body.offsetHeight + 20; //FF NS
                            else if (cwin.Document && cwin.Document.body.scrollHeight)
                                cwin.height = cwin.Document.body.scrollHeight + 10; //IE
                        }
                        else {
                            if (cwin.contentWindow.document && cwin.contentWindow.document.body.scrollHeight)
                                cwin.height = cwin.contentWindow.document.body.scrollHeight; //Opera
                        }
                    }
                }
            </script>
            <iframe id="menuFrame" name="menuFrame" src="general_situation.html"
                    style="overflow:visible;" scrolling="no"
                    frameborder="no" width="100%" height="100%; float:left"
                    onload="SetCwinHeight(this)"
            >
            </iframe>
    </div>
</div>
</body>
</html>

