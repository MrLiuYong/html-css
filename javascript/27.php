<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript 使用误区</title>
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
    <h1>javascript 使用误区</h1>


    <h2>赋值运算符应用错误</h2>
    <p>在 JavaScript 程序中如果你在 if 条件语句中使用赋值运算符的等号 (=) 将会产生一个错误结果, 正确的方法是使用比较运算符的两个等号 (==)。<br>
        if 条件语句返回 false (是我们预期的)因为 x 不等于 10:</p>
    <pre class="code">var x = 0;
if (x == 10)</pre>

    <p>if 条件语句返回 true (不是我们预期的)因为条件语句执行为 x 赋值 10，10 为 true:</p>
    <pre class="code">var x = 0;
if (x = 10)</pre>

    <p>if 条件语句返回 false (不是我们预期的)因为条件语句执行为 x 赋值 0，0 为 false:</p>
    <pre class="code">var x = 0;
if (x = 0)</pre>

    <h2>比较运算符常见错误</h2>
    <p>在常规的比较中，数据类型是被忽略的，以下 if 条件语句返回 true：</p>
    <pre class="code">var x = 10;
var y = "10";
if (x == y)</pre>

    <p>在严格的比较运算中，=== 为恒等计算符，同时检查表达式的值与类型，以下 if 条件语句返回 false：</p>
    <pre class="code">var x = 10;
        var y = "10";
        if (x === y)</pre>
    <p>这种错误经常会在 switch 语句中出现，switch 语句会使用恒等计算符(===)进行比较:
        以下实例会执行 alert 弹窗：</p>
    <pre class="code">var x = 10;
switch(x) {
    case 10: alert("Hello");
}</pre>
    <p>以下实例由于类型不一致不会执行 alert 弹窗：</p>
    <pre class="code">var x = 10;
switch(x) {
    case "10": alert("Hello");
}</pre>

    <h2>加法与连接注意事项</h2>
    <p>加法是两个数字相加。<br>
        连接是两个字符串连接。<br>
        JavaScript 的加法和连接都使用 + 运算符。<br>
        接下来我们可以通过实例查看两个数字相加及数字与字符串连接的区别：</p>
    <pre class="code">var x = 10 + 5;          // x 的结果为 15
var x = 10 + "5";        // x 的结果为 "105"</pre>
    <p>使用变量相加结果也不一致:</p>
    <pre class="code">var x = 10;
var y = 5;
var z = x + y;           // z 的结果为 15

var x = 10;
var y = "5";
var z = x + y;           // z 的结果为 "105"</pre>

    <h2>浮点型数据使用注意事项</h2>
    <p>JavaScript 中的所有数据都是以 64 位浮点型数据(float) 来存储。<br>
        所有的编程语言，包括 JavaScript，对浮点型数据的精确度都很难确定：</p>
    <pre class="code">var x = 0.1;
var y = 0.2;
var z = x + y            // z 的结果为 0.3
if (z == 0.3)            // 返回 false</pre>
    <p>我解决以上问题，可以用整数的乘除法来解决：</p>
    <pre class="code">var z = (x * 10 + y * 10) / 10;       // z 的结果为 0.3</pre>

    <h2>JavaScript 字符串分行</h2>
    <p>JavaScript 运行我们在字符串中使用断行语句:</p>
    <pre class="code">var x =
"Hello World!";</pre>
    <p>但是，在字符串中直接使用回车换行是会报错的：</p>
    <pre class="code">var x = "Hello
World!";</pre>
    <p>字符串断行需要使用反斜杠(\)，如下所示:</p>
    <pre class="code">var x = "Hello \
World!";</pre>

    <h2>错误的使用分号</h2>
    <pre class="code">if (x == 19);
{
    // code block
}</pre>

    <h2>Undefined 不是 Null</h2>
    <p>在 JavaScript 中, null 用于对象, undefined 用于变量，属性和方法。<br>
        对象只有被定义才有可能为 null，否则为 undefined。<br>
        如果我们想测试对象是否存在，在对象还没定义时将会抛出一个错误。<br>
        错误的使用方式：</p>
    <pre class="code">if (myObj !== null && typeof myObj !== "undefined") </pre>
    <p>正确的方式是我们需要先使用 typeof 来检测对象是否已定义：</p>
    <pre class="code">if (typeof myObj !== "undefined" && myObj !== null) </pre>



</div>
<div class="foot"></div></body>
</html>