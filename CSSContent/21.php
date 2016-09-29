<!DOCTYPE html>
<html>
<head>
    <title>CSS选择器分组</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS选择器分组</h1>
    <h2>选择器分组</h2>
    <p>假设希望 h2 元素和段落都有灰色。为达到这个目的，最容易的做法是使用以下声明：</p>
    <p class="code">h2, p {color:gray;}</p>
    <p>将 h2 和 p 选择器放在规则左边，然后用逗号分隔，就定义了一个规则。其右边的样式（color:gray;）将应用到这两个选择器所引用的元素。逗号告诉浏览器，规则中包含两个不同的选择器。如果没有这个逗号，那么规则的含义将完全不同。</p>
    <p>可以将任意多个选择器分组在一起，对此没有任何限制。<br>例如，如果您想把很多元素显示为灰色，可以使用类似如下的规则：</p>
    <p class="code">body, h2, p, table, th, td, pre, strong, em {color:gray;}</p>

    <p>以下的两组规则能得到同样的结果，不过可以很清楚地看出哪一个写起来更容易：</p>
    <p class="code" style="white-space: pre-line">
        /* no grouping */
        h1 {color:blue;}
        h2 {color:blue;}
        h3 {color:blue;}
        h4 {color:blue;}
        h5 {color:blue;}
        h6 {color:blue;}

        /* grouping */
        h1, h2, h3, h4, h5, h6 {color:blue;}
    </p>

    <h2>通配符选择器</h2>
    <p>CSS2 引入了一种新的简单选择器 - 通配选择器（universal selector），显示为一个星号（*）。该选择器可以与任何元素匹配，就像是一个通配符。</p>
    <p>例如，下面的规则可以使文档中的每个元素都为红色：</p>
    <p class="code">* {color:red;}</p>

</div>
<?php require_once 'foot.php';?>
</body>
</html>