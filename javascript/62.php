<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript HTML DOM - 改变CSS</title>
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
    <h1>javascript HTML DOM - 改变CSS</h1>
    <p>HTML DOM 允许 JavaScript 改变 HTML 元素的样式。</p>

    <h2>改变 HTML 样式</h2>
    <p>如需改变 HTML 元素的样式，请使用这个语法：</p>
    <p class="code">document.getElementById(id).style.property=新样式</p>
    <pre class="code">
&lt;html&gt;
&lt;body&gt;

&lt;p id=&quot;p2&quot;&gt;Hello World!&lt;/p&gt;

&lt;script&gt;
document.getElementById(&quot;p2&quot;).style.color=&quot;blue&quot;;
&lt;/script&gt;

&lt;p&gt;以上段落通过脚本修改。&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;    </pre>
    <h2>使用事件</h2>
    <p>HTML DOM 允许我们通过触发事件来执行代码。</p>
    <p>比如以下事件：</p>
    <ul>
        <li>元素被点击。</li>
        <li>页面加载完成。</li>
        <li>输入框被修改。</li>
        <li>……</li>
    </ul>
    <p>在接下来的章节，你会学到更多关于事件的知识。</p>
    <p>本例改变了 id="id1" 的 HTML 元素的样式，当用户点击按钮时：</p>

    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1 id=&quot;id1&quot;&gt;我的标题 1&lt;/h1&gt;
&lt;button type=&quot;button&quot; 
onclick=&quot;document.getElementById('id1').style.color='red'&quot;&gt;
点我!&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;    </pre>
    





</div>
<div class="foot"></div></body>
</html>