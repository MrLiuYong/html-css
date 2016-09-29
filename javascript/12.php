<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 事件</title>
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
    <h1>JavaScript 事件</h1>
    <p>HTML 事件是发生在 HTML 元素上的事情。
        当在 HTML 页面中使用 JavaScript 时， JavaScript 可以触发这些事件。</p>
    <h2>HTML 事件</h2>
    <p>HTML 事件可以是浏览器行为，也可以是用户行为。<br>
        以下是 HTML 事件的实例：</p>
    <ul>
        <li> HTML 页面完成加载</li>
        <li> HTML input 字段改变时</li>
        <li> HTML 按钮被点击</li>
    </ul>
    <p>通常，当事件发生时，你可以做些事情。<br>
        在事件触发时 JavaScript 可以执行一些代码。<br>
        HTML 元素中可以添加事件属性，使用 JavaScript 代码来添加 HTML 元素。<br>
        单引号:</p>
    <pre class="code">&lt;some-HTML-element some-event='some JavaScript'&gt;</pre>
    <p>双引号:</p>
    <pre class="code">&lt;some-HTML-element some-event="some JavaScript"&gt;</pre>
    <p>在以下实例中，按钮元素中添加了 onclick 属性 (并加上代码):</p>
    <pre class="code">&lt;button onclick='getElementById("demo").innerHTML=Date()'&gt;现在的时间是??&lt;/button&gt;</pre>
    <p>以上实例中，JavaScript 代码将修改 id="demo" 元素的内容。<br>
        在下一个实例中，代码将修改自身元素的内容 (使用 this.innerHTML):</p>
    <pre class="code">&lt;button onclick="this.innerHTML=Date()"&gt;现在的时间是?&lt;/button&gt;</pre>

    <h2>常见的HTML事件</h2>
    <p>下面是一些常见的HTML事件的列表:</p>
    <table>
        <tr>
            <th>事件</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>onchange</td>
            <td> HTML 元素改变</td>
        </tr>
        <tr>
            <td>onclick</td>
            <td>用户点击 HTML 元素</td>
        </tr>
        <tr>
            <td>onmouseover</td>
            <td>用户在一个HTML元素上移动鼠标</td>
        </tr>
        <tr>
            <td>onmouseout</td>
            <td>用户从一个HTML元素上移开鼠标</td>
        </tr>
        <tr>
            <td>onkeydown</td>
            <td>用户按下键盘按键</td>
        </tr>
        <tr>
            <td>onload</td>
            <td>浏览器已完成页面的加载</td>
        </tr>
    </table>

    <h2>JavaScript 可以做什么?</h2>
    <p>事件可以用于处理表单验证，用户输入，用户行为及浏览器动作:</p>
    <ul>
        <li>页面加载时触发事件</li>
        <li>页面关闭时触发事件</li>
        <li>用户点击按钮执行动作</li>
        <li>验证用户输入内容的合法性</li>
        <li>等等 ...</li>
    </ul>
    <p>可以使用多种方法来执行 JavaScript 事件代码：</p>
    <ul>
        <li>HTML 事件属性可以直接执行 JavaScript 代码</li>
        <li>HTML 事件属性可以调用 JavaScript 函数</li>
        <li>你可以为 HTML 元素指定自己的事件处理程序</li>
        <li>你可以阻止事件的发生。</li>
        <li>等等 ...</li>
    </ul>



</div>
<div class="foot"></div></body>
</html>