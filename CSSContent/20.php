<!DOCTYPE html>
<html>
<head>
    <title>CSS元素选择器</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS元素选择器</h1>
    <h2>CSS元素选择器</h2>
    <p>最常见的 CSS 选择器是元素选择器。换句话说，文档的元素就是最基本的选择器。</p>
    <p>如果设置 HTML 的样式，选择器通常将是某个 HTML 元素，比如 p、h1、em、a，甚至可以是 html 本身：</p>
    <p class="code" style="white-space: pre-line">
        html {color:black;}
        h1 {color:blue;}
        h2 {color:silver;}
    </p>

    <h2>类型选择器</h2>
    <p>在 W3C 标准中，元素选择器又称为类型选择器（type selector）。<br>“类型选择器匹配文档语言元素类型的名称。类型选择器匹配文档树中该元素类型的每一个实例。”<br>下面的规则匹配文档树中所有 h1 元素：</p>
    <p class="code">
        h1 {font-family: sans-serif;}
    </p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>