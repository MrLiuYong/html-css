<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 字符串</title>
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
    <h1>JavaScript 字符串</h1>
    <p>JavaScript 字符串用于存储和处理文本。</p>

    <h2>JavaScript 字符串</h2>
    <p>字符串可以存储一系列字符，如 "John Doe"。<br>
        字符串可以是插入到引号中的任何字符。你可以使用单引号或双引号：</p>
    <pre class="code">var carname = "Volvo XC60";
var carname = 'Volvo XC60';</pre>
    <p>你可以使用索引位置来访问字符串中的每个字符：</p>
    <pre class="code">var character = carname[7];</pre>
    <p>字符串的索引从 0 开始，这意味着第一个字符索引值为 [0],第二个为 [1], 以此类推。<br>
        你可以在字符串中使用引号，字符串中的引号不要与字符串的引号相同:</p>
    <pre class="code">var answer = "It's alright";
var answer = "He is called 'Johnny'";
var answer = 'He is called "Johnny"';</pre>
    <p>你也可以在字符串添加转义字符来使用引号：</p>
    <pre class="code">var x = 'It\'s alright';
var y = "He is called \"Johnny\"";</pre>

    <h2>字符串长度</h2>
    <p>可以使用内置属性 length 来计算字符串的长度：</p>
    <pre class="code">var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var sln = txt.length;</pre>

    <h2>特殊字符</h2>
    <p>在 JavaScript 中，字符串写在单引号或双引号来中。<br>
        因为这样，以下实例 JavaScript 无法解析：</p>
    <pre class="code"> "We are the so-called "Vikings" from the north."</pre>
    <p>字符串 "We are the so-called " 被截断。<br>
        如何解决以上的问题呢？可以使用反斜杠 (\) 来转义 "Vikings" 字符串中的双引号，如下:</p>
    <pre class="code"> "We are the so-called \"Vikings\" from the north."</pre>
    <p>反斜杠是一个转义字符。 转义字符将特殊字符转换为字符串字符：<br>
        转义字符 (\) 可以用于转义撇号，换行，引号，等其他特殊字符。<br>
        下表中列举了在字符串中可以使用转义字符转义的特殊字符：</p>
    <table>
        <tr>
            <th>代码</th>
            <th>输出</th>
        </tr>
        <tr>
            <td>\'</td>
            <td>单引号</td>
        </tr>
        <tr>
            <td>\"</td>
            <td>双引号</td>
        </tr>
        <tr>
            <td>\\</td>
            <td>反斜杠</td>
        </tr>
        <tr>
            <td>\n</td>
            <td>换行</td>
        </tr>
        <tr>
            <td>\r</td>
            <td>回车</td>
        </tr>
        <tr>
            <td>\t</td>
            <td>tab(制表符)</td>
        </tr>
        <tr>
            <td>\b</td>
            <td>退格符</td>
        </tr>
        <tr>
            <td>\f</td>
            <td>换页符</td>
        </tr>
    </table>

    <h2>字符串可以是对象</h2>
    <p>通常， JavaScript 字符串是原始值，可以使用字符创建： var firstName = "John"<br>
        但我们也可以使用 new 关键字将字符串定义为一个对象： var firstName = new String("John")</p>
    <pre class="code">var x = "John";
var y = new String("John");
typeof x // 返回 String
typeof y // 返回 Object</pre>
    <p class="attention">不要创建 String 对象。它会拖慢执行速度，并可能产生其他副作用：</p>
    <pre class="code">var x = "John";
var y = new String("John");
(x === y) // 结果为 false，因为是字符串，y 是对象</pre>
    <p>=== 为绝对相等，即数据类型与值都必须相等。</p>

    <h2>字符串属性和方法</h2>
    <p>原始值字符串，如 "John", 没有属性和方法(因为他们不是对象)。<br>
        原始值可以使用 JavaScript 的属性和方法，因为 JavaScript 在执行方法和属性时可以把原始值当作对象</p>
    <p><strong>字符串方法我们将在下一章节中介绍。</strong></p>

    <h2>字符串属性</h2>
    <table>
        <tr>
            <th style="width:24%">属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>constructor</td>
            <td>返回创建字符串属性的函数</td>
        </tr>
        <tr>
            <td>length</td>
            <td>返回字符串的长度</td>
        </tr>
        <tr>
            <td>prototype</td>
            <td>允许您向对象添加属性和方法</td>
        </tr>
    </table>
    <br><hr>
    <h2>字符串方法</h2>
    <table>
        <tr>
            <th style="width:24%">Method</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>charAt()</td>
            <td>返回指定索引位置的字符</td>
        </tr>
        <tr>
            <td>charCodeAt()</td>
            <td>返回指定索引位置字符的 Unicode 值</td>
        </tr>
        <tr>
            <td>concat()</td>
            <td>连接两个或多个字符串，返回连接后的字符串</td>
        </tr>
        <tr>
            <td>fromCharCode()</td>
            <td>将 Unicode 转换为字符串</td>
        </tr>
        <tr>
            <td>indexOf()</td>
            <td>返回字符串中检索指定字符第一次出现的位置</td>
        </tr>
        <tr>
            <td>lastIndexOf()</td>
            <td>返回字符串中检索指定字符最后一次出现的位置</td>
        </tr>
        <tr>
            <td>localeCompare()</td>
            <td>用本地特定的顺序来比较两个字符串</td>
        </tr>
        <tr>
            <td>match()</td>
            <td>找到一个或多个正则表达式的匹配</td>
        </tr>
        <tr>
            <td>replace()</td>
            <td>替换与正则表达式匹配的子串</td>
        </tr>
        <tr>
            <td>search()</td>
            <td>检索与正则表达式相匹配的值</td>
        </tr>
        <tr>
            <td>slice()</td>
            <td>提取字符串的片断，并在新的字符串中返回被提取的部分</td>
        </tr>
        <tr>
            <td>split()</td>
            <td>把字符串分割为子字符串数组</td>
        </tr>
        <tr>
            <td>substr()</td>
            <td>从起始索引号提取字符串中指定数目的字符</td>
        </tr>
        <tr>
            <td>substring()</td>
            <td>提取字符串中两个指定的索引号之间的字符</td>
        </tr>
        <tr>
            <td>toLocaleLowerCase()</td>
            <td>根据主机的语言环境把字符串转换为小写，只有几种语言（如土耳其语）具有地方特有的大小写映射</td>
        </tr>
        <tr>
            <td>toLocaleUpperCase()</td>
            <td>根据主机的语言环境把字符串转换为大写，只有几种语言（如土耳其语）具有地方特有的大小写映射</td>
        </tr>
        <tr>
            <td>toLowerCase()</td>
            <td>把字符串转换为小写</td>
        </tr>
        <tr>
            <td>toString()</td>
            <td>返回字符串对象值</td>
        </tr>
        <tr>
            <td>toUpperCase()</td>
            <td>把字符串转换为大写</td>
        </tr>
        <tr>
            <td>trim()</td>
            <td>移除字符串首尾空白</td>
        </tr>
        <tr>
            <td>valueOf()</td>
            <td>返回某个字符串对象的原始值</td>
        </tr>
    </table>



</div>
<div class="foot"></div></body>
</html>