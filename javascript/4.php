<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 语法</title>
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
    <h1>JavaScript 语法</h1>
    <p>JavaScript 是一个程序语言。语法规则定义了语言结构。</p>
    <h2>JavaScript 语法</h2>
    <p>JavaScript 是一个脚本语言。<br>
        它是一个轻量级，但功能强大的编程语言。</p>
    <h2>JavaScript 字面量</h2>
    <p>在编程语言中，一个字面量是一个常量，如 3.14。</p>
    <p><strong>数字（Number）字面量</strong> 可以是整数或者是小数，或者是科学计数(e)。</p>
    <pre class="code">
520
3.1415926</pre>
    <p><strong>字符串（String）字面量</strong> 可以使用单引号或双引号:</p>
    <pre class="code">
"xiongxianhe"
"360765409@qq.com"
"www.uwenya.cc"</pre>

    <p><strong>表达式字面量</strong> 用于计算：</p>
    <pre class="code">
5 + 6
5 * 10</pre>

    <p><strong>数组（Array）字面量 </strong> 定义一个数组：</p>
    <pre class="code">[40, 100, 1, 5, 25, 10]</pre>

    <p><strong>对象（Object）字面量 </strong> 定义一个对象：</p>
    <pre class="code">{firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"}</pre>

    <p><strong>函数（Function）字面量</strong> 定义一个函数：</p>
    <pre class="code">function myFunction(a, b) { return a * b;}</pre>

    <h2>JavaScript 变量</h2>
    <p>在编程语言中，变量用于存储数据值。<br>
        JavaScript 使用关键字 <strong>var</strong> 来定义变量， 使用等号来为变量赋值：</p>
    <pre class="code">var x, length
x = 5
length = 6</pre>
    <p>变量可以通过变量名访问。在指令式语言中，变量通常是可变的。字面量是一个恒定的值。</p>
    <p class="attention">变量是一个名称。字面量是一个值。</p>

    <h2>JavaScript 操作符</h2>
    <p>JavaScript使用 <strong>算术运算符</strong> 来计算值:</p>
    <p class="code">(5 + 6) * 10</p>
    <p>JavaScript使用赋值运算符给变量赋值：</p>
    <pre class="code">x = 5
y = 6
z = (x + y) * 10</pre>
    <p>JavaScript语言有多种类型的运算符：</p>
    <table>
        <tr>
            <th>类型</th>
            <th>实例</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>赋值，算术和位运算符</td>
            <td>=  +  -  *  /</td>
            <td>在 JS 运算符中描述</td>
        </tr>
        <tr>
            <td>条件，比较及逻辑运算符</td>
            <td>==  != &lt;  &gt;  </td>
            <td>在 JS 比较运算符中描述</td>
        </tr>
    </table>

    <h2>JavaScript 语句</h2>
    <p>在 HTML 中，JavaScript 语句向浏览器发出的命令。<br>
        语句是用分号分隔：</p>
    <pre class="code">x = 5 + 6;
y = x * 10;</pre>

    <h2>JavaScript 关键词</h2>
    <p>JavaScript 语句通常于<strong>关键词</strong>为开头。 <strong>var</strong> 关键词告诉浏览器创建一个新的变量：</p>
    <pre class="code">var x = 5 + 6;
var y = x * 10;</pre>

    <h2>JavaScript 关键字</h2>
    <p>和其他任何编程语言一样，JavaScript 保留了一些关键字为自己所用。<br>
        JavaScript 同样保留了一些关键字，这些关键字在当前的语言版本中并没有使用，但在以后 JavaScript 扩展中会用到。<br>
        JavaScript 关键字必须以字母、下划线（_）或美元符（$）开始。<br>
        后续的字符可以是字母、数字、下划线或美元符（数字是不允许作为首字符出现的，以便 JavaScript 可以轻易区分开关键字和数字）。<br>
        以下是 JavaScript 中最​​重要的保留字（按字母顺序）：</p>
    <table class="reference">
        <tbody><tr>
            <td>abstract</td>
            <td>else</td>
            <td>instanceof</td>
            <td>super</td>
        </tr><tr>
        </tr><tr>
            <td>boolean</td>
            <td>enum</td>
            <td>int</td>
            <td>switch</td>
        </tr><tr>
        </tr><tr>
            <td>break</td>
            <td>export</td>
            <td>interface</td>
            <td>synchronized</td>
        </tr><tr>
        </tr><tr>
            <td>byte</td>
            <td>extends</td>
            <td>let</td>
            <td>this</td>
        </tr><tr>
        </tr><tr>
            <td>case</td>
            <td>false</td>
            <td>long</td>
            <td>throw</td>
        </tr><tr>
        </tr><tr>
            <td>catch</td>
            <td>final</td>
            <td>native</td>
            <td>throws</td>
        </tr><tr>
        </tr><tr>
            <td>char</td>
            <td>finally</td>
            <td>new</td>
            <td>transient</td>
        </tr><tr>
        </tr><tr>
            <td>class</td>
            <td>float</td>
            <td>null</td>
            <td>true</td>
        </tr><tr>
        </tr><tr>
            <td>const</td>
            <td>for</td>
            <td>package</td>
            <td>try</td>
        </tr><tr>
        </tr><tr>
            <td>continue</td>
            <td>function</td>
            <td>private</td>
            <td>typeof</td>
        </tr><tr>
        </tr><tr>
            <td>debugger</td>
            <td>goto</td>
            <td>protected</td>
            <td>var</td>
        </tr><tr>
        </tr><tr>
            <td>default</td>
            <td>if</td>
            <td>public</td>
            <td>void</td>
        </tr><tr>
        </tr><tr>
            <td>delete</td>
            <td>implements</td>
            <td>return</td>
            <td>volatile</td>
        </tr><tr>
        </tr><tr>
            <td>do</td>
            <td>import</td>
            <td>short</td>
            <td>while</td>
        </tr><tr>
        </tr><tr>
            <td>double</td>
            <td>in</td>
            <td>static</td>
            <td>with</td>
        </tr><tr>
        </tr></tbody></table>

    <h2>JavaScript 注释</h2>
    <p>不是所有的 JavaScript 语句都是"命令"。双斜杠 // 后的内容将会被浏览器忽略：</p>
    <pre class="code">// 我不会执行</pre>

    <h2>JavaScript 数据类型</h2>
    <p>JavaScript 有多种数据类型：数字，字符串，数组，对象等等：</p>
    <pre class="code">var length = 16;                                  // Number 通过数字字面量赋值
var points = x * 10;                              // Number 通过表达式字面量赋值
var lastName = "Johnson";                         // String 通过字符串字面量赋值
var cars = ["Saab", "Volvo", "BMW"];              // Array  通过数组字面量赋值
var person = {firstName:"John", lastName:"Doe"};  // Object 通过对象字面量赋值</pre>

    <h2>数据类型的概念</h2>
    <p>编程语言中，数据类型是一个非常重要的内容。<br>
        为了可以操作变量，了解数据类型的概念非常重要。<br>
        如果没有使用数据类型，以下实例将无法执行：</p>
    <p class="code">16 + "Volvo"</p>
    <p><strong>结果是什么？</strong></p>

    <h2>JavaScript 函数</h2>
    <p>JavaScript 语句可以写在函数内，函数可以重复引用：<br>
        <strong>引用一个函数</strong> = 调用函数(执行函数内的语句)。</p>
    <pre class="code">function myFunction(a, b) {
   	return a * b;      // 返回 a 乘于 b 的结果
}</pre>

    <h2>JavaScript 对大小写敏感</h2>
    <p>JavaScript 对大小写是敏感的。<br>
        当编写 JavaScript 语句时，请留意是否关闭大小写切换键。<br>
        函数 getElementById 与 getElementbyID 是不同的。<br>
        同样，变量 myVariable 与 MyVariable 也是不同的。</p>
</div>
<div class="foot"></div></body>
</html>