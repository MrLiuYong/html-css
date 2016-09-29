<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript HTML DOM 元素(节点)</title>
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
    <h1>javascript HTML DOM 元素(节点)</h1>

    <h2>创建新的 HTML 元素</h2>
    <p>如需向 HTML DOM 添加新元素，您必须首先创建该元素（元素节点），然后向一个已存在的元素追加该元素。</p>
    <pre class="code">
&lt;div id=&quot;div1&quot;&gt;
&lt;p id=&quot;p1&quot;&gt;这是一个段落。&lt;/p&gt;
&lt;p id=&quot;p2&quot;&gt;这是另一个段落。&lt;/p&gt;
&lt;/div&gt;

&lt;script&gt;
var para=document.createElement(&quot;p&quot;);
var node=document.createTextNode(&quot;这是一个新段落。&quot;);
para.appendChild(node);

var element=document.getElementById(&quot;div1&quot;);
element.appendChild(para);
&lt;/script&gt;    </pre>
    <h3>例子解析：</h3>
    <p>这段代码创建新的&lt;p&gt; 元素： </p>
    <p class="code">var para=document.createElement("p");</p>

    <p>如需向 &lt;p&gt; 元素添加文本，您必须首先创建文本节点。这段代码创建了一个文本节点：</p>
    <pre class="code">var node=document.createTextNode("这是一个新段落。");</pre>

    <p>然后您必须向  &lt;p&gt 元素追加这个文本节点：</p>
    <pre class="code">para.appendChild(node);</pre>

    <p>最后您必须向一个已有的元素追加这个新元素。</p>
    <p>这段代码找到一个已有的元素：</p>
    <p class="code">var element=document.getElementById("div1"); </p>

    <p>以下代码在已存在的元素后添加新元素：</p>
    <p class="code">element.appendChild(para); </p>
    <br><hr>
    <h2>删除已有的 HTML 元素</h2>
    <p>以下代码演示了如何删除元素：</p>
    <pre class="code">
&lt;div id=&quot;div1&quot;&gt;
&lt;p id=&quot;p1&quot;&gt;这是一个段落。&lt;/p&gt;
&lt;p id=&quot;p2&quot;&gt;这是另一个段落。&lt;/p&gt;
&lt;/div&gt;
&lt;script&gt;
var parent=document.getElementById(&quot;div1&quot;);//找到 id=&quot;div1&quot; 的元素：
var child=document.getElementById(&quot;p1&quot;);//找到 id=&quot;p1&quot; 的 &lt;p&gt; 元素：
parent.removeChild(child);//从父元素中删除子元素：
&lt;/script&gt;    </pre>






</div>
<div class="foot"></div></body>
</html>