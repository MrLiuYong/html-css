<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 错误 - throw、try 和 catch</title>
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
    <h1>JavaScript 错误 - throw、try 和 catch</h1>
    <p><strong>try</strong> 语句测试代码块的错误。</p>

    <p><strong>catch</strong> 语句处理错误。</p>

    <p><strong>throw</strong> 语句创建自定义错误。</p>

    <hr>
    <h2> JavaScript  错误</h2>
    <p>当 JavaScript 引擎执行 JavaScript 代码时，会发生各种错误。</p>

    <p>可能是语法错误，通常是程序员造成的编码错误或错别字。</p>

    <p>可能是拼写错误或语言中缺少的功能（可能由于浏览器差异）。</p>

    <p>可能是由于来自服务器或用户的错误输出而导致的错误。</p>

    <p>当然，也可能是由于许多其他不可预知的因素。</p>


    <hr>
    <h2>JavaScript 抛出（throw）错误</h2>
    <p>当错误发生时，当事情出问题时，JavaScript 引擎通常会停止，并生成一个错误消息。</p>

    <p>描述这种情况的技术术语是：JavaScript 将<strong>抛出</strong>一个错误。</p>

    <hr>
    <h2>JavaScript try 和 catch</h2>
    <p><strong>try</strong> 语句允许我们定义在执行时进行错误测试的代码块。</p>

    <p><strong>catch</strong> 语句允许我们定义当 try 代码块发生错误时，所执行的代码块。</p>

    <p>JavaScript 语句 <strong>try</strong> 和 <strong>catch</strong> 是成对出现的。</p>


    <h3><strong>语法</strong></h3>
<pre class="code">
try {
	//在这里运行代码
} catch(err) {
	//在这里处理错误
}
</pre>

    <h2>实例</h2>
    <p>在下面的例子中，我们故意在 try 块的代码中写了一个错字。</p>

    <p>catch 块会捕捉到 try 块中的错误，并执行代码来处理它。</p>
    <pre class="code">var txt="";
function message()
{
    try {
        adddlert("Welcome guest!");
    } catch(err) {
        txt="本页有一个错误。\n\n";
        txt+="错误描述：" + err.message + "\n\n";
        txt+="点击确定继续。\n\n";
        alert(txt);
    }
}</pre>

    <h2>Throw 语句</h2>
    <p>throw 语句允许我们创建自定义错误。</p>

    <p>正确的技术术语是：创建或<strong>抛出异常</strong>（exception）。</p>

    <p>如果把 throw 与 try 和 catch 一起使用，那么您能够控制程序流，并生成自定义的错误消息。</p>


    <h3>语法</h3>
    <p class="code">throw <i>exception</i></p>

    <p>异常可以是 JavaScript 字符串、数字、逻辑值或对象。</p>

    <h2>实例</h2>
    <p>本例检测输入变量的值。如果值是错误的，会抛出一个异常（错误）。catch 会捕捉到这个错误，并显示一段自定义的错误消息：</p>

<pre class="code">
function myFunction()
{
	try
	{
		var x=document.getElementById("demo").value;
		if(x=="")    throw "值为空";
		if(isNaN(x)) throw "不是数字";
		if(x &gt; 10) throw "太大";
		if(x &lt; 5) throw "太小";
	}
	catch(err)
	{
		var y=document.getElementById("mess");
		y.innerHTML="错误：" + err + "。";
	}
}
</pre>




</div>
<div class="foot"></div></body>
</html>