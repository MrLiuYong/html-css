<!DOCTYPE html>
<html>
<head>
    <title>JavaScript 输出</title>
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
    <h1>JavaScript 输出</h1>

    <h2>JavaScript 显示数据</h2>
    <p>JavaScript 可以通过不同的方式来输出数据：</p>
    <ul>
        <li>使用 window.alert() 弹出警告框。</li>
        <li>使用 document.write() 方法将内容写到 HTML 文档中</li>
        <li>使用 innerHTML 写入到 HTML 元素</li>
        <li>使用 console.log() 写入到浏览器的控制台</li>
    </ul>

    <h2>使用 window.alert()</h2>
    <p>你可以弹出警告框来显示数据：</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;我的第一个页面&lt;/h1&gt;
&lt;p&gt;我的第一个段落。&lt;/p&gt;
&lt;script&gt;
window.alert(5 + 6);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;    </pre>

    <h2>操作 HTML 元素</h2>
    <p>如需从 JavaScript 访问某个 HTML 元素，您可以使用 document.getElementById(id) 方法。<br>
        请使用 "id" 属性来标识 HTML 元素，并 innerHTML 来获取或插入元素内容：</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;我的第一个 Web 页面&lt;/h1&gt;
&lt;p id=&quot;demo&quot;&gt;我的第一个段落&lt;/p&gt;
&lt;script&gt;
document.getElementById(&quot;demo&quot;).innerHTML = &quot;段落已修改。&quot;;
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;    </pre>
    <p>以上 JavaScript 语句（在 &lt;script&gt; 标签中）可以在 web 浏览器中执行：<br>
            document.getElementById("demo") 是使用 id 属性来查找 HTML 元素的 JavaScript 代码 。<br>
            innerHTML = "段落已修改。" 是用于修改元素的 HTML 内容(innerHTML)的 JavaScript 代码。</p>

    <h2>写到 HTML 文档</h2>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;我的第一个 Web 页面&lt;/h1&gt;
&lt;p&gt;我的第一个段落。&lt;/p&gt;
&lt;script&gt;
document.write(Date());
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
    <p class="attention">如果在文档已完成加载后执行 document.write，整个 HTML 页面将被覆盖。</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;我的第一个 Web 页面&lt;/h1&gt;
&lt;p&gt;我的第一个段落。&lt;/p&gt;
&lt;button onclick=&quot;myFunction()&quot;&gt;点我&lt;/button&gt;
&lt;script&gt;
function myFunction() {
   	document.write(Date());
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;    </pre>

    <h2>写到控制台</h2>
    <p>如果您的浏览器支持调试，你可以使用 console.log() 方法在浏览器中显示 JavaScript 值。<br>
        浏览器中使用 F12 来启用调试模式， 在调试窗口中点击 "Console" 菜单。</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1&gt;我的第一个 Web 页面&lt;/h1&gt;
&lt;script&gt;
a = 5;
b = 6;
c = a + b;
console.log(c);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
    </pre>

</div>
<div class="foot"></div></body>
</html>