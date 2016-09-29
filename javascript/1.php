<!DOCTYPE html>
<html>
<head>
    <title>JavaScript 简介</title>
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
<h1>JavaScript 简介</h1>
    <p>JavaScript 是互联网上最流行的脚本语言，这门语言可用于 HTML 和 web，更可广泛用于服务器、PC、笔记本电脑、平板电脑和智能手机等设备。</p>
    <h2>JavaScript 是脚本语言</h2>
    <p>JavaScript 是一种轻量级的编程语言。<br>
        JavaScript 是可插入 HTML 页面的编程代码。<br>
        JavaScript 插入 HTML 页面后，可由所有的现代浏览器执行。<br>
        JavaScript 很容易学习。</p>

    <h2>JavaScript：直接写入 HTML 输出流</h2>
    <pre class="code">document.write("&lt;h1&gt;这是一个标题&lt;/h1&gt;");<br>document.write("&lt;p&gt;这是一个段落。&lt;/p&gt;");
</pre>

    <h2>JavaScript：对事件的反应</h2>
    <pre class="code">&lt;button type="button" onclick="alert('欢迎!')"&gt;点我!&lt;/button&gt;</pre>

    <h2>JavaScript：改变 HTML 内容</h2>
    <p>使用 JavaScript 来处理 HTML 内容是非常强大的功能。</p>
    <pre class="code">x=document.getElementById("demo")  //查找元素
x.innerHTML="Hello JavaScript";    //改变内容</pre>
    <p>document.getElementById("some id"),这个方法是 HTML DOM 中定义的。<br>
        DOM (Document Object Model)（文档对象模型）是用于访问 HTML 元素的正式 W3C 标准。</p>

    <h2>JavaScript：改变 HTML 样式</h2>
    <p>改变 HTML 元素的样式，属于改变 HTML 属性的变种。</p>
    <pre class="code">x=document.getElementById("demo")  //找到元素
x.style.color="#ff0000";           //改变样式</pre>

    <h2>JavaScript：验证输入</h2>
    <p>JavaScript 常用于验证用户的输入。</p>
    <pre class="code">if isNaN(x) {alert("不是数字")};</pre>

    <h2>JavaScript <strong style="color: red">VS</strong> Java</h2>
    <pre>JavaScript 与 Java 是两种完全不同的语言，无论在概念上还是设计上。
Java（由 Sun 发明）是更复杂的编程语言。

ECMA-262 是 JavaScript 标准的官方名称。
        
JavaScript 由 Brendan Eich 发明。它于 1995 年出现在 Netscape 中（该浏览器已停止更新），并于 1997 年被 ECMA（一个标准协会）采纳。</pre>

</div>
<div class="foot"></div></body>
</html>