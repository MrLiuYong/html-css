<!DOCTYPE html>
<html>
<head>
    <title>JavaScript 用法</title>
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
    <h1>JavaScript 用法</h1>
    <p>HTML 中的脚本必须位于 &lt;script&gt; 与 &lt;/script&gt; 标签之间。<br>
        脚本可被放置在 HTML 页面的 &lt;body&gt; 和 &lt;head&gt; 部分中。</p>
    <h2>&lt;script&gt; 标签</h2>
    <p>如需在 HTML 页面中插入 JavaScript，请使用  &lt;script&gt; 标签。<br>
    &lt;script&gt; 和 &lt;/script&gt;  会告诉 JavaScript 在何处开始和结束。<br>
     &lt;script&gt; 和 &lt;/script&gt;  之间的代码行包含了 JavaScript:</p>
    <pre class="code">&lt;script&gt;
alert("我的第一个 JavaScript");
&lt;/script&gt;</pre>
    <p class="attention">那些老旧的实例可能会在  &lt;script&gt; 标签中使用 type="text/javascript"。现在已经不必这样做了。JavaScript 是所有现代浏览器以及 HTML5 中的默认脚本语言。</p>

    <h2> &lt;body&gt; 中的 JavaScript </h2>
    <p>在本例中，JavaScript 会在页面加载时向 HTML 的 &lt;body&gt; 写文本：</p>
    <p class="code">&lt;!DOCTYPE html&gt;<br>&lt;html&gt;
&lt;body&gt;
&lt;script&gt;
document.write("&lt;h1&gt;这是一个标题&lt;/h1&gt;");<br>document.write("&lt;p&gt;这是一个段落&lt;/p&gt;");
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</p>

    <h2>JavaScript 函数和事件</h2>
    <p>上面例子中的 JavaScript 语句，会在页面加载时执行。<br>
        通常，我们需要在某个事件发生时执行代码，比如当用户点击按钮时。<br>
        如果我们把 JavaScript 代码放入函数中，就可以在事件发生时调用该函数。<br>
        您将在稍后的章节学到更多有关 JavaScript 函数和事件的知识。</p>

    <h2>在 &lt;head&gt; 或者 &lt;body&gt; 的JavaScript </h2>
    <p>您可以在 HTML 文档中放入不限数量的脚本。<br>
        脚本可位于 HTML 的 &lt;body&gt; 或 &lt;head&gt; 部分中，或者同时存在于两个部分中。<br>
        通常的做法是把函数放入  &lt;head&gt; 部分中，或者放在页面底部。这样就可以把它们安置到同一处位置，不会干扰页面的内容。</p>

    <h2>&lt;head&gt; 中的 JavaScript 函数</h2>
    <p>在本例中，我们把一个 JavaScript 函数放置到 HTML 页面的 &lt;head&gt; 部分。<br>该函数会在点击按钮时被调用：</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;<br>&lt;html&gt;
&lt;head&gt;<br>&lt;script&gt;<br>
function myFunction()
{
document.getElementById("demo").innerHTML="我的第一个 JavaScript 函数";
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;我的 Web 页面&lt;/h1&gt;
&lt;p id="demo"&gt;一个段落&lt;/p&gt;
&lt;button type="button" <span class="marked">onclick="myFunction()"</span>&gt;尝试一下&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>

    <h2>&lt;body&gt; 中的 JavaScript 函数</h2>
    <p>在本例中，我们把一个 JavaScript 函数放置到 HTML 页面的 &lt;body&gt; 部分。<br>该函数会在点击按钮时被调用：</p>
    <pre class="code">&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;body&gt;
&lt;h1&gt;我的 Web 页面&lt;/h1&gt;
&lt;p id="demo"&gt;一个段落&lt;/p&gt;
&lt;button type="button" onclick="<span class="marked">myFunction()</span>"&gt;尝试一下&lt;/button&gt;
&lt;script&gt;
function myFunction()
{
document.getElementById("demo").innerHTML="我的第一个 JavaScript 函数";
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

    <h2>外部的 JavaScript</h2>
    <p>也可以把脚本保存到外部文件中。外部文件通常包含被多个网页使用的代码。<br>
外部 JavaScript 文件的文件扩展名是 .js。<br>
如需使用外部文件，请在 &lt;script&gt; 标签的 "src" 属性中设置该 .js 文件：</p>
<pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;script src=&quot;myScript.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
    <p>你可以将脚本放置于 &lt;head&gt; 或者 &lt;body&gt;中 实际运行效果与您在 &lt;script&gt; 标签中编写脚本完全一致。</p>
    <p>myScript.js  文件代码如下：</p>
<pre class="code">
function myFunction()
{
document.getElementById("demo").innerHTML="我的第一个 JavaScript 函数";
}
</pre>
    <p class="attention">外部脚本不能包含&lt;script&gt; 标签。</p>



</div>
<div class="foot"></div></body>
</html>