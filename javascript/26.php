<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript:void(0) 含义</title>
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
    <h1>javascript:void(0) 含义</h1>
    <p class="intro">我们经常会使用到 javascript:void(0) 这样的代码，那么在 JavaScript 中 javascript:void(0) 代表的是什么意思呢？</p>
    <p class="intro">javascript:void(0) 中最关键的是 void 关键字，
        void 是 JavaScript 中非常重要的关键字，该操作符指定要计算一个表达式但是不返回值。
    </p>
    <p>语法格式如下：</p>
<pre class="code">
&lt;head&gt;
&lt;script type="text/javascript"&gt;
void func()
javascript:void func()

或者

void(func())
javascript:void(func())
&lt;/script&gt;
&lt;/head&gt;
</pre>
    <p>下面的代码创建了一个超级链接，当用户点击以后不会发生任何事。</p>
    <p class="code">&lt;a href="javascript:void(0)"&gt;单击此处什么也不会发生&lt;/a&gt;</p>
    <p>当用户链接时，void(0) 计算为 0，但 Javascript 上没有任何效果。</p>

    <p>以下实例中，在用户点击链接后显示警告信息：</p>
    <pre class="code">
&lt;head&gt;<br>
&lt;script type="text/javascript"&gt;

&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;a href="javascript:void(alert('Warning!!!'))"&gt;点我!&lt;/a&gt;
&lt;/body&gt;</pre>

    <p>以下实例中参数 a 将返回 undefined :</p>
    <pre class="code">
&lt;head&gt;<br>
&lt;script type="text/javascript"&gt;

function getValue(){
&nbsp;&nbsp;var a,b,c;
&nbsp;&nbsp;a = void ( b = 5, c = 7 );
&nbsp;&nbsp;document.write('a = ' + a + ' b = ' + b +' c = ' + c );
}<br>

&lt;/script&gt;
&lt;/head&gt;</pre>
    <hr>

    <h2>href="#"与href="javascript:void(0)"的区别</h2>
    <p><strong>#</strong> 包含了一个位置信息，默认的锚是<strong>#top</strong> 也就是网页的上端。</p>
    <p> 而javascript:void(0), 仅仅表示一个死链接。</p>
    <p>在页面很长的时候会使用 <strong>#</strong> 来定位页面的具体位置，格式为：<strong># + id</strong>。</p>
    <p>如果你要定义一个死链接请使用 javascript:void(0) 。
    </p>

    <pre class="code">
&lt;a href="javascript:void(0);"&gt;点我没有反应的!&lt;/a&gt;

&lt;a href="#pos"&gt;点我定位到指定位置!&lt;/a&gt;

&lt;br&gt;

...

&lt;br&gt;

&lt;p id="pos"&gt;尾部定位点&lt;/p&gt;</pre>

    
</div>
<div class="foot"></div></body>
</html>