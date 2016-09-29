<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 类型转换</title>
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
    <h1>JavaScript 类型转换</h1>
    <p>Number() 转换为数字， String() 转换为字符串， Boolean() 转化为布尔值。</p>
    <h2>JavaScript 数据类型</h2>
    <p>在 JavaScript 中有 5 种不同的数据类型：</p>
    <ul>
        <li>string</li>
        <li>number</li>
        <li>boolean</li>
        <li>object</li>
        <li>function</li>
    </ul>
    <p>3 种对象类型：</p>
    <ul>
        <li>Object</li>
        <li>Date</li>
        <li>Array</li>
    </ul>
    <p> 2 个不包含任何值的数据类型：</p>
    <ul>
        <li>null</li>
        <li>undefined</li>
    </ul>
    <hr>

    <h2>typeof 操作符</h2>
    <p>你可以使用 <strong>typeof</strong> 操作符来查看 JavaScript 变量的数据类型。</p>
    <pre class="code">typeof "John"                 // 返回 string
typeof 3.14                   // 返回 number
typeof NaN                    // 返回 number
typeof false                  // 返回 boolean
typeof [1,2,3,4]              // 返回 object
typeof {name:'John', age:34}  // 返回 object
typeof new Date()             // 返回 object
typeof function () {}         // 返回 function
typeof myCar                  // 返回 undefined (如果 myCar 没有声明)
typeof null                   // 返回 object</pre>
    <p>请注意：</p>
    <ul>
        <li> NaN 的数据类型是 number</li>
        <li> 数组(Array)的数据类型是 object</li>
        <li> 日期(Date)的数据类型为 object</li>
        <li> null 的数据类型是 object</li>
        <li> 未定义变量的数据类型为 undefined</li>
    </ul>

    <p>如果对象是 JavaScript Array 或 JavaScript Date ，我们就无法通过 <strong>typeof</strong> 来判断他们的类型，因为都是 返回 Object。</p>

    <h2>constructor 属性</h2>
    <p>constructor 属性返回所有 JavaScript 变量的构造函数。</p>
    <pre class="code">"John".constructor       // 返回函数 String()  { [native code] }
(3.14).constructor        // 返回函数 Number()  { [native code] }
false.constructor         // 返回函数 Boolean() { [native code] }
[1,2,3,4].constructor     // 返回函数 Array()   { [native code] }
{name:'John', age:34}.constructor  // 返回函数 Object()  { [native code] }
new Date().constructor     // 返回函数 Date()    { [native code] }
function () {}.constructor  // 返回函数 Function(){ [native code] }</pre>
    <p>你可以使用 constructor 属性来查看是对象是否为数组 (包含字符串 "Array"):</p>
    <pre class="code">function isArray(myArray) {
    return myArray.constructor.toString().indexOf("Array") > -1;
}</pre>
    <p>你可以使用 constructor 属性来查看是对象是否为日期 (包含字符串 "Date"):</p>
    <pre class="code">function isDate(myDate) {
    return myDate.constructor.toString().indexOf("Date") > -1;
}</pre>

    <h2>JavaScript 类型转换</h2>
    <p>JavaScript 变量可以转换为新变量或其他数据类型：</p>
    <ul>
        <li>通过使用 JavaScript 函数</li>
        <li>通过 JavaScript 自身自动转换</li>
    </ul>
    <hr>
    <h2>将数字转换为字符串</h2>
    <p>全局方法 <strong>String()</strong> 可以将数字转换为字符串。</p>

    <p>该方法可用于任何类型的数字，字母，变量，表达式：</p>
    <pre class="code">String(x)         // 将变量 x 转换为字符串并返回
String(123)       // 将数字 123 转换为字符串并返回
String(100 + 23)  // 将数字表达式转换为字符串并返回</pre>
    <p>Number 方法 toString() 也是有同样的效果。</p>
    <pre class="code">x.toString()
(123).toString()
(100 + 23).toString()</pre>
    <p>更多数字转换为字符串的方法：</p>
    <table class="reference">
        <tbody><tr>
            <th style="width:25%">方法</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>toExponential()</td>
            <td>把对象的值转换为指数计数法。</td>
        </tr>
        <tr>
            <td>toFixed()</td>
            <td>把数字转换为字符串，结果的小数点后有指定位数的数字。</td>
        </tr>
        <tr>
            <td>toPrecision()</td>
            <td>把数字格式化为指定的长度。</td>
        </tr>
        </tbody></table>

    <h2>将布尔值转换为字符串</h2>
    <p>全局方法 String() 可以将布尔值转换为字符串。</p>
    <pre class="code">String(false)        // 返回 "false"
String(true)         // 返回 "true"</pre>
    <p>Boolean 方法 toString() 也有相同的效果。</p>
    <pre class="code">false.toString()     // 返回 "false"
