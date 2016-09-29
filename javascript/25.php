<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript JSON</title>
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
    <h1>JavaScript JSON</h1>
    <p class="intro">JSON 是用于存储和传输数据的格式。</p>
    <p class="intro">JSON 通常用于服务端向网页传递数据 。 </p>

    <hr>
    <h2>什么是 JSON?</h2>
    <ul>
        <li>JSON 英文全称 <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation</li>
        <li>JSON 是一种轻量级的数据交换格式。</li>
        <li>JSON是独立的语言 <b>*</b>
        </li>
        <li>JSON 易于理解。</li>
    </ul>
    <p>
    </p>

    <p class="attention">* JSON 使用 JavaScript 语法，但是 JSON 格式仅仅是一个文本。<br>文本可以被任何编程语言读取及作为数据格式传递。</p>

    <h2>JSON 实例</h2>

    <p>以下 JSON 语法定义了 employees 对象: 3 条员工记录（对象）的数组:</p>
    <p class="code">{"employees":[
    {"firstName":"John", "lastName":"Doe"},
    {"firstName":"Anna",	"lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]}</p>
    <br><hr>
    <h2> JSON 格式化后为 JavaScript 对象</h2>
    <p> JSON 格式在语法上与创建 JavaScript 对象代码是相同的。</p>
    <p>由于它们很相似，所以 JavaScript 程序可以很容易的将 JSON 数据转换为 JavaScript 对象。
    </p>

    <hr>
    <h2>JSON 语法规则</h2>
    <ul>
        <li>数据为 键/值 对。</li>
        <li>数据由逗号分隔。</li>
        <li>大括号保存对象</li>
        <li>方括号保存数组</li>
    </ul>
    <hr>
    <h2>JSON 数据 - 一个名称对应一个值</h2>

    <p>JSON 数据格式为 键/值 对，就像 JavaScript 对象属性。</p>
    <p>
        键/值对包括字段名称（在双引号中），后面一个冒号，然后是值：</p>

    <p class="code">"firstName":"John"</p>

    <br><hr>
    <h2>JSON 对象</h2>
    <p>JSON 对象保存在大括号内。</p>
    <p>就像在 JavaScript 中, 对象可以保存多个 键/值 对：</p>
    <p class="code">{"firstName":"John", "lastName":"Doe"}</p>

    <br><hr>
    <h2>JSON 数组</h2>
    <p>JSON 数组保存在中括号内。</p>
    <p>就像在 JavaScript 中, 数组可以包含对象：</p>
    <div class="code">"employees":[
    {"firstName":"John", "lastName":"Doe"},
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]</div>

    <p>在以上实例中，对象 "employees" 是一个数组。包含了三个对象。</p>
    <p>每个为个对象为员工的记录（姓和名）。</p>
    <hr>
    <h2>JSON 字符串转换为 JavaScript 对象</h2>
    <p>通常我们从服务器中读取 JSON 数据，并在网页中显示数据。</p>
    <p>简单起见，我们网页中直接设置 JSON 字符串 </p>
    <p>首先，创建 JavaScript 字符串，字符串为 JSON 格式的数据：</p>
    <div class="code">var text = '{ "employees" : [' +
'{ "firstName":"John" , "lastName":"Doe" },' +
'{ "firstName":"Anna" , "lastName":"Smith" },' +
'{ "firstName":"Peter" , "lastName":"Jones" } ]}';</div>

    <p>然后，使用 JavaScript 内置函数 JSON.parse() 将字符串转换为 JavaScript 对象:</p>

    <div class="code">var obj = JSON.parse(text);</div>

    <p>最后，在你的页面中使用新的 JavaScript 对象：</p>



    <div class="code">
&lt;p id="demo"&gt;&lt;/p&gt;
&lt;script&gt;
document.getElementById("demo").innerHTML =
obj.employees[1].firstName + " " + obj.employees[1].lastName;
&lt;/script&gt;
    </div>


    <hr>
    <h2>相关函数</h2>
    <table>
        <tr><th>函数</th><th>描述</th></tr>
        <tr><td><a href="#" target="_blank">JSON.parse()</a></td><td>用于将一个 JSON 字符串转换为 JavaScript 对象。</td>
        </tr>
        <tr><td><a href="#" target="_blank">JSON.stringify()</a></td><td>用于将 JavaScript 值转换为 JSON 字符串。</td>
        </tr>
    </table>



</div>
<div class="foot"></div></body>
</html>