<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 运算符</title>
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
    <h1>JavaScript 运算符</h1>
    <p>运算符 = 用于给 JavaScript 变量赋值。<br>
        算术运算符 + 用于把值加起来</p>
    <p>指定变量值，并将值相加：</p>
    <pre class="code">y=5;
z=2;
x=y+z;</pre>

    <h2>JavaScript 算术运算符</h2>
    <p给定<strong> y=5</strong>，下面的表格解释了这些算术运算符： </p>

    <table class="reference notranslate">
        <tr>
            <th>运算符</th>
            <th>描述</th>
            <th>例子</th>
            <th> x 运算结果</th>
            <th> y 运算结果</th>
        </tr>
        <tr>
            <td>+</td>
            <td>加法</td>
            <td>x=y+2</td>
            <td>7</td>
            <td>5</td>
        </tr>
        <tr>
            <td>-</td>
            <td>减法</td>
            <td>x=y-2</td>
            <td>3</td>
            <td>5</td>
        </tr>
        <tr>
            <td>*</td>
            <td>乘法</td>
            <td>x=y*2</td>
            <td>10</td>
            <td>5</td>
        <tr>
            <td>/</td>
            <td>除法
            </td>
            <td>x=y/2</td>
            <td>2.5</td>
            <td>5</td>
        </tr>
        <tr>
            <td>%</td>
            <td>取模（余数）</td>
            <td>x=y%2</td>
            <td>1</td>
            <td>5</td>
        </tr>
        <tr>
            <td rowspan="2">++</td>
            <td rowspan="2">自增</td>
            <td>x=++y</td>
            <td>6</td>
            <td>6</td>
        </tr>
        <tr class="fixzebra">
            <td>x=y++</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr style="background-color:#ffffff">
            <td rowspan="2">--</td>
            <td rowspan="2">自减</td>
            <td>x=--y</td>
            <td>4</td>
            <td>4</td>
        </tr>
        <tr style="background-color:#ffffff">
            <td>x=y--</td>
            <td>5</td>
            <td>4</td>
        </tr>
    </table>
    <br><hr>
    <h2>JavaScript 赋值运算符</h2>
    <p>赋值运算符用于给 JavaScript 变量赋值。
    </p>
    <p>给定 <strong>x=10 </strong>和<strong> y=5</strong>，下面的表格解释了赋值运算符：</p>

    <table>
        <tr>
            <th>运算符</th>
            <th>例子</th>
            <th>等同于</th>
            <th>运算结果</th>
        </tr>
        <tr>
            <td>=</td>
            <td>x=y</td>
            <td> </td>
            <td>x=5</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>x+=y</td>
            <td>x=x+y</td>
            <td>x=15</td
        </tr>
        <tr>
            <td>-=</td>
            <td>x-=y</td>
            <td>x=x-y</td>
            <td>x=5</td>
        </tr>
        <tr>
            <td>*=</td>
            <td>x*=y</td>
            <td>x=x*y</td>
            <td>x=50</td>
        </tr>
        <tr>
            <td>/=</td>
            <td>x/=y</td>
            <td>x=x/y</td>
            <td>x=2</td>
        </tr>
        <tr>
            <td>%=</td>
            <td>x%=y</td>
            <td>x=x%y</td>
            <td>x=0</td>
        </tr>
    </table>

    <h2>用于字符串的 + 运算符</h2>
    <p>+ 运算符用于把文本值或字符串变量加起来（连接起来）。</p>

    <p>如需把两个或多个字符串变量连接起来，请使用 + 运算符。</p>
    <pre class="code">txt1="What a very";
txt2="nice day";
txt3=txt1+txt2;</pre>
    <p>txt3 运算结果如下:?</p>
    <br>
    <p>要想在两个字符串之间增加空格，需要把空格插入一个字符串之中：</p>
    <pre class="code">txt1="What a very ";
txt2="nice day";
txt3=txt1+txt2;</pre>
    <p>在以上语句执行后，变量 txt3包含的值是：?</p>
    <p>或者把空格插入表达式中：:</p>
    <pre class="code">txt1="What a very";
txt2="nice day";
txt3=txt1+" "+txt2;</pre>

    <h2>对字符串和数字进行加法运算</h2>
    <p>两个数字相加，返回数字相加的和，如果数字与字符串相加，返回字符串，如下实例：</p>
    <pre class="code">x=5+5;
y="5"+5;
z="Hello"+5;</pre>
    <p>x,y, 和 z 输出结果为:?</p>
    <p class="attention">规则:如果把数字与字符串相加，结果将成为字符串！</p>

</div>
<div class="foot"></div></body>
</html>