true.toString()      // 返回 "true"</pre>

    <h2>将日期转换为字符串</h2>
    <p>全局方法 String() 可以将日期转换为字符串。</p>
    <pre class="code">String(Date())      // 返回 Thu Jul 17 2014 15:38:19 GMT+0200 (W. Europe Daylight Time)</pre>
    <p>Date 方法 toString() 也有相同的效果。</p>
    <pre class="code">Date().toString()   // 返回 Thu Jul 17 2014 15:38:19 GMT+0200 (W. Europe Daylight Time)</pre>

    <p>查看更多关于日期转换为字符串的函数：</p>
    <table>
        <tbody><tr>
            <th>方法</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>getDate()</td>
            <td>从 Date 对象返回一个月中的某一天 (1 ~ 31)。</td>
        </tr>
        <tr>
            <td>getDay()</td>
            <td>从 Date 对象返回一周中的某一天 (0 ~ 6)。</td>
        </tr>
        <tr>
            <td>getFullYear()</td>
            <td>从 Date 对象以四位数字返回年份。</td>
        </tr>
        <tr>
            <td>getHours()</td>
            <td>返回 Date 对象的小时 (0 ~ 23)。</td>
        </tr>
        <tr>
            <td>getMilliseconds()</td>
            <td>返回 Date 对象的毫秒(0 ~ 999)。</td>
        </tr>
        <tr>
            <td>getMinutes()</td>
            <td>返回 Date 对象的分钟 (0 ~ 59)。</td>
        </tr>
        <tr>
            <td>getMonth()</td>
            <td>从 Date 对象返回月份 (0 ~ 11)。</td>
        </tr>
        <tr>
            <td>getSeconds()</td>
            <td>返回 Date 对象的秒数 (0 ~ 59)。</td>
        </tr>
        <tr>
            <td>getTime()</td>
            <td>返回 1970 年 1 月 1 日至今的毫秒数。</td>
        </tr>
        </tbody></table>

    <h2>将字符串转换为数字</h2>
    <p>全局方法 <strong>Number()</strong> 可以将字符串转换为数字。</p>
    <p>字符串包含数字(如 "3.14") 转换为数字 (如 3.14).</p>
    <p>空字符串转换为 0。</p>
    <p>其他的字符串会转换为 NaN (不是个数字)。</p>
    <pre class="code">Number("3.14")    // 返回 3.14
Number(" ")       // 返回 0
Number("")        // 返回 0
Number("99 88")   // 返回 NaN</pre>
    <p>查看到更多关于字符串转为数字的方法：</p>
    <table>
        <tbody><tr>
            <th style="width:25%">方法</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>parseFloat()</td>
            <td>解析一个字符串，并返回一个浮点数。</td>
        </tr>
        <tr>
            <td>parseInt()</td>
            <td>解析一个字符串，并返回一个整数。</td>
        </tr>
        </tbody></table>


    <h2>一元运算符 + </h2>
    <p> <strong>Operator + </strong> 可用于将变量转换为数字：</p>
    <pre class="code">var y = "5";      // y 是一个字符串
var x = + y;      // x 是一个数字</pre>
    <p>如果变量不能转换，它仍然会是一个数字，但值为 NaN (不是一个数字):</p>
    <pre class="code">var y = "John";   // y 是一个字符串
var x = + y;      // x 是一个数字 (NaN)</pre>

    <h2>将布尔值转换为数字</h2>
    <p>全局方法 Number() 可将布尔值转换为数字。</p>
    <pre class="code">Number(false)     // 返回 0
Number(true)      // 返回 1</pre>

    <h2>将日期转换为数字</h2>
    <p>全局方法 Number() 可将日期转换为数字。</p>
    <pre class="code">d = new Date();
Number(d)          // 返回 1404568027739</pre>
    <p>日期方法 getTime() 也有相同的效果。</p>
    <pre class="code">d = new Date();
d.getTime()        // 返回 1404568027739</pre>

    <h2>自动转换类型</h2>
    <p>当 JavaScript 尝试操作一个 "错误" 的数据类型时，会自动转换为 "正确" 的数据类型。<br>
        以下输出结果不是你所期望的：</p>
    <pre class="code">5 + null    // 返回 5         null 转换为 0
"5" + null  // 返回"5null"   null 转换为 "null"
"5" + 1     // 返回 "51"      1 转换为 "1"
"5" - 1     // 返回 4         "5" 转换为 5</pre>

    <h2>自动转换为字符串</h2>
    <p>当你尝试输出一个对象或一个变量时 JavaScript 会自动调用变量的 toString() 方法：</p>
    <pre class="code">document.getElementById("demo").innerHTML = myVar;

// if myVar = {name:"Fjohn"}  // toString 转换为 "[object Object]"
// if myVar = [1,2,3,4]       // toString 转换为 "1,2,3,4"
// if myVar = new Date()      // toString 转换为 "Fri Jul 18 2014 09:08:55 GMT+0200"</pre>
    <p>数字和布尔值也经常相互转换：</p>
    <pre class="code">// if myVar = 123             // toString 转换为 "123"
// if myVar = true            // toString 转换为 "true"
// if myVar = false           // toString 转换为 "false"</pre>




</div>
<div class="foot"></div></body>
</html>