<!DOCTYPE html>
<html>
<head>
    <title>CSS显示</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        .father1, .father2, .father3 {
            display: inline-block;
        }
        .div1, .div2, .div3 {
            width: 100px;
            height: 100px;
        }
        .div1 {
            background-color: red;
        }
        .div2 {
            background-color: green;
        }
        .div3 {
            background-color: blue;
        }
        .father2 .div2 {
            display: none;
        }
        .father3 .div2 {
            visibility: hidden;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-26 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS显示</h1>
    <h2>CSS display(显示) 与 visibility(可见性)</h2>
    <p>display属性设置一个元素应如何显示，visibility属性指定一个元素应可见还是隐藏。</p>

    <h2>隐藏元素：display:none或visibility:hidden</h2>
    <p>隐藏一个元素，可以通过吧display属性设置为“none”，或把visibility属性设置为“hidden”，但是请注意，这两种方法会产生不同的结果。</p>

    <p>display:none可以隐藏某个元素，且隐藏的元素不会占用任何空间，也就是说，该元素不但被隐藏了，而且该元素原本占用的空间也会从页面布局中消失。</p>

    <p>visibility:hidden可以隐藏某个元素，但隐藏的元素仍需占用与隐藏之前的空间，也就是说，该元素虽然被隐藏了看看，但仍然会影响布局。</p>

    <p>如下图，第一列为不加显示样式，第二列为display:none，第三列为visibility:hidden</p>
    <div class="father1">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
    </div>
    <div class="father2">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
    </div>
    <div class="father3">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
    </div>


</div>
<?php require_once 'foot.php';?>
</body>
</html>