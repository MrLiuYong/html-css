<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 数据类型</title>
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
    <h1>JavaScript 数据类型</h1>
    <p>字符串（String）、数字(Number)、布尔(Boolean)、数组(Array)、对象(Object)、空（Null）、未定义（Undefined）。</p>

    <h2>JavaScript 拥有动态类型</h2>
    <p>JavaScript 拥有动态类型。这意味着相同的变量可用作不同的类型：</p>
    <pre class="code">var x;               // x 为 undefined
var x = 5;           // 现在 x 为数字
var x = "John";      // 现在 x 为字符串</pre>

    <h2>JavaScript 字符串</h2>
    <p>字符串是存储字符（比如 "Bill Gates"）的变量。<br>
        字符串可以是引号中的任意文本。您可以使用单引号或双引号：</p>
    <pre class="code">var carname="Volvo XC60";
var carname='Volvo XC60';</pre>
    <p>您可以在字符串中使用引号，只要不匹配包围字符串的引号即可：</p>
    <pre class="code">var answer="It's alright";
var answer="He is called 'Johnny'";
var answer='He is called "Johnny"';</pre>

    <h2>JavaScript 数字</h2>
    <p>JavaScript 只有一种数字类型。数字可以带小数点，也可以不带：</p>
    <pre class="code">var x1=34.00;      //使用小数点来写
var x2=34;         // //不使用小数点来写</pre>
    <p>极大或极小的数字可以通过科学（指数）计数法来书写：</p>
    <pre class="code">var y=123e5;      // 12300000
var z=123e-5;     // 0.00123</pre>

    <h2>JavaScript 布尔</h2>
    <p>布尔（逻辑）只能有两个值：true 或 false。</p>
    <pre class="code">var x=true;
var y=false;</pre>
    <p>布尔常用在条件测试中。</p>

    <h2>JavaScript 数组</h2>
    <p>下面的代码创建名为 cars 的数组：</p>
    <pre class="code">var cars=new Array();
cars[0]="Saab";
cars[1]="Volvo";
cars[2]="BMW";</pre>
    <p>或者 (condensed array):</p>
    <pre class="code">var cars=new Array("Saab","Volvo","BMW");</pre>
    <p>或者 (literal array):</p>
    <pre class="code">var cars=["Saab","Volvo","BMW"];</pre>
    <p>数组下标是基于零的，所以第一个项目是 [0]，第二个是 [1]，以此类推。</p>

    <h2>JavaScript 对象</h2>
    <p>对象由花括号分隔。在括号内部，对象的属性以名称和值对的形式 (name : value) 来定义。属性由逗号分隔：</p>
    <pre class="code">var person={firstname:"John", lastname:"Doe", id:5566};</pre>
    <p>上面例子中的对象 (person) 有三个属性：firstname、lastname 以及 id。<br>
        空格和折行无关紧要。声明可横跨多行：</p>
    <pre class="code">var person={
firstname : "John",
lastname  : "Doe",
id        :  5566
};</pre>
    <p>对象属性有两种寻址方式：</p>
    <pre class="code">name=person.lastname;
name=person["lastname"];</pre>

    <h2>Undefined 和 Null</h2>
    <p>Undefined 这个值表示变量不含有值。<br>
        可以通过将变量的值设置为 null 来清空变量。</p>
    <pre class="code">cars=null;
person=null;</pre>

    <h2>声明变量类型</h2>
    <p>当您声明新变量时，可以使用关键词 "new" 来声明其类型：</p>
    <pre class="code">var carname=new String;
var x=      new Number;
var y=      new Boolean;
var cars=   new Array;
var person= new Object;</pre>
    <p class="attention">JavaScript 变量均为对象。当您声明一个变量时，就创建了一个新的对象。</p>


</div>
<div class="foot"></div></body>
</html>