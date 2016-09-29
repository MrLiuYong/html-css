<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JavaScript 对象</title>
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
    <h1>JavaScript 对象</h1>
    <p>JavaScript 对象是拥有属性和方法的数据。</p>

    <h2>真实生活中的对象，属性和方法</h2>
    <p>真实生活中，一辆汽车是一个对象。<br>
        对象有它的属性，如重量和颜色等，方法有启动停止等:</p>
    <table>
        <tbody><tr>
            <th>
                对象
            </th>
            <th>
                属性
            </th>
            <th>
                方法
            </th>
        </tr>
        <tr>
            <td>
                <img src="img/car.gif" style="width:368px;height:230px">
            </td>
            <td>
                car.name = Fiat<br>
                car.model = 500<br>
                car.weight = 850kg<br>
                car.color = white
            </td>
            <td>
                car.start()<br>
                car.drive()<br>
                car.brake()
                <br>car.stop()</td>
        </tr>
        </tbody></table>
    <p>所有汽车都有这些属性，但是每款车的属性都不尽相同。<br>
        所有汽车都拥有这些方法，但是它们被执行的时间都不尽相同。</p>

    <h2>JavaScript 对象</h2>
    <p>在 JavaScript中，几乎所有的事物都是对象。</p>
    <p class="attention">在 JavaScript 中，对象是非常重要的，当你理解了对象，就可以了解 JavaScript 。</p>
    <p>你已经学习了 JavaScript 变量的赋值。<br>
        以下代码为变量 car 设置值为 "Fiat" :</p>
    <p class="code">var car = "Fiat";</p>
    <p>对象也是一个变量，但对象可以包含多个值（多个变量）。</p>
    <p class="code">var car = {type:"Fiat", model:500, color:"white"};</p>
    <p>在以上实例中，3 个值 ("Fiat", 500, "white") 赋予变量 car。<br>
        在以上实例中，3 个变量 (type, model, color) 赋予变量 car。</p>
    <p class="attention">JavaScript 对象是变量的容器。</p>

    <h2>对象定义</h2>
    <p>你可以使用字符来定义和创建 JavaScript 对象:</p>
    <pre class="code">var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};</pre>
    <p>定义 JavaScript 对象可以跨越多行，空格跟换行不是必须的：</p>
    <pre class="code">var person = {
    firstName:"John",
    lastName:"Doe",
    age:50,
    eyeColor:"blue"
};</pre>

    <h2>对象属性</h2>
    <p>可以说 "JavaScript 对象是变量的容器"。<br>
        但是，我们通常认为 "JavaScript 对象是键值对的容器"。<br>
        键值对通常写法为 <strong>name : value</strong> (键与值以冒号分割)。<br>
        键值对在 JavaScript 对象通常称为 <strong>对象属性</strong>。</p>
    <p>对象键值对的写法类似于：</p>
    <ul>
        <li>PHP 中的关联数组</li>
        <li>Python 中的字典</li>
        <li>C 语言中的哈希表</li>
        <li>Java 中的哈希映射</li>
        <li>Ruby 和 Perl 中的哈希表</li>
    </ul>

    <h2>访问对象属性</h2>
    <p>你可以通过两种方式访问对象属性:</p>
    <pre class="code">person.lastName;</pre>
    <pre class="code">person["lastName"];</pre>

    <h2>对象方法</h2>
    <p>对象的方法定义了一个函数，并作为对象的属性存储。<br>
        对象方法通过添加 () 调用 (作为一个函数)。<br>
        该实例访问了 person 对象的 fullName() 方法:</p>
    <pre class="code">name = person.fullName();</pre>
    <p>如果你要访问 person 对象的 fullName 属性，它将作为一个定义函数的字符串返回：</p>
    <pre class="code">name = person.fullName;</pre>

    <h2>访问对象方法</h2>
    <p>你可以使用以下语法创建对象方法：</p>
    <pre class="code">methodName : function() { code lines }</pre>
    <p>你可以使用以下语法访问对象方法：</p>
    <pre class="code">objectName.methodName()</pre>
    <p>通常 fullName() 是作为 person 对象的一个方法， fullName 是作为一个属性。<br>
        有多种方式可以创建，使用和修改 JavaScript 对象。<br>
        同样也有多种方式用来创建，使用和修改属性和方法。</p>

</div>
<div class="foot"></div></body>
</html>