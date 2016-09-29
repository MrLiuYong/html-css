<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 函数</title>
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
    <h1>JavaScript 函数</h1>
    <p>函数是由事件驱动的或者当它被调用时执行的可重复使用的代码块。</p>
    <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function myFunction()
{
alert(&quot;Hello World!&quot;);
}
&lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;button onclick=&quot;myFunction()&quot;&gt;Try it&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;    </pre>
    <h2>JavaScript 函数语法</h2>
    <p>函数就是包裹在花括号中的代码块，前面使用了关键词 function：</p>
    <pre class="code">function functionname()
{
执行代码
}</pre>
    <p>当调用该函数时，会执行函数内的代码。<br>
        可以在某事件发生时直接调用函数（比如当用户点击按钮时），并且可由 JavaScript 在任何位置进行调用。</p>
    <p class="attention">JavaScript 对大小写敏感。关键词 function 必须是小写的，并且必须以与函数名称相同的大小写来调用函数。</p>

    <h2>调用带参数的函数</h2>
    <p>在调用函数时，您可以向其传递值，这些值被称为参数。<br>
        这些参数可以在函数中使用。<br>
        您可以发送任意多的参数，由逗号 (,) 分隔：</p>
    <pre class="code">myFunction(argument1,argument2)</pre>
    <p>当您声明函数时，请把参数作为变量来声明：</p>
    <pre class="code">function myFunction(var1,var2)
{
代码
}</pre>
    <p>变量和参数必须以一致的顺序出现。第一个变量就是第一个被传递的参数的给定的值，以此类推。</p>
    <pre class="code">
&lt;button onclick=&quot;myFunction('Harry Potter','Wizard')&quot;&gt;Try it&lt;/button&gt;

&lt;script&gt;
function myFunction(name,job)
{
alert(&quot;Welcome &quot; + name + &quot;, the &quot; + job);
}
&lt;/script&gt;    </pre>
    <p>上面的函数在按钮被点击时会提示 "Welcome Harry Potter, the Wizard"。<br>
        函数很灵活，您可以使用不同的参数来调用该函数，这样就会给出不同的消息：</p>
    <pre class="code">
&lt;button onclick=&quot;myFunction('Harry Potter','Wizard')&quot;&gt;Try it&lt;/button&gt;
&lt;button onclick=&quot;myFunction('Bob','Builder')&quot;&gt;Try it&lt;/button&gt;    </pre>
    <p>根据您点击的不同的按钮，上面的例子会提示 "Welcome Harry Potter, the Wizard" 或 "Welcome Bob, the Builder"。</p>

    <h2>带有返回值的函数</h2>
    <p>有时，我们会希望函数将值返回调用它的地方。<br>
        通过使用 return 语句就可以实现。<br>
        在使用 return 语句时，函数会停止执行，并返回指定的值</p>
    <h3>语法</h3>
    <pre class="code">function myFunction()
{
    var x=5;
    return x;
}</pre>
    <p>上面的函数会返回值 5.</p>
    <p>函数调用将被返回值取代：</p>
    <pre class="code">var myVar=myFunction();</pre>
    <p>myVar 变量的值是 5，也就是函数 "myFunction()" 所返回的值。<br>
        即使不把它保存为变量，您也可以使用返回值：</p>
    <p class="code">document.getElementById("demo").innerHTML=myFunction();</p>
    <p>"demo" 元素的 innerHTML 将成为 5，也就是函数 "myFunction()" 所返回的值。<br>
        您可以使返回值基于传递到函数中的参数:</p>
    <pre class="code">function myFunction(a,b)
{
return a*b;
}

document.getElementById("demo").innerHTML=myFunction(4,3);</pre>

    <h2>局部 JavaScript 变量</h2>
    <p>在 JavaScript 函数内部声明的变量（使用 var）是局部变量，所以只能在函数内部访问它。（该变量的作用域是局部的）。<br>
        您可以在不同的函数中使用名称相同的局部变量，因为只有声明过该变量的函数才能识别出该变量。<br>
        只要函数运行完毕，本地变量就会被删除。</p>

    <h2>全局 JavaScript 变量</h2>
    <p>在函数外声明的变量是全局变量，网页上的所有脚本和函数都能访问它。</p>

    <h2>JavaScript 变量的生存期</h2>
    <p>JavaScript 变量的生命期从它们被声明的时间开始。<br>
        局部变量会在函数运行以后被删除。<br>
        全局变量会在页面关闭后被删除。<br></p>

    <h2>向未声明的 JavaScript 变量分配值</h2>
    <p>如果您把值赋给尚未声明的变量，该变量将被自动作为全局变量声明。<br>
        这条语句：</p>
    <p class="code">carname="Volvo";</p>
    <p>将声明一个全局变量 carname，即使它在函数内执行。</p>
    

</div>
<div class="foot"></div></body>
</html>