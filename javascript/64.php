<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>javascript HTML DOM EventListener</title>
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
    <h1>javascript HTML DOM EventListener</h1>

    <h2>addEventListener() 方法</h2>
    <p>在用户点击按钮时触发监听事件：</p>
    <p class="code">document.getElementById("myBtn").addEventListener("click", displayDate);</p>
    <p> addEventListener() 方法用于向指定元素添加事件句柄。</p>
    <p> addEventListener() 方法添加的事件句柄不会覆盖已存在的事件句柄。</p>
    <p> 你可以向一个元素添加多个事件句柄。</p>
    <p> 你可以向同个元素添加多个同类型的事件句柄，如：两个 "click" 事件。</p>
    <p> 你可以向任何 DOM 对象添加事件监听，不仅仅是 HTML 元素。如： window 对象。</p>
    <p> addEventListener() 方法可以更简单的控制事件（冒泡与捕获）。</p>
    <p> 当你使用 addEventListener() 方法时,  JavaScript 从 HTML 标记中分离开来，可读性更强， 在没有控制HTML标记时也可以添加事件监听。</p>
    <p> 你可以使用 removeEventListener() 方法来移除事件的监听。<br></p>

    <h3>语法</h3>
    <p class="code">element.addEventListener(event, function, useCapture);</p>
    <p> 第一个参数是事件的类型 (如 "click" 或 "mousedown"). </p>
    <p> 第二个参数是事件触发后调用的函数。 </p>
    <p> 第三个参数是个布尔值用于描述事件是冒泡还是捕获。该参数是可选的。</p>
    <p class="attention">注意:不要使用 "on" 前缀。 例如，使用 "click" ,而不是使用 "onclick"。</p>
    <h2>向原元素添加事件句柄</h2>
    <p>当用户点击元素时弹出 "Hello World!" :</p>
    <p class="code">element.addEventListener("click", function(){ alert("Hello World!"); });</p>
    <p>你可以使用函数名，来引用外部函数:</p>
    <pre class="code">element.addEventListener("click", myFunction);

function myFunction() {
    alert ("Hello World!");
}</pre>

    <h2>向同一个元素中添加多个事件句柄</h2>
    <p>addEventListener() 方法允许向同个元素添加多个事件，且不会覆盖已存在的事件：</p>
    <pre class="code">element.addEventListener("click", myFunction);
element.addEventListener("click", mySecondFunction);</pre>
    <p>你可以向同个元素添加不同类型的事件：</p>
    <pre class="code">element.addEventListener("mouseover", myFunction);
element.addEventListener("click", mySecondFunction);
element.addEventListener("mouseout", myThirdFunction);</pre>
    <h2>向 Window 对象添加事件句柄</h2>
    <p>addEventListener() 方法允许你在 HTML DOM 对象添加事件监听， HTML DOM 对象如： HTML 元素, HTML 文档, window 对象。或者其他支出的事件对象如: xmlHttpRequest 对象。</p>
    <pre class="code">window.addEventListener("resize", function(){
    document.getElementById("demo").innerHTML = sometext;
});</pre>
    <h2>传递参数</h2>
    <p>当传递参数值时，使用"匿名函数"调用带参数的函数：</p>
    <pre class="code">element.addEventListener("click", function(){ myFunction(p1, p2); });</pre>

    <h2>事件冒泡或事件捕获？</h2>
    <p>事件传递有两种方式：冒泡与捕获。</p>
    <p>事件传递定义了元素事件触发的顺序。
        如果你将 &lt;p&gt; 元素插入到 &lt;div&gt; 元素中，用户点击 &lt;p&gt; 元素, 哪个元素的 "click" 事件先被触发呢？</p>

    <p>在 <em> 冒泡 </em>中，内部元素的事件会先被触发，然后再触发外部元素，即：
        &lt;p&gt; 元素的点击事件先触发，然后会触发 &lt;div&gt; 元素的点击事件。</p>

    <p>在 <em> 捕获 </em>中，外部元素的事件会先被触发，然后才会触发内部元素的事件，即： &lt;div&gt; 元素的点击事件先触发
        ，然后再触发 &lt;p&gt; 元素的点击事件。</p>

    <p> addEventListener() 方法可以指定 "useCapture"  参数来设置传递类型：</p>
    <p class="code">addEventListener(event, function, useCapture);</p>
    <p>默认值为 false, 即冒泡传递，当值为 true 时, 事件使用捕获传递。</p>
    <p class="code">document.getElementById("myDiv").addEventListener("click", myFunction, true);</p>
    <h2>removeEventListener() 方法</h2>
    <p>removeEventListener() 方法移除由 addEventListener() 方法添加的事件句柄:</p>
    <p class="code">element.removeEventListener("mousemove", myFunction);</p>




</div>
<div class="foot"></div></body>
</html>