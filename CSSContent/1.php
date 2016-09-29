<!DOCTYPE html>
<html>
<head>
    <title>CSS语法</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-23 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS语法</h1>
    <h2>CSS语法</h2>
    <p>CSS规则由两个主要的部分构成：选择器，以及一条或多条声明，如：<br><img src="img/css.gif"><br>
    选择器通常是您需要改变样式的HTML元素。<br>每条声明由一个属性和一个值组成。<br>属性是希望设置的样式属性，每个属性有一个值属性和值被冒号分开。
    </p>

    <p>CSS声明总是以分号(;)结束，声明组以大括号括起来，如：</p>
    <p class="code">
        p {color: red;font-size:16px;padding:5px}
    </p>
    <p>为了让CSS可读性更强，你可以每行只描述一个属性，如：</p>
    <pre class="code">
    p {
        color: red;
        font-size:16px;
        padding:5px
    }
    </pre>

    <h2>CSS注释</h2>
    <p>注释是用来结束你的代码，并且可以随意编辑，浏览器会忽略它。<br>CSS注释使用 /* 注释内容  */</p>
    <pre class="code">
    p {
        color: red;
        font-size:16px;
        padding:5px; /* 内边距 */
        /* margin: 5px; */
    }
    </pre>
    <p>当然，也可以使用双斜杠进行注释(//)</p>
    <pre class="code">
    p {
        //color: red;
        font-size:16px;
        padding:5px; /* 内边距 */
        /* margin: 5px; */
    }
    </pre>
    <p><span>注：</span>谨慎使用双斜杠，当css文件被压缩成一行，当有双斜杠注释时，双斜杠后面的内容都会被忽略，从而导致错误。</p>
</div>
</body>
</html>