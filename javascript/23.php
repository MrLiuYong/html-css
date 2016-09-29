<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 正则表达式</title>
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
    <h1>JavaScript 正则表达式</h1>
    <p>正则表达式（英语：Regular Expression，在代码中常简写为regex、regexp或RE）使用单个字符串来描述、匹配一系列符合某个句法规则的字符串搜索模式。<br>
        搜索模式可用于文本搜索和文本替换。</p>
    <h2>什么是正则表达式？</h2>
    <p>正则表达式是由一个字符序列形成的搜索模式。<br>
        当你在文本中搜索数据时，你可以用搜索模式来描述你要查询的内容。<br>
        正则表达式可以是一个简单的字符，或一个更复杂的模式。<br>
        正则表达式可用于所有文本搜索和文本替换的操作。</p>
    <h2>语法</h2>
    <pre class="code">/pattern/modifiers;</pre>

    <h3>实例：</h3>
    <p class="code">var patt = /w3cschool/i</p>
    <p>实例解析：<br>
        /w3cschool/i  是一个正则表达式。<br>
        w3cschool  是一个模式 (用于检索)。<br>
        i  是一个修饰符 (搜索不区分大小写)。</p>
    <h2>使用字符串方法</h2>
    <p>在 JavaScript 中，正则表达式通常用于两个字符串方法 : search() 和 replace()。</p>
    <p><strong>search() 方法</strong> 用于检索字符串中指定的子字符串，或检索与正则表达式相匹配的子字符串，并返回子串的起始位置。</p>
    <p><strong>replace() 方法</strong> 用于在字符串中用一些字符替换另一些字符，或替换一个与正则表达式匹配的子串。</p>

    <h2>search() 方法使用正则表达式</h2>
    <p>使用正则表达式搜索 "w3cschool" 字符串，且不区分大小写：</p>
    <pre class="code">var str = "Visit w3cschool";
var n = str.search(/w3cschool/i);</pre>

    <h3>search() 方法使用字符串</h3>
    <p>search 方法可使用字符串作为参数。字符串参数会转换为正则表达式：</p>
    <pre class="code">var str = "Visit w3cschool!";
var n = str.search("w3cschool");</pre>

    <h2>replace() 方法使用正则表达式</h2>
    <p>使用正则表达式且不区分大小写将字符串中的 Microsoft 替换为 w3cschool :</p>
    <pre class="code">var	str = "Visit Microsoft!";
var res = str.replace(/microsoft/i, "w3cschool");</pre>
    <h3>replace() 方法使用字符串</h3>
    <p>replace() 方法将接收字符串作为参数：</p>
    <pre class="code">var str = "Visit Microsoft!";
var res = str.replace("Microsoft", "w3cschool");</pre>

    <h2>正则表达式修饰符</h2>
    <p><strong>修饰符</strong> 可以在全局搜索中不区分大小写:</p>

    <table>
        <tbody><tr>
            <th style="width: 22%;">修饰符</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>i</td>
            <td>执行对大小写不敏感的匹配。</td>
        </tr>
        <tr>
            <td>g</td>
            <td>执行全局匹配（查找所有匹配而非在找到第一个匹配后停止）。</td>
        </tr>
        <tr>
            <td>m</td>
            <td>执行多行匹配。</td>
        </tr>
        </tbody></table>

    <br>


    <h2>正则表达式模式</h2>
    <p>方括号用于查找某个范围内的字符：</p>
    <table>
        <tbody><tr>
            <th style="width: 22%;">表达式</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>[abc]</td>
            <td>查找方括号之间的任何字符。</td>
        <tr>
            <td>[0-9]</td>
            <td>查找任何从 0 至 9 的数字。</td>
        <tr>
            <td>(x|y)</td>
            <td>查找任何以 | 分隔的选项。 </td>
        </tr>
        </tbody></table>

    <p>元字符是拥有特殊含义的字符：</p>
    <table>
        <tbody><tr>
            <th style="width: 22%;">元字符</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>\d</td>
            <td>查找数字。</td>
        </tr>
        <tr>
            <td>\s</td>
            <td>查找空白字符。</td>
        </tr>
        <tr>
            <td>\b</td>
            <td>匹配单词边界。</td>
        </tr>
        <tr>
            <td>\uxxxx</td>
            <td>查找以十六进制数 xxxx 规定的 Unicode 字符。</td>
        </tr>
        </tbody></table>

    <p>量词:</p>
    <table>
        <tbody><tr>
            <th style="width: 22%;">量词</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>n+</td>
            <td>匹配任何包含至少一个 <em>n</em> 的字符串。</td>
        </tr>
        <tr>
            <td>n*</td>
            <td>匹配任何包含零个或多个 <em>n</em> 的字符串。 </td>
        </tr>
        <tr>
            <td>n?</td>
            <td>匹配任何包含零个或一个 <em>n</em> 的字符串。</td>
        </tr>
        </tbody></table>
    <br>

    <h2>使用 RegExp 对象</h2>
    <p>在 JavaScript 中，RegExp 对象是一个预定义了属性和方法的正则表达式对象。 </p>

    <h2>使用 test()</h2>
    <p> test() 方法是一个正则表达式方法。</p>
    <p>test() 方法用于检测一个字符串是否匹配某个模式，如果字符串中含有匹配的文本，则返回 true，否则返回 false。</p>
    <p>以下实例用于搜索字符串中的字符 "e"：</p>
    <pre class="code">var patt = /e/;
patt.test("The best things in life are free!");</pre>
    <p>你可以不用设置正则表达式的变量，以上两行代码可以合并为一行：</p>
    <pre class="code">/e/.test("The best things in life are free!")</pre>

    <h2>使用 exec()</h2>
    <p>exec() 方法是一个正则表达式方法。<br>
        exec() 方法用于检索字符串中的正则表达式的匹配。<br>
        该函数返回一个数组，其中存放匹配的结果。如果未找到匹配，则返回值为 null。<br>
        以下实例用于搜索字符串中的字母 "e":</p>
    <pre class="code">/e/.exec("The best things in life are free!");</pre>







</div>
<div class="foot"></div></body>
</html>