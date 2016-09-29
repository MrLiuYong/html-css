<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript for 循环</title>
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
    <h1>JavaScript for 循环</h1>
    <p>循环可以将代码块执行指定的次数。</p>

    <h2>JavaScript 循环</h2>
    <p>如果您希望一遍又一遍地运行相同的代码，并且每次的值都不同，那么使用循环是很方便的。<br>
        我们可以这样输出数组的值：</p>
    <p>一般写法：</p>
    <pre class="code">document.write(cars[0] + "&lt;br&gt;");
document.write(cars[1] + "&lt;br&gt;");
document.write(cars[2] + "&lt;br&gt;");
document.write(cars[3] + "&lt;br&gt;");
document.write(cars[4] + "&lt;br&gt;");
document.write(cars[5] + "&lt;br&gt;");</pre>

    <p>使用for循环</p>
    <pre class="code">for (var i=0;i&lt;cars.length;i++)
{
    document.write(cars[i] + "&lt;br&gt;");
}</pre>

    <h2>不同类型的循环</h2>
    <p>JavaScript 支持不同类型的循环：</p>
    <ul>
        <li><strong>for</strong> - 循环代码块一定的次数</li>
        <li><strong>for/in</strong> - 循环遍历对象的属性</li>
        <li><strong>while</strong> - 当指定的条件为 true 时循环指定的代码块</li>
        <li><strong>do/while</strong> - 同样当指定的条件为 true 时循环指定的代码块</li>
    </ul>
    <hr>
    <h2>For 循环</h2>
    <p>for 循环是您在希望创建循环时常会用到的工具。
    </p>
    <p>下面是 for 循环的语法：</p>
    <pre class="code">for (语句 1; 语句 2; 语句 3)
{
    被执行的代码块
}</pre>
    <p><strong>语句 1</strong> （代码块）开始前执行starts.</p>
    <p><strong>语句 2</strong> 定义运行循环（代码块）的条件</p>
    <p><strong>语句 3</strong> 在循环（代码块）已被执行之后执行</p>
    <pre class="code">for (var i=0; i<5; i++)
{
      x=x + "该数字为 " + i + "&lt;br&gt;";
}</pre>
    <p>从上面的例子中，您可以看到：<br>
        Statement 1 在循环开始之前设置变量 (var i=0)。<br>
        Statement 2 定义循环运行的条件（i 必须小于 5）。<br>
        Statement 3 在每次代码块已被执行后增加一个值 (i++)。</p>
    <h3>语句 1</h3>
    <p>通常我们会使用语句 1 初始化循环中所用的变量 (var i=0)。<br>
        语句 1 是可选的，也就是说不使用语句 1 也可以。<br>
        您可以在语句 1 中初始化任意（或者多个）值：</p>
    <pre class="code">for (var i=0,len=cars.length; i&lt;len; i++)
{
document.write(cars[i] + "&lt;br&gt;");
}</pre>
    <p>同时您还可以省略语句 1（比如在循环开始前已经设置了值时）：</p>
    <pre class="code">var i=2,len=cars.length;
for (; i&lt;len; i++)
{
document.write(cars[i] + "&lt;br&gt;");
}</pre>

    <h3>语句 2</h3>
    <p>通常语句 2 用于评估初始变量的条件。<br>
        语句 2 同样是可选的。<br>
        如果语句 2 返回 true，则循环再次开始，如果返回 false，则循环将结束。</p>
    <p class="attention">如果您省略了语句 2，那么必须在循环内提供 break。否则循环就无法停下来。这样有可能令浏览器崩溃。</p>

    <h3>语句 3</h3>
    <p>通常语句 3 会增加初始变量的值。<br>
        语句 3 也是可选的。<br>
        语句 3 有多种用法。增量可以是负数 (i--)，或者更大 (i=i+15)。<br>
        语句 3 也可以省略（比如当循环内部有相应的代码时）：</p>
    <pre class="code">var i=0,len=cars.length;
for (; i&lt;len; )
{
document.write(cars[i] + "&lt;br&gt;");
i++;
}</pre>

    <h2>For/In 循环</h2>
    <p>JavaScript for/in 语句循环遍历对象的属性</p>
    <pre class="code">var person={fname:"John",lname:"Doe",age:25};

for (x in person)
{
    txt=txt + person[x];
}</pre>





</div>
<div class="foot"></div></body>
</html>