<!DOCTYPE html>
<html>
<head>
    <title>CSS 图像透明度</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        .opcacityhover img{
            opacity: 0.4;
            filter: alpha(opacity=40);
        }
        .opcacityhover img:hover{
            opacity: 1;
            filter: alpha(opacity=100);
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS 图像透明度</h1>
    <h2>实例 1 - 创建透明图像</h2>
    <p>定义透明效果的 CSS3 属性是 opacity。</p>
    <p>首先，我们将展示如何通过 CSS 来创建透明图像。<br></p>
    <p>
        <img src="img/6.png" width="500">
    </p>
    <p>带有透明度的相同图像：</p>
    <p>
        <img src="img/6.png" width="500" style="opacity: 0.4;filter:alpha(opacity=40);">
    </p>

    <p>请看下面的 CSS：</p>
    <pre class="code">img
{
    opacity:0.4;
    filter:alpha(opacity=40); /* 针对 IE8 以及更早的版本 */
}</pre>

    <p>IE9, Firefox, Chrome, Opera 和 Safari 使用属性 opacity 来设定透明度。opacity 属性能够设置的值从 0.0 到 1.0。值越小，越透明。<br>
        IE8 以及更早的版本使用滤镜 filter:alpha(opacity=x)。x 能够取的值从 0 到 100。值越小，越透明。</p>

    <h2>实例 2 - 图像透明度 - Hover 效果</h2>
    <p>请把鼠标指针移动到图像上：</p>
    <p class="opcacityhover">
        <img src="img/6.png" width="500">
    </p>
    <p>CSS 是这样的：</p>
    <pre class="code">
.opcacityhover img{
    opacity: 0.4;
    filter: alpha(opacity=40);
}
.opcacityhover img:hover{
    opacity: 1;
    filter: alpha(opacity=100);
}
    </pre>

    <h2>实例 3 - 透明框中的文本</h2>
    <p><a href="example/opacity.html" target="_blank">实例</a></p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>