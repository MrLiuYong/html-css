<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 语句</title>
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
    <h1>JavaScript 语句</h1>
    <p>JavaScript 语句向浏览器发出的命令。语句的作用是告诉浏览器该做什么。</p>

    <h2>JavaScript 语句</h2>
    <p>JavaScript 语句是发给浏览器的命令。<br>
        这些命令的作用是告诉浏览器要做的事情。<br>
        下面的 JavaScript 语句向 id="demo" 的 HTML 元素输出文本 "你好 Echo" ：</p>
    <p class="code">document.getElementById("demo").innerHTML = "你好 Echo";</p>

    <h2>分号 ;</h2>
    <p>分号用于分隔 JavaScript 语句。<br>
        通常我们在每条可执行的语句结尾添加分号。<br>
        使用分号的另一用处是在一行中编写多条语句。</p>
    <pre class="code">a = 5;
b = 6;
c = a + b;</pre>
    <p>也可以这么写:</p>
    <pre class="code">a = 5; b = 6; c = a + b;</pre>
    <p class="attention">您也可能看到不带有分号的案例。<br>
        在 JavaScript 中，用分号来结束语句是可选的。</p>

    <h2>JavaScript 代码</h2>
    <p>JavaScript 代码是 JavaScript 语句的序列。<br>
        浏览器按照编写顺序依次执行每条语句。<br>
        本例向网页输出一个标题和两个段落：</p>
    <pre class="attention">document.getElementById("demo").innerHTML="你好 Echo";
document.getElementById("myDIV").innerHTML="你最近怎么样?";</pre>

    <h2>JavaScript 代码块</h2>
    <p>JavaScript 可以分批地组合起来。<br>
        代码块以左花括号开始，以右花括号结束。<br>
        代码块的作用是一并地执行语句序列。<br>
        本例向网页输出一个标题和两个段落：</p>
    <pre class="code">function myFunction()
{
document.getElementById("demo").innerHTML="你好Echo";
document.getElementById("myDIV").innerHTML="你最近怎么样?";
}</pre>

    <h2>JavaScript 语句标识符</h2>
    <p>JavaScript 语句通常以一个 语句标识符 为开始，并执行该语句。<br>
        语句标识符是保留关键字不能作为变量名使用。<br>
        下表列出了 JavaScript 语句标识符 (关键字) ：</p>
    <table>
    <tr>
        <th>语句</th>
        <th>描述</th>
    </tr>

    <tr>
        <td>break</td>
        <td>用于跳出循环。</td>
    </tr>
    <tr>
        <td>catch</td>
        <td>语句块，在 try 语句块执行出错时执行 catch 语句块。</td>
    </tr>
    <tr>
        <td>continue</td>
        <td>跳过循环中的一个迭代。</td>
    </tr>
    <tr>
        <td>do ... while</td>
        <td>执行一个语句块，在条件语句为 true 时继续执行该语句块。</td>
    </tr>
    <tr>
        <td>for</td>
        <td>在条件语句为 true 时，可以将代码块执行指定的次数。 </td>
    </tr>
    <tr>
        <td>for ... in </td>
        <td>用于遍历数组或者对象的属性（对数组或者对象的属性进行循环操作）。</td>
    </tr>
    <tr>
        <td>function</td>
        <td>定义一个函数</td>
    </tr>
    <tr>
        <td>if ... else</td>
        <td>用于基于不同的条件来执行不同的动作。</td>
    </tr>
    <tr>
        <td>return</td>
        <td>退出函数</td>
    </tr>
    <tr>
        <td>switch</td>
        <td>用于基于不同的条件来执行不同的动作。</td>
    </tr>
    <tr>
        <td>throw</td>
        <td>抛出（生成）错误 。 </td>
    </tr>
    <tr>
        <td>try</td>
        <td>实现错误处理，与 catch 一同使用。 </td>
    </tr>
    <tr>
        <td>var</td>
        <td>声明一个变量。</td>
    </tr>
    <tr>
        <td>while</td>
        <td>当条件语句为 true 时，执行语句块。 </td>
    </tr>
    </table>

    <h2>JavaScript 对大小写敏感。</h2>
    <p>JavaScript 对大小写是敏感的。<br>
        当编写 JavaScript 语句时，请留意是否关闭大小写切换键。<br>
        函数 getElementById 与 getElementbyID 是不同的。<br>
        同样，变量 myVariable 与 MyVariable 也是不同的。</p>

    <h2>空格</h2>
    <p>JavaScript 会忽略多余的空格。您可以向脚本添加空格，来提高其可读性。下面的两行代码是等效的：</p>
    <pre class="code">var person="Hege";
var person = "Hege";</pre>

    <h2>对代码行进行折行</h2>
    <p>您可以在文本字符串中使用反斜杠对代码行进行换行。下面的例子会正确地显示：</p>
    <pre class="code">document.write("你好 \
世界!");</pre>
    <p>不过，您不能像这样折行：</p>
    <pre class="code">document.write \
("你好世界!");</pre>

    <p class="attention">JavaScript 是脚本语言。浏览器会在读取代码时，逐行地执行脚本代码。而对于传统编程来说，会在执行前对所有代码进行编译。</p>


</div>
<div class="foot"></div></body>
</html>