<!DOCTYPE html>
<html>
<head>
    <title>CSS盒子模型</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        .test {
            width: 70px;
            background-color: yellow;
            padding: 5px;
            margin: 10px;
            //border: solid 5px green;
            display: inline-block;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 09:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
<h1>CSS盒子模型(Box Model)</h1>
    <p>所有的HTML元素都可以看作盒子。在CSS中，“box model”这一术语是用来设计和布局使用。<br>CSS盒模型本质上是一个盒子，封装周围的HTML元素，它包括：边距，边框，填充，和实际内容。<br>盒模型允许我们在其他元素和周围元素边框之间的空间放置元素。如图：</p>
    <img src="img/box.png">
    <p>不同部分说明：</p>
    <ul>
        <li><strong>margin(外边距)</strong> - 围绕在元素边框的空白区域，外边距是透明的</li>
        <li><strong>border(边框)</strong> - 围绕元素内容和内边距的一条或多条线</li>
        <li><strong>padding(内边距)</strong> - 在边框和内容区域之间，定义元素边框与元素内容之间的空白区域，内边距是透明的</li>
        <li><strong>content(内容)</strong> - 盒子的实际内容</li>
    </ul>
    <p>元素框的最内部分是实际的内容，直接包围内容的是内边距。内边距呈现了元素的背景，内边距的边缘是边框。边框以外是外边框，外边距默认是透明的，因此不会遮挡其后的任何元素。<br>背景应用于由内容和内边距、边框组成的区域。</p>

    <h2>盒子的尺寸</h2>
    <p>增加内边距，边框和外边距不会影响内容区域的尺寸，但是会增加元素框的总尺寸。</p>
    <p>假设边框的每个边上有10个像素的外边框和5个像素的内边距，如果希望这个元素框达到100个像素，就需要将内容的宽度设置为70像素，如图：</p>
    <img src="img/box-size.png"><br>

    <div class="test"></div>
</div>
<?php require_once 'foot.php';?>
</body>
</html>