<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 作用域</title>
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
    <h1>JavaScript 作用域</h1>

    <h2>JavaScript 作用域</h2>
    <p>在 JavaScript 中, 对象和函数同样也是变量。<br>
        在 JavaScript 中, 作用域为可访问变量，对象，函数的集合。<br>
        JavaScript 函数作用域: 作用域在函数内修改。</p>

    <h2>JavaScript 局部作用域</h2>
    <p>变量在函数内声明，变量为局部作用域。<br>
        局部变量：只能在函数内部访问。</p>
    <pre class="code">// 此处不能调用 carName 变量

function myFunction() {
    var carName = "Volvo";

    // 函数内可调用 carName 变量

}</pre>
    <p>因为局部变量只作用于函数内，所以不同的函数可以使用相同名称的变量。<br>
        局部变量在函数开始执行时创建，函数执行完后局部变量会自动销毁。</p>

    <h2>JavaScript 全局变量</h2>
    <p>变量在函数外定义，即为全局变量。<br>
        全局变量有 全局作用域: 网页中所有脚本和函数均可使用。</p>
    <pre class="code">var carName = " Volvo";

// 此处可调用 carName 变量

function myFunction() {

    // 函数内可调用 carName 变量

}</pre>
    <p>如果变量在函数内没有声明（没有使用 var 关键字），该变量为全局变量。<br>
        以下实例中 carName 在函数内，但是为全局变量。</p>
    <pre class="code">// 此处可调用 carName 变量

function myFunction() {
    carName = "Volvo";

    // 此处可调用 carName 变量

}</pre>

    <h2>JavaScript 变量生命周期</h2>
    <p>JavaScript 变量生命周期在它声明时初始化。<br>
        局部变量在函数执行完毕后销毁。<br>
        全局变量在页面关闭后销毁。</p>

    <h2>函数参数</h2>
    <p>函数参数只在函数内起作用，是局部变量。</p>

    <h2>HTML 中的全局变量</h2>
    <p>在 HTML 中, 全局变量是 window 对象: 所有数据变量都属于 window 对象。</p>
    <pre class="code">//此处可使用 window.carName

function myFunction() {
    carName = "Volvo";
}</pre>
    <br>
    <p class="attention">你的全局变量，或者函数，可以覆盖 window 对象的变量或者函数。<br>
        局部变量，包括 window 对象可以覆盖全局变量和函数。</p>

</div>
<div class="foot"></div></body>
</html>