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
    <p>JavaScript 中的所有事物都是对象：字符串、数值、数组、函数...<br>
        此外，JavaScript 允许自定义对象。</p>
    <h2>所有事物都是对象</h2>
    <p>JavaScript 提供多个内建对象，比如 String、Date、Array 等等。 对象只是带有属性和方法的特殊数据类型。</p>
    <ul>
        <li>布尔型可以是一个对象。</li>
        <li>数字型可以是一个对象。</li>
        <li>字符串也可以是一个对象</li>
        <li>日期是一个对象</li>
        <li>数学和正则表达式也是对象</li>
        <li>数组是一个对象</li>
        <li>甚至函数也可以是对象</li>
    </ul>

    <h2>JavaScript 对象</h2>
    <p>对象只是一种特殊的数据。对象拥有<strong>属性</strong>和<strong>方法</strong>。</p>

    <h2>访问对象的属性</h2>
    <p>属性是与对象相关的值。<br>
        访问对象属性的语法是：</p>
    <p class="code">objectName.propertyName</p>
    <p>这个例子使用了 String 对象的 length 属性来获得字符串的长度：</p>
    <pre class="code">var message="Hello World!";
var x=message.length;</pre>
    <p>在以上代码执行后，x 的值将是：</p>
    <pre class="code">12</pre>

    <h2>访问对象的方法</h2>
    <p>方法是能够在对象上执行的动作。<br>
        您可以通过以下语法来调用方法：</p>
    <pre class="code">objectName.methodName()</pre>
    <p>这个例子使用了 String 对象的 toUpperCase() 方法来将文本转换为大写：</p>
    <pre class="code">var message="Hello world!";
var x=message.toUpperCase();</pre>
    <p>在以上代码执行后，x 的值将是：</p>
    <pre class="code">HELLO WORLD!</pre>

    <h2>创建 JavaScript 对象</h2>
    <p>通过 JavaScript，您能够定义并创建自己的对象。<br>
        创建新对象有两种不同的方法：</p>
    <ul>
        <li>定义并创建对象的实例</li>
        <li>使用函数来定义对象，然后创建新的对象实例</li>
    </ul>

    <h2>创建直接的实例</h2>
    <p>这个例子创建了对象的一个新实例，并向其添加了四个属性：</p>
    <pre class="code">person=new Object();
person.firstname="John";
person.lastname="Doe";
person.age=50;
person.eyecolor="blue";</pre>
    <p>替代语法（使用对象 literals）：</p>
    <pre class="code">person={firstname:"John",lastname:"Doe",age:50,eyecolor:"blue"};</pre>

    <h2>使用对象构造器</h2>
    <p>本例使用函数来构造对象：</p>
    <pre class="code">function person(firstname,lastname,age,eyecolor){
	this.firstname=firstname;
	this.lastname=lastname;
	this.age=age;
    this.eyecolor=eyecolor;
}
myFather=new person("John","Doe",50,"blue");
document.write(myFather.firstname + " is " + myFather.age + " years old.");</pre>

    <h2>创建 JavaScript 对象实例</h2>
    <p>一旦您有了对象构造器，就可以创建新的对象实例，就像这样：</p>
    <pre class="code">var myFather=new person("John","Doe",50,"blue");
var myMother=new person("Sally","Rally",48,"green");</pre>

    <h2>把属性添加到 JavaScript 对象</h2>
    <p>您可以通过为对象赋值，向已有对象添加新属性：<br>
        假设 personObj 已存在 - 您可以为其添加这些新属性：firstname、lastname、age 以及 eyecolor：</p>
    <pre class="code">person.firstname="John";
person.lastname="Doe";
person.age=30;
person.eyecolor="blue";

x=person.firstname;</pre>
    <p>在以上代码执行后，x 的值将是：</p>
    <pre class="code">John</pre>

    <h2>把方法添加到 JavaScript 对象</h2>
    <p>方法只不过是附加在对象上的函数。<br>
        在构造器函数内部定义对象的方法：</p>
    <pre class="code">function person(firstname,lastname,age,eyecolor)
{
	this.firstname=firstname;
	this.lastname=lastname;
	this.age=age;
	this.eyecolor=eyecolor;

	this.changeName=changeName;
	function changeName(name)
	{
		this.lastname=name;
	}
}</pre>
    <p>changeName() 函数 name 的值赋给 person 的 lastname 属性。</p>
    <pre class="code">myMother.changeName("Doe");</pre>

    <h2>JavaScript 类</h2>
    <p>JavaScript 是面向对象的语言，但 JavaScript 不使用类。<br>
        在 JavaScript 中，不会创建类，也不会通过类来创建对象（就像在其他面向对象的语言中那样）。<br>
        JavaScript 基于 prototype，而不是基于类的。</p>

    <h2>JavaScript for...in 循环</h2>
    <p>JavaScript for...in 语句循环遍历对象的属性。</p>
    <h3>语法</h3>
    <pre class="code">for (variable in object)
{
	执行的代码……
}</pre>
    <p class="attention">注意： for...in 循环中的代码块将针对每个属性执行一次。</p>

    <h3>实例</h3>
    <p>循环遍历对象的属性：</p>
    <pre class="code">var person={fname:"John",lname:"Doe",age:25};

for (x in person)
{
    txt=txt + person[x];
}</pre>

</div>
<div class="foot"></div></body>
</html>