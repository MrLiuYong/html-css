<!DOCTYPE html>
<html>
<head>
    <title>CSS外边距合并</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        .div1 {
            width: 100px;
            height: 100px;
            margin-top: 10px;
            margin-bottom: 20px;
            background-color: green;
        }
        .outer {
            width: 300px;
            height: 200px;
            background-color: #e6e6e6;
            margin-top: 20px;
        }
        .inner {
            width: 100px;
            height: 100px;
            background-color: yellow;
            margin-top: 10px;
        }
        .kong {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .inline {
            width: 100px;
            height: 100px;
            margin: 20px;
            background-color: red;
            display: inline-block;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-26 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS外边距合并</h1>
    <p>外边距合并指的是，当两个垂直外边距的元素相遇时，它们将形成一个外边距。<br>合并后的外边距的高度等于两个发生合并的外边距的高度中的较大者。</p>

	<h2>外边距合并</h2>
    <p>当一个元素出现在另一个元素上面时，第一个元素的下边距与第二个元素的上边距会发生合并，如图：</p>
    <img src="img/hebing.gif">

    <div class="div1"></div>
    <div class="div1" style="background-color: red;"></div>

    <p class="code">这是一个演示段落</p>
    <p class="code">这是二个演示段落</p>

    <p>当一个元素包含在另一个元素中（假设没有内边距或边框把外边距分隔开），它们的上和（或）下外边距也会发生合并，如图：</p>
    <img src="img/hebing2.gif">
    
    <div class="outer">
        <div class="inner"></div>
    </div>

    <br>
    <p>假设有一个空元素，它有外边距，但是没有边框或填充，在这种情况下，上外边距与下外边距就碰到了一起，它们会发生合并，如图：</p>
    <img src="img/hebing3.gif">

    <div class="kong"></div>

    <p>如果这个外边距遇到另一个元素的外边距，它还会发生合并，如图：</p>
    <img src="img/hebing4.gif">

    <p>这就是一系列的段落元素占用空间非常小的原因。因为它们的所有外边距都会合并到一起，形成了一个小的外边距。</p>

    <p><span>注：</span>只有普通文档流中块框的垂直外边距才会发生外边距合并。行内框、浮动框或绝对定位之间的外边距不会合并。</p>


    <div class="inline"></div>
    <div class="inline"></div>
</div>
<?php require_once 'foot.php';?>
</body>
</html>