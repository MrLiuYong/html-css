<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 变量</title>
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
    <h1>JavaScript 变量</h1>
    <p>变量是用于存储信息的"容器"。</p>
    <pre class="code">var x=5;
var y=6;
var z=x+y;</pre>
    <h2>就像代数那样</h2>
    <p>x=5<br>
        y=6<br>
        z=x+y<br>
        在代数中，我们使用字母（比如 x）来保存值（比如 5）。<br>
        通过上面的表达式 z=x+y，我们能够计算出 z 的值为 11。<br>
        在 JavaScript 中，这些字母被称为变量。</p>
    <p class="attention">您可以把变量看做存储数据的容器。</p>

    <h2>JavaScript 变量</h2>
    <p>与代数一样，JavaScript 变量可用于存放值（比如 x=5）和表达式（比如 z=x+y）。<br>
        变量可以使用短名称（比如 x 和 y），也可以使用描述性更好的名称（比如 age, sum, totalvolume）。</p>
    <ul>
        <li>变量必须以字母开头</li>
        <li>变量也能以 $ 和 _ 符号开头（不过我们不推荐这么做）</li>
        <li>变量名称对大小写敏感（y 和 Y 是不同的变量）</li>
    </ul>
    <p class="attention">JavaScript 语句和 JavaScript 变量都对大小写敏感。</p>

    <h2>JavaScript 数据类型</h2>
    <p>JavaScript 变量还能保存其他数据类型，比如文本值 (name="Bill Gates")。<br>
        在 JavaScript 中，类似 "Bill Gates" 这样一条文本被称为字符串。<br>
        JavaScript 变量有很多种类型，但是现在，我们只关注数字和字符串。<br>
        当您向变量分配文本值时，应该用双引号或单引号包围这个值。<br>
        当您向变量赋的值是数值时，不要使用引号。如果您用引号包围数值，该值会被作为文本来处理。</p>
    <pre class="code">var pi=3.14;
var person="John Doe";
var answer='Yes I am!';</pre>

    <h2>声明（创建） JavaScript 变量</h2>
    <p>在 JavaScript 中创建变量通常称为"声明"变量。<br>
        我们使用 var 关键词来声明变量：</p>
    <p class="code">var carname;</p>
    <p>变量声明之后，该变量是空的（它没有值）。<br>
        如需向变量赋值，请使用等号：</p>
    <p class="code">carname="Volvo";</p>
    <p>不过，您也可以在声明变量时对其赋值：</p>
    <p class="code">var carname="Volvo";</p>
    <p>在下面的例子中，我们创建了名为 carname 的变量，并向其赋值 "Volvo"，然后把它放入 id="demo" 的 HTML 段落中：</p>
    <pre class="code">&lt;p id="demo"&gt;&lt;/p&gt;
var carname="Volvo";
document.getElementById("demo").innerHTML=carname;</pre>
    <p class="attention">一个好的编程习惯是，在代码开始处，统一对需要的变量进行声明。</p>

    <h2>一条语句，多个变量</h2>
    <p>您可以在一条语句中声明很多变量。该语句以 var 开头，并使用逗号分隔变量即可：</p>
    <p class="code">var lastname="Doe", age=30, job="carpenter";</p>
    <p>声明也可横跨多行:</p>
    <pre class="code">var lastname="Doe",
age=30,
job="carpenter";</pre>

    <h2>Value = undefined</h2>
    <p>在计算机程序中，经常会声明无值的变量。未使用值来声明的变量，其值实际上是 undefined。<br>
        在执行过以下语句后，变量 carname 的值将是 undefined：</p>
    <p class="code">var carname;</p>

    <h2>重新声明 JavaScript 变量</h2>
    <p>如果重新声明 JavaScript 变量，该变量的值不会丢失：<br>
        在以下两条语句执行后，变量 carname 的值依然是 "Volvo"：</p>
    <pre class="code">var carname="Volvo";
var carname;</pre>

    <h2>JavaScript 算数</h2>
    <p>您可以通过 JavaScript 变量来做算数，使用的是 = 和 + 这类运算符：</p>
    <pre class="code">y=5;
x=y+2;</pre>


</div>
<div class="foot"></div></body>
</html>