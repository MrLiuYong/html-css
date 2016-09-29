<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript 函数参数</title>
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
    <h1>javascript 函数参数</h1>

    <h2>函数显式参数(Parameters)与隐式参数(Arguments)</h2>
    <p>在先前的教程中，我们已经学习了函数的显式参数:</p>
    <pre class="code">functionName(parameter1, parameter2, parameter3) {
    // 要执行的代码……
}</pre>
    <p>函数显式参数在函数定义时列出。<br>
        函数隐式参数在函数调用时传递给函数真正的值。</p>
    <h2>参数规则</h2>
    <p>JavaScript 函数定义时显示参数没有指定数据类型。<br>
        JavaScript 函数对隐式参数没有进行类型检测。<br>
        JavaScript 函数对隐式参数的个数没有进行检测。</p>

    <h2>默认参数</h2>
    <p>如果函数在调用时未提供隐式参数，参数会默认设置为： <b>undefined</b>
        有时这是可以接受的，但是建议最好为参数设置一个默认值：</p>
    <pre class="code">function myFunction(x, y) {
    if (y === undefined) {
          y = 0;
    }
}</pre>

    <h2>Arguments 对象</h2>
    <p>JavaScript 函数有个内置的对象 arguments 对象。<br>
        argument 对象包含了函数调用的参数数组。<br>
        通过这种方式你可以很方便的找到最后一个参数的值：</p>
    <pre class="code">x = findMax(1, 123, 500, 115, 44, 88);

function findMax() {
    var i, max = 0;
    for (i = 0; i < arguments.length; i++) {
        if (arguments[i] > max) {
            max = arguments[i];
        }
    }
    return max;
}</pre>

    <h2>通过值传递参数</h2>
    <p>在函数中调用的参数是函数的隐式参数。<br>
        JavaScript 隐式参数通过值来传递：函数仅仅只是获取值。<br>
        如果函数修改参数的值，不会修改显式参数的初始值（在函数外定义）。<br>
        隐式参数的改变在函数外是不可见的。</p>

    <h2>通过对象传递参数</h2>
    <pre>在JavaScript中，可以引用对象的值。
因此我们在函数内部修改对象的属性就会修改其初始的值。
修改对象属性可作用于函数外部（全局变量）。
修改对象属性在函数外是可见的。</pre>


</div>
<div class="foot"></div></body>
</html>