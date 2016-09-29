<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript HTML DOM</title>
    <meta charset="utf-8">
    <meta name="keywords" content="javascript,js,css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<div class="nav">
    <ul>

        <li><a id="1" href="1.php">JavaScript简介</a></li>
        <li><a id="2" href="2.php">JavaScript用法</a></li>
        <li><a id="3" href="3.php">JavaScript输出</a></li>
        <li><a id="4" href="4.php">JavaScript语法</a></li>
        <li><a id="5" href="5.php">JavaScript语句</a></li>
        <li><a id="6" href="6.php">JavaScript注释</a></li>
        <li><a id="7" href="7.php">JavaScript变量</a></li>
        <li><a id="8" href="8.php">JavaScript数据类型</a></li>
        <li><a id="9" href="9.php">JavaScript对象</a></li>
        <li><a id="10" href="10.php">JavaScript函数</a></li>
        <li><a id="11" href="11.php">JavaScript作用域</a></li>
        <li><a id="12" href="12.php">JavaScript事件</a></li>
        <li><a id="13" href="13.php">JavaScript字符串</a></li>
        <li><a id="14" href="14.php">JavaScript运算符</a></li>
        <li><a id="15" href="15.php">JavaScript比较</a></li>
        <li><a id="16" href="16.php">JavaScript条件语句</a></li>
        <li><a id="17" href="17.php">JavaScript switch语句</a></li>
        <li><a id="18" href="18.php">JavaScript for循环</a></li>
        <li><a id="19" href="19.php">JavaScript while循环</a></li>
        <li><a id="20" href="20.php">JavaScript跳转语句</a></li>
        <li><a id="21" href="21.php">JavaScript typeof</a></li>
        <li><a id="22" href="22.php">JavaScript类型转换</a></li>
        <li><a id="23" href="23.php">JavaScript正则表达式</a></li>
        <li><a id="24" href="24.php">JavaScript错误</a></li>
        <li><a id="25" href="25.php">JavaScript JSON</a></li>
        <li><a id="26" href="26.php">JavaScript void</a></li>
        <li><a id="27" href="27.php">JavaScript使用误区</a></li>


        <li>JS 函数</li>
        <li><a id="50" href="50.php">JavaScript函数定义</a></li>
        <li><a id="51" href="51.php">JavaScript函数参数</a></li>
        <li><a id="52" href="52.php">JavaScript函数调用</a></li>
        <li><a id="53" href="53.php">JavaScript闭包</a></li>

        <li>JS HTML DOM</li>
        <li><a id="60" href="60.php">JavaScript DOM简介</a></li>
        <li><a id="61" href="61.php">DOM HTML</a></li>
        <li><a id="62" href="62.php">DOM CSS</a></li>
        <li><a id="63" href="63.php">DOM 事件</a></li>
        <li><a id="64" href="64.php">DOM EventListener</a></li>
        <li><a id="65" href="65.php">DOM 元素</a></li>



        <li>参考手册</li>
        <li><a id="91" href="91.php">JavaScript对象</a></li>

    </ul>
</div>
<script src="js/main.js" type="text/javascript"></script>
<div class="contain">
    <h1>javascript HTML DOM</h1>
    <p>通过 HTML DOM，可访问 JavaScript HTML 文档的所有元素。</p>

    <h2>HTML DOM (文档对象模型)</h2>
    <p>当网页被加载时，浏览器会创建页面的文档对象模型（Document Object Model）。<br>
        HTML DOM 模型被构造为对象的树：</p>
    <p><img src="img/pic_htmltree.gif" width="80%"></p>
    <p>通过可编程的对象模型，JavaScript 获得了足够的能力来创建动态的 HTML。</p>
    <ul>
        <li>JavaScript 能够改变页面中的所有 HTML 元素</li>
        <li>JavaScript 能够改变页面中的所有 HTML 属性</li>
        <li>JavaScript 能够改变页面中的所有 CSS 样式</li>
        <li>JavaScript 能够对页面中的所有事件做出反应</li>
    </ul>
    <hr>
    <h2>查找 HTML 元素</h2>
    <p>通常，通过 JavaScript，您需要操作 HTML 元素。</p>
    <p>为了做到这件事情，您必须首先找到该元素。有三种方法来做这件事：</p>
    <ul>
        <li>通过 id 找到 HTML 元素</li>
        <li>通过标签名找到 HTML 元素</li>
        <li>通过类名找到 HTML 元素</li>
    </ul>
    <hr>
    <h2>通过 id 查找 HTML 元素</h2>

    <p>在 DOM 中查找 HTML 元素的最简单的方法，是通过使用元素的 id。</p>
    <p>本例查找 id="intro" 元素：</p>
    <pre class="code">var x=document.getElementById("intro");</pre>
    <p>如果找到该元素，则该方法将以对象（在 x 中）的形式返回该元素。<br>
        如果未找到该元素，则 x 将包含 null。</p>

    <h2>通过标签名查找 HTML 元素</h2>
    <p>本例查找 id="main" 的元素，然后查找 id="main" 元素中的所有 <p> 元素：</p>
    <pre class="code">var x=document.getElementById("main");
var y=x.getElementsByTagName("p");</pre>

    <h2>通过类名找到 HTML 元素</h2>
    <p class="code">var x=document.getElementsByClassName("intro");</p>







</div>
<div class="foot"></div></body>
</html>