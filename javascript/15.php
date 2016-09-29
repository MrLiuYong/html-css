<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 比较</title>
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
    <h1>JavaScript 比较 和 逻辑运算符</h1>
    <p>比较和逻辑运算符用于测试 true 或者 false。</p>
    <h2>比较运算符</h2>
    <p>比较运算符在逻辑语句中使用，以测定变量或值是否相等。</p>
    <p>给定<strong> x=5</strong>，下面的表格解释了比较运算符：</p>

    <table class="reference ">
        <tr>
            <th width="15%" align="left">运算符</th>
            <th width="40%" align="left">描述</th>
            <th width="18%" align="left">比较</th>
            <th width="17%" align="left">返回值</th>
        </tr>
        <tr style="background-color:#ffffff">
            <td valign="top" rowspan="2">==</td>
            <td valign="top" rowspan="2">等于</td>
            <td valign="top">x==8</td>
            <td valign="top"><em>false</em></td>
        </tr>
        <tr style="background-color:#ffffff">
            <td valign="top">x==5</td>
            <td valign="top"><em>true</em></td>
        </tr>
        <tr class="fixzebra">
            <td valign="top" rowspan="2">===</td>
            <td valign="top" rowspan="2">绝对等于（值和类型均相等）</td>
            <td valign="top">x==="5"</td>
            <td valign="top"><em>false</em></td>
        </tr>
        <tr class="fixzebra">
            <td valign="top">x===5</td>
            <td valign="top"><em>true</em></td>
        </tr>
        <tr>
            <td valign="top">!=</td>
            <td valign="top"> 不等于</td>
            <td valign="top">x!=8</td>
            <td valign="top"><em>true</em></td>
        </tr>
        <tr>
            <td valign="top" rowspan="2">!==</td>
            <td valign="top" rowspan="2"> 绝对不等于（值或类型不相等）</td>
            <td valign="top">x!=="5"</td>
            <td valign="top"><em>true</em></td>
        </tr>
        <tr class="fixzebra">
            <td valign="top">x!==5</td>
            <td valign="top"><em>false</em></td>
        </tr>
        <tr style="background-color:#ffffff">
            <td valign="top">&gt;</td>
            <td valign="top"> 大于</td>
            <td valign="top">x&gt;8</td>
            <td valign="top"><em>false</em></td>
        </tr>
        <tr class="fixzebra">
            <td valign="top">&lt;</td>
            <td valign="top"> 小于</td>
            <td valign="top">x&lt;8</td>
            <td valign="top"><em>true</em></td>
        </tr>
        <tr style="background-color:#ffffff">
            <td valign="top">&gt;=</td>
            <td valign="top"> 大于或等于</td>
            <td valign="top">x&gt;=8</td>
            <td valign="top"><em>false</em></td>
        </tr>
        <tr class="fixzebra">
            <td valign="top">&lt;=</td>
            <td valign="top"> 小于或等于</td>
            <td valign="top">x&lt;=8</td>
            <td valign="top"><em>true</em></td>
        </tr>
    </table>
    <br><hr>
    <h2>如何使用</h2>
    <p>可以在条件语句中使用比较运算符对值进行比较，然后根据结果来采取行动：</p>
    <pre class="code">if (age<18) x="Too young";</pre>

    <h2>逻辑运算符</h2>
    <p>逻辑运算符用于测定变量或值之间的逻辑。<br>
        给定 x=6 以及 y=3，下表解释了逻辑运算符：</p>
    <table>
        <tr>
            <th width="15%" align="left">运算符</th>
            <th width="45%" align="left">描述</th>
            <th width="40%" align="left">例子</th>
        </tr>
        <tr>
            <td valign="top">&amp;&amp;</td>
            <td valign="top">and</td>
            <td valign="top"> (x &lt; 10 &amp;&amp; y &gt; 1) 为 true</td>
        </tr>
        <tr>
            <td valign="top">||</td>
            <td valign="top">or</td>
            <td valign="top">(x==5 || y==5) 为 false</td>
        </tr>
        <tr>
            <td valign="top">!</td>
            <td valign="top">not</td>
            <td valign="top"> !(x==y) 为 true</td>
        </tr>
    </table>
    <br><hr>
    <h2>条件运算符</h2>
    <p>JavaScript 还包含了基于某些条件对变量进行赋值的条件运算符。</p>
    <h3>语法</h3>
    <pre class="code">variablename=(condition)?value1:value2 </pre>
    <p>如果变量 age 中的值小于 18，则向变量 voteable 赋值 "年龄太小"，否则赋值 "年龄已达到"。</p>
    <pre class="code">voteable=(age<18)?"年龄太小":"年龄已达到"; </pre>

    
</div>
<div class="foot"></div></body>
</html>