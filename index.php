<?php
include_once "base.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>┌精品電子商務網站」</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/js.js"></script>
    <script src="./js/jquery-3.4.1.js"></script>

</head>

<body>
    <iframe name="back" style="display:none;"></iframe>
    <div id="main">
        <div id="top">
            <a href="?">
                <img src="./icon/0416.jpg">
            </a>
            <div style="padding:10px;">
                <a href="?">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |
                <?php
                if(isset($_SESSION['classb_4_mem'])){
                    echo "<a href='#' onclick=logout('classb_4_mem')>會員登出</a> |"; // onclick='logout('table')' 兩層單引號的問題:在php內寫echo前html的功能, 可拿到onclick包的那層單引號
                }else{
                    echo "<a href='?do=login'>會員登入</a> |";
                }
                
                if(isset($_SESSION['classb_4_admin'])){
                    echo "<a href='#' onclick=location.href='back.php'>返回管理</a>";
                }else{
                    echo "<a href='?do=admin'>管理登入</a>";
                }
                
                ?>
                
            </div>
            <marquee>
                情人節特惠活動 &nbsp; 年終特賣會開跑了
            </marquee>
        </div>
        <div id="left" class="ct">
            <div style="min-height:400px;">
            <a href="#">全部商品(8)</a>
            </div>
            <span>
                <div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                    00005 </div>
            </span>
        </div>
        <div id="right">
                <?php
                $do=$_GET['do']??'main';
                $file="./front/".$do.".php";
                if(file_exists($file)){
                        include_once $file;
                }else{
                        include_once "./front/main.php";
                }
                ?>
        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
            <?=$Bot->find(1)['bot'];?>
        </div>
    </div>

</body>

</html>