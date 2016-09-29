<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript 函数定义</title>
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
</p>
<script src="js/main.js" type="text/javascript"></script>
<div class="contain">
    <h1>javascript 函数定义</h1>
    <p>JavaScript 使用关键字 function 定义函数。<br>
        函数可以通过声明定义，也可以是一个表达式。</p>

    <h2>函数表达式</h2>
    <p>JavaScript 函数可以通过一个表达式定义。<br>
        函数表达式可以存储在变量中：</p>
    <pre class="code">var x = function (a, b) {return a * b};</pre>
    <p>在函数表达式存储在变量后，变量也可作为一个函数使用：</p>
    <pre class="code">var x = function (a, b) {return a * b};
var z = x(4, 3);</pre>
    <p>以上函数实际上是一个 <b>匿名函数</b> (函数没有名称)。<br>
        函数存储在变量中，不需要函数名称，通常通过变量名来调用。</p>
    <p class="attention">上述函数以分号结尾，因为它是一个执行语句。</p>

    <h2>Function() 构造函数</h2>
    <p>在以上实例中，我们了解到函数通过关键字 <b>function</b> 定义。<br>
        函数同样可以通过内置的 JavaScript 函数构造器（Function()）定义。</p>
    <pre class="code">var myFunction = new Function("a", "b", "return a * b");

var x = myFunction(4, 3);</pre>

    <p>实际上，你不必使用构造函数。上面实例可以写成：</p>
    <pre class="code">var myFunction = function (a, b) {return a * b}

var x = myFunction(4, 3);</pre>
    <p class="attention">在 JavaScript 中，很多时候，你需要避免使用 new 关键字。</p>

    <h2>自调用函数</h2>
    <p>函数表达式可以 "自调用"。<br>
        自调用表达式会自动调用。<br>
        如果表达式后面紧跟 () ，则会自动调用。<br>
        不能自调用声明的函数。<br>
        通过添加括号，来说明它是一个函数表达式：</p>
    <pre class="code">(function () {
    var x = "Hello!!";      // 我将调用自己
})();</pre>

    <p>以上函数实际上是一个 <b>匿名自我调用的函数</b> (没有函数名)。</p>

   <h2>函数是对象</h2>
    <p>在 JavaScript 中使用 typeof 操作符判断函数类型将返回 "function" 。<br>
        但是JavaScript 函数描述为一个对象更加准确。<br>
        JavaScript 函数有 属性 和 方法。<br>
        arguments.length 属性返回函数调用过程接收到的参数个数：</p>
    <pre class="code">function myFunction(a, b) {
    return arguments.length;
}</pre>
    <p>toString() 方法将函数作为一个字符串返回:</p>
    <pre class="code">function myFunction(a, b) {
    return a * b;
}

var txt = myFunction.toString();</pre>




</div>
<div class="foot"></div></body>
</html>