<!DOCTYPE html>
<html>
<head>
    <title>CSS链接</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 09:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
<h1>CSS链接</h1>
    <h2>链接样式</h2>
    <p>链接的样式，可以用任何CSS属性（如颜色，字体，背景等）。<br>特别的链接，可以有不同的样式，这取决于他们是什么状态。<br>链接的四个状态：</p>
    <ul>
        <li><strong>a:link</strong> - 正常，未访问过的链接</li>
        <li><strong>a:visited</strong> - 用户已经访问过的链接</li>
        <li><strong>a:hover</strong> - 当用户鼠标放在链接上时</li>
        <li><strong>a:active</strong> - 链接被点击的那一刻</li>
    </ul>
    <p>当设置为若干链路状态的样式，也有一些顺序规则：</p>
    <ul>
        <li>a:hover 必须在a:link和a:visited后面</li>
        <li>a:active 必须在a:hover后面</li>
    </ul>
</div>
<?php require_once 'foot.php';?>
</body>
</html>
