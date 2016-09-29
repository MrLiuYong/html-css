<!DOCTYPE html>
<html>
<head>
    <title>CSS id和class</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" type="text/css" rel="stylesheet">
    <style>
        #name {
            color: green;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-23 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
<h1>CSS id和class</h1>
    <p>如果你要在HTML元素中设置CSS样式，你需要在元素中设置<q>id</q>和<q>class</q>选择器</p>
    <h2>id选择器</h2>
    <p>id选择器可以为标有特点id的HTML元素指定特定的样式。<br>HTML元素以id属性来设置id选择器，CSS中id选择器以<q>#</q>来定义，如：</p>
    <pre class="code">
    #name {
        color: green;
    }
    &lt;p id="name"&gt;小明&lt;/p&gt;
    </pre>
    <p id="name" class="code">小明</p>
    <p><span>注：</span>id不要以数字开头，数字开头的id在Mozilla，FireFox浏览器中不起作用。<br>在同一个页面里面，HTML元素的id不能相同</p>

    <h2>class选择器</h2>
    <p>class选择器用于描述一组元素的样式。class选择器有别于id选择器，class可以在多个元素中使用。<br>class选择器在HTML中以class属性表示。<br>在CSS中，类选择器以一个点<q>.</q>号显示，如：</p>
    <pre class="code">
    .green {
        color: green;
    }
    &lt;p class="green"&gt;这是一段绿色字体&lt;/p&gt;
    </pre>
    <p class="code green">这是一段绿色字体</p>
</div>

</body>
</html>
