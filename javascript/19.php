<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript while 循环</title>
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
    <h1>JavaScript while 循环</h1>
    <p>只要指定条件为 true，循环就可以一直执行代码块。</p>

    <h2>while 循环</h2>
    <p>while 循环会在指定条件为真时循环执行代码块。</p>
    <h3>语法</h3>
    <pre class="code">while (条件)
{
    需要执行的代码
}</pre>
    <h3>实例</h3>
    <pre class="code">while (i&lt;5)
{
    x=x + "The number is " + i + "&lt;br&gt;";
    i++;
}</pre>
    <p class="attention">如果您忘记增加条件中所用变量的值，该循环永远不会结束。这可能导致浏览器崩溃。</p>

    <h2>do/while 循环</h2>
    <p>do/while 循环是 while 循环的变体。该循环会在检查条件是否为真之前执行一次代码块，然后如果条件为真的话，就会重复这个循环。</p>
    <h3>语法</h3>
    <pre class="code">do
{
    需要执行的代码
}
while (条件);</pre>
    <p>下面的例子使用 do/while 循环。该循环至少会执行一次，即使条件为 false 它也会执行一次，因为代码块会在条件被测试前执行：</p>
    <pre class="code">do
{
    x=x + "The number is " + i + "&lt;br&gt;";
    i++;
}
while (i&gt;5)</pre>

    <h2>比较 for 和 while</h2>
    <p>本例中的循环使用 for 循环来显示 cars 数组中的所有值：</p>
    <pre class="code">cars=["BMW","Volvo","Saab","Ford"];
var i=0;
for (;cars[i];)
{
    document.write(cars[i] + "&lt;br&gt;");
    i++;
}</pre>
    <p>本例中的循环使用 while 循环来显示 cars 数组中的所有值：</p>
    <pre class="code">cars=["BMW","Volvo","Saab","Ford"];
var i=0;
while (cars[i])
{
    document.write(cars[i] + "&lt;br&gt;");
    i++;
}</pre>




</div>
<div class="foot"></div></body>
</html>