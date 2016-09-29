<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript HTML DOM 事件</title>
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
    <h1>javascript HTML DOM 事件</h1>

    <h2>对事件做出反应</h2>
    <p>我们可以在事件发生时执行 JavaScript，比如当用户在 HTML 元素上点击时。</p>

    <p>如需在用户点击某个元素时执行代码，请向一个 HTML 事件属性添加 JavaScript 代码：</p>
    <p class="code">onclick=JavaScript</p>
    <p>HTML 事件的例子：</p>

    <ul>
        <li>当用户点击鼠标时</li>
        <li>当网页已加载时</li>
        <li>当图像已加载时</li>
        <li>当鼠标移动到元素上时</li>
        <li>当输入字段被改变时</li>
        <li>当提交 HTML 表单时</li>
        <li>当用户触发按键时</li>
    </ul>

    <p>在本例中，当用户在  &lt;h1&gt; 元素上点击时，会改变其内容：</p>

    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h1 onclick=&quot;this.innerHTML='Ooops!'&quot;&gt;点击文本!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;    </pre>

    <p>本例从事件处理器调用一个函数：</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function changetext(id)
{
    id.innerHTML=&quot;Ooops!&quot;;
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1 onclick=&quot;changetext(this)&quot;&gt;点击文本!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;    </pre>

    <h2>HTML 事件属性</h2>
    <p>如需向 HTML 元素分配 事件，您可以使用事件属性。</p>
    <p class="code">&lt;button onclick="displayDate()"&gt;点这里&lt;/button&gt;</p>

    <h2>使用 HTML DOM 来分配事件</h2>
    <p>HTML DOM 允许您使用 JavaScript 来向 HTML 元素分配事件</p>
    <pre class="code">
&lt;script&gt;
document.getElementById(&quot;myBtn&quot;).onclick=function(){displayDate()};
&lt;/script&gt;    </pre>
    <p>在上面的例子中，名为 displayDate 的函数被分配给 id=myButn" 的 HTML 元素。
        按钮点击时Javascript函数将会被执行。</p>

    <h2>onload 和 onunload 事件</h2>
    <p>onload 和 onunload 事件会在用户进入或离开页面时被触发。</p>

    <p>onload 事件可用于检测访问者的浏览器类型和浏览器版本，并基于这些信息来加载网页的正确版本。</p>

    <p>onload 和 onunload 事件可用于处理 cookie。</p>

    <p class="code">&lt;body onload="checkCookies()"&gt;</p>

    <h2>onchange 事件</h2>
    <p>onchange 事件常结合对输入字段的验证来使用。
        下面是一个如何使用 onchange 的例子。当用户改变输入字段的内容时，会调用 upperCase() 函数。</p>
    <p class="code">&lt;input type="text" id="fname" onchange="upperCase()"&gt;</p>

    <h2>onmouseover 和 onmouseout 事件</h2>
    <p>onmouseover 和 onmouseout 事件可用于在用户的鼠标移至 HTML 元素上方或移出元素时触发函数。</p>

    <h2>onmousedown、onmouseup 以及 onclick 事件</h2>
    <p>onmousedown, onmouseup 以及 onclick 构成了鼠标点击事件的所有部分。首先当点击鼠标按钮时，会触发 onmousedown 事件，当释放鼠标按钮时，会触发 onmouseup 事件，最后，当完成鼠标点击时，会触发 onclick 事件。</p>




</div>
<div class="foot"></div></body>
</html>