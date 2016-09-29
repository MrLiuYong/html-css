<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 跳转语句</title>
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
    <h1>JavaScript Break 和 Continue 语句</h1>
    <p>break 语句用于跳出循环。<br>
        continue 用于跳过循环中的一个迭代。</p>
    <h2>Break 语句</h2>
    <p>我们已经在本教程之前的章节中见到过 break 语句。它用于跳出 switch() 语句。<br>
        break 语句可用于跳出循环。<br>
        break 语句跳出循环后，会继续执行该循环之后的代码（如果有的话）：</p>
    <pre class="code">for (i=0;i&lt;10;i++)
{
    if (i==3)
    {
        break;
    }
    x=x + "The number is " + i + "&lt;br&gt;";
}</pre>

    <p>由于这个 if 语句只有一行代码，所以可以省略花括号：</p>
    <pre class="code">for (i=0;i&lt;10;i++)
{
    if (i==3) break;
    x=x + "The number is " + i + "&lt;br&gt;";
}</pre>

    <h2>Continue 语句</h2>
    <p>continue 语句中断循环中的迭代，如果出现了指定的条件，然后继续循环中的下一个迭代。 该例子跳过了值 3</p>
    <pre class="code">for (i=0;i&lt;=10;i++)
{
    if (i==3) continue;
    x=x + "The number is " + i + "&lt;br&gt;";
}</pre>

    <h2>JavaScript 标签</h2>
    <p>正如您在 switch 语句那一章中看到的，可以对 JavaScript 语句进行标记。<br>
        如需标记 JavaScript 语句，请在语句之前加上冒号：</p>
    <pre class="code">label:
statements</pre>
    <p>break 和 continue 语句仅仅是能够跳出代码块的语句。<br>
语法:</p>
    <pre class="code">break labelname;

continue labelname;</pre>
    <p>continue 语句（带有或不带标签引用）只能用在循环中。<br>
        break 语句（不带标签引用），只能用在循环或 switch 中。<br>
        通过标签引用，break 语句可用于跳出任何 JavaScript 代码块：</p>
    <pre class="code">cars=["BMW","Volvo","Saab","Ford"];
list:
{
document.write(cars[0] + "&lt;br&gt;");
document.write(cars[1] + "&lt;br&gt;");
document.write(cars[2] + "&lt;br&gt;");
break list;
document.write(cars[3] + "&lt;br&gt;");
document.write(cars[4] + "&lt;br&gt;");
document.write(cars[5] + "&lt;br&gt;");
}</pre>



</div>
<div class="foot"></div></body>
</html>