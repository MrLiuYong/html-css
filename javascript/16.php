<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 条件语句</title>
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
    <h1>JavaScript If...Else 语句</h1>
    <p>条件语句用于基于不同的条件来执行不同的动作。</p>
    <h2>条件语句</h2>
    <p>通常在写代码时，您总是需要为不同的决定来执行不同的动作。您可以在代码中使用条件语句来完成该任务。</p>
    <p>在 JavaScript 中，我们可使用以下条件语句：</p>

    <ul>
        <li><strong>if 语句</strong> - 只有当指定条件为 true 时，使用该语句来执行代码</li>
        <li><strong>if...else 语句</strong> - 当条件为 true 时执行代码，当条件为 false 时执行其他代码</li>
        <li><strong>if...else if....else 语句</strong>- 使用该语句来选择多个代码块之一来执行</li>
        <li><strong>switch 语句</strong> - 使用该语句来选择多个代码块之一来执行</li>
    </ul>
    <hr>
    <h2>If 语句</h2>
    <p>只有当指定条件为 true 时，该语句才会执行代码。</p>

    <h3>语法</h3>
    <pre class="code">if (condition)
{
    当条件为 true 时执行的代码
}</pre>
    <p><strong>请使用小写的 if。使用大写字母（IF）会生成 JavaScript 错误！</strong></p>

    <p>当时间小于 20:00 时，生成问候 "Good day"：</p>
    <pre class="code">if (time<20)
{
    x="Good day";
}</pre>
    <p>请注意，在这个语法中，没有 ..else..。您已经告诉浏览器只有在指定条件为 true 时才执行代码。</p>

    <h2>If...else 语句</h2>
    <p>请使用 if....else 语句在条件为 true 时执行代码，在条件为 false 时执行其他代码。</p>
    <h3>语法</h3>
    <pre class="code">if (condition)
{
    当条件为 true 时执行的代码
}
else
{
    当条件不为 true 时执行的代码
}</pre>
    <p>当时间小于 20:00 时，生成问候 "Good day"，否则生成问候 "Good evening"。</p>
    <pre class="code">if (time<20)
{
    x="Good day";
}
else
{
    x="Good evening";
}</pre>

    <h2>If...else if...else 语句</h2>
    <p>使用 if....else if...else 语句来选择多个代码块之一来执行。</p>
    <h3>语法</h3>
    <pre class="code">if (condition1)
{
    当条件 1 为 true 时执行的代码
}
else if (condition2)
{
    当条件 2 为 true 时执行的代码
}
else
{
    当条件 1 和 条件 2 都不为 true 时执行的代码
}</pre>

    <p>如果时间小于 10:00，则生成问候 "Good morning"，如果时间大于 10:00 小于 20:00，则生成问候 "Good day"，否则生成问候 "Good evening"：</p>
    <pre class="code">if (time<10)
{
    x="Good morning";
}
else if (time>=10 && time<20)
{
    x="Good day";
}
else
{
    x="Good evening";
}</pre>

</div>
<div class="foot"></div></body>
</html>