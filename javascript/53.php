<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript 闭包</title>
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
    <h1>javascript 闭包</h1>
    <p>JavaScript 变量可以是局部变量或全局变量。<br>
        私有变量可以用到闭包。</p>
    <h2>全局变量</h2>
    <p>函数可以访问由函数内部定义的变量，如：</p>
    <pre class="code">function myFunction() {
    var a = 4;
    return a * a;
}</pre>
    <p>函数也可以访问函数外部定义的变量，如：</p>
    <pre class="code">var a = 4;
function myFunction() {
    return a * a;
}</pre>
    <pre>后面一个实例中， a 是一个 全局 变量。
在web页面中全局变量属于 window 对象。
全局变量可应用于页面上的所有脚本。
在第一个实例中， a 是一个 局部 变量。
局部变量只能用于定义它函数内部。对于其他的函数或脚本代码是不可用的。
全局和局部变量即便名称相同，它们也是两个不同的变量。修改其中一个，不会影响另一个的值。</pre>
    <p class="attention">变量声明是如果不使用 var 关键字，那么它就是一个全局变量，即便它在函数内定义。</p>

    <h2>变量生命周期</h2>
    <p>全局变量的作用域是全局性的，即在整个JavaScript程序中，全局变量处处都在。<br>
        而在函数内部声明的变量，只在函数内部起作用。这些变量是局部变量，作用域是局部性的；函数的参数也是局部性的，只在函数内部起作用。</p>

    <h2>计数器困境</h2>
    <p>设想下如果你想统计一些数值，且该计数器在所有函数中都是可用的。<br>
        你可以使用全局变量，函数设置计数器递增：</p>
    <pre class="code">var counter = 0;

function add() {
    counter += 1;
}

add();
add();
add();

// 计数器现在为 3</pre>
    <p>计数器数值在执行 add() 函数时发生变化。<br>
        但问题来了，页面上的任何脚本都能改变计数器，即便没有调用 add() 函数。<br>
        如果我在函数内声明计数器，如果没有调用函数将无法修改计数器的值：</p>
    <pre class="code">function add() {
    var counter = 0;
    counter += 1;
}

add();
add();
add();

// 本意是想输出 3, 但事与愿违，输出的都是 1 !</pre>
    <p>以上代码将无法正确输出，每次我调用 add() 函数，计数器都会设置为 1。<br>
        JavaScript 内嵌函数可以解决该问题。</p>

    <h2>JavaScript 内嵌函数</h2>
    <p>所有函数都能访问全局变量。   </p>
    <p>实际上，在 JavaScript 中，所有函数都能访问它们上一层的作用域。</p>
    <p>JavaScript 支持嵌套函数。嵌套函数可以访问上一层的函数变量。 </p>


    <p>该实例中，内嵌函数 <strong>plus()</strong> 可以访问父函数的 <strong>counter</strong> 变量：</p>

    <pre class="code">function add() {
    var counter = 0;
    function plus() {counter += 1;}
    plus();
    return counter;
}</pre>
    <p>如果我们能在外部访问  <strong>plus()</strong> 函数，这样就能解决计数器的困境。
    </p>
    <p>我们同样需要确保 <strong>counter = 0</strong> 只执行一次。</p>
    <p><strong>我们需要闭包。</strong></p>
    <hr>
    <h2>JavaScript 闭包</h2>
    <p>还记得函数自我调用吗？该函数会做什么？</p>

    <pre class="code">var add = (function () {
    var counter = 0;
    return function () {return counter += 1;}
})();

add();
add();
add();

// 计数器为 3</pre>
    <h2>实例解析</h2>
    <p>变量 <strong>add</strong> 指定了函数自我调用的返回字值。 </p>
    <p>自我调用函数只执行一次。设置计数器为 0。并返回函数表达式。</p>
    <p>add变量可以作为一个函数使用。非常棒的部分是它可以访问函数上一层作用域的计数器。 </p>
    <p>这个叫作 JavaScript <strong>闭包。</strong>它使得函数拥有私有变量变成可能。</p>
    <p>计数器受匿名函数的作用域保护，只能通过 add 方法修改。</p>

    <p class="attention">闭包是可访问上一层函数作用域里变量的函数，即便上一层函数已经关闭。</p>




</div>
<div class="foot"></div></body>
</html>