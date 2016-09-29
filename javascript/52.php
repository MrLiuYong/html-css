<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript 函数调用</title>
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
    <h1>javascript 函数调用</h1>

    <h2>调用 JavaScript 函数</h2>
    <h3>作为一个函数调用</h3>
    <pre class="code">function myFunction(a, b) {
    return a * b;
}
myFunction(10, 2);           // myFunction(10, 2) 返回 20</pre>
    <pre>以上函数不属于任何对象。但是在 JavaScript 中它始终是默认的全局对象。
在 HTML 中默认的全局对象是 HTML 页面本身，所以函数是属于 HTML 页面。
在浏览器中的页面对象是浏览器窗口(window 对象)。以上函数会自动变为 window 对象的函数。
myFunction() 和 window.myFunction() 是一样的：</pre>
    <pre class="code">function myFunction(a, b) {
    return a * b;
}
window.myFunction(10, 2);    // window.myFunction(10, 2) 返回 20</pre>
    <p class="attention">这是调用 JavaScript 函数常用的方法， 但不是良好的编程习惯<br>
        全局变量，方法或函数容易造成命名冲突的bug。</p>

    <h2>全局对象</h2>
    <pre>当函数没有被自身的对象调用时， this 的值就会变成全局对象。
在 web 浏览器中全局对象是浏览器窗口（window 对象）。
该实例返回 this 的值是 window 对象:</pre>
    <pre class="code">function myFunction() {
    return this;
}
myFunction();                // 返回 window 对象</pre>
    <p class="attention">函数作为全局对象调用，会使 this 的值成为全局对象。
        使用 window 对象作为一个变量容易造成程序崩溃。</p>

    <h2>函数作为方法调用</h2>
    <p>在 JavaScript 中你可以将函数定义为对象的方法。<br>
        以下实例创建了一个对象 (myObject), 对象有两个属性 (firstName 和 lastName), 及一个方法 (fullName):</p>
    <pre class="code">var myObject = {
    firstName:"John",
    lastName: "Doe",
    fullName: function () {
        return this.firstName + " " + this.lastName;
    }
}
myObject.fullName();         // 返回 "John Doe"</pre>

    <p>fullName 方法是一个函数。函数属于对象。 myObject 是函数的所有者。<br>
        this对象，拥有 JavaScript 代码。实例中 this 的值为 myObject 对象。<br>
        测试以下！修改 fullName 方法并返回 this 值:</p>
    <pre class="code">var myObject = {
    firstName:"John",
    lastName: "Doe",
    fullName: function () {
        return this;
    }
}
myObject.fullName();          // 返回 [object Object] (所有者对象)</pre>

    <h2>使用构造函数调用函数</h2>
    <p>如果函数调用前使用了 new 关键字, 则是调用了构造函数。<br>
        这看起来就像创建了新的函数，但实际上 JavaScript 函数是重新创建的对象：</p>
    <pre class="code">// 构造函数:
function myFunction(arg1, arg2) {
    this.firstName = arg1;
    this.lastName  = arg2;
}

// This	creates a new object
var x = new myFunction("John","Doe");
x.firstName;                             // 返回 "John"</pre>

    <p>构造函数的调用会创建一个新的对象。新对象会继承构造函数的属性和方法。</p>
    <p class="attention">构造函数中 this 关键字没有任何的值。<br>
        this 的值在函数调用时实例化对象(new object)时创建。</p>

    <h2>作为函数方法调用函数</h2>
    <p>在 JavaScript 中, 函数是对象。JavaScript 函数有它的属性和方法。<br>
        call() 和 apply() 是预定义的函数方法。 两个方法可用于调用函数，两个方法的第一个参数必须是对象本身。</p>
    <pre class="code">function myFunction(a, b) {
    return a * b;
}
myFunction.call(myObject, 10, 2);      // 返回 20</pre>
    <pre class="code">function myFunction(a, b) {
    return a * b;
}
myArray = [10,2];
myFunction.apply(myObject, myArray);   // 返回 20</pre>
    <pre>两个方法都使用了对象本身作为第一个参数。 两者的区别在于第二个参数： apply传入的是一个参数数组，也就是将多个参数组合成为一个数组传入，而call则作为call的参数传入（从第二个参数开始）。
在 JavaScript 严格模式(strict mode)下, 在调用函数时第一个参数会成为 this 的值， 即使该参数不是一个对象。
在 JavaScript 非严格模式(non-strict mode)下, 如果第一个参数的值是 null 或 undefined, 它将使用全局对象替代。</pre>
    <p class="attention">通过 call() 或 apply() 方法你可以设置 this 的值, 且作为已存在对象的新方法调用。</p>
    


</div>
<div class="foot"></div></body>
</html>