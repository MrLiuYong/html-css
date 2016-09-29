<!DOCTYPE html>
<html>
<head>
    <title>CSS 伪类</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-29 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS 伪类</h1>
    <p>CSS 伪类用于向某些选择器添加特殊的效果。</p>

    <h2>伪类</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
            <th>CSS</th>
        </tr>
        <tr>
            <td><a href="#active">:active</a></td>
            <td>向被激活的元素添加样式。</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#focus">:focus</a></td>
            <td>向拥有键盘输入焦点的元素添加样式。</td>
            <td>2</td>
        </tr>
        <tr>
            <td><a href="#hover">:hover</a></td>
            <td>当鼠标悬浮在元素上方时，向元素添加样式。</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#link">:link</a></td>
            <td>向未被访问的链接添加样式。</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#visited">:visited</a></td>
            <td>向已被访问的链接添加样式。</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#first-child">:first-child</a></td>
            <td>向元素的第一个子元素添加样式。</td>
            <td>2</td>
        </tr>
        <tr>
            <td><a href="#lang">:lang</a></td>
            <td>向带有指定 lang 属性的元素添加样式。</td>
            <td>2</td>
        </tr>
    </table>

    <h2>语法</h2>
    <p>伪类的语法：</p>
    <p class="code">selector : pseudo-class {property: value}</p>

    <h2>锚伪类</h2>
    <p>在支持 CSS 的浏览器中，链接的不同状态都可以不同的方式显示，这些状态包括：活动状态，已被访问状态，未被访问状态，和鼠标悬停状态。</p>
    <pre class="code">
a:link {color: #FF0000}		/* 未访问的链接 */
a:visited {color: #00FF00}	/* 已访问的链接 */
a:hover {color: #FF00FF}	/* 鼠标移动到链接上 */
a:active {color: #0000FF}	/* 选定的链接 */
    </pre>

    <h2>伪类与 CSS 类</h2>
    <p>伪类可以与 CSS 类配合使用：</p>
    <pre class="code">
a.red : visited {color: #FF0000}

<a class="red" href="css_syntax.asp">CSS Syntax</a>
    </pre>
    <p>假如上面的例子中的链接被访问过，那么它将显示为红色。</p>

    <h2 id="first-child">CSS2 - :first-child 伪类</h2>
    <p>您可以使用 :first-child 伪类来选择元素的第一个子元素</p>
    <pre class="code">
&lt;div&gt;
<code>&lt;p&gt;These are the necessary steps:&lt;/p&gt;</code>
&lt;ul&gt;
<code>&lt;li&gt;Intert Key&lt;/li&gt;</code>
&lt;li&gt;Turn key <code>&lt;strong&gt;clockwise&lt;/strong&gt;</code>&lt;/li&gt;
&lt;li&gt;Push accelerator&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;Do <code>&lt;em&gt;not&lt;/em&gt;</code> push the brake at the same time as the accelerator.&lt;/p&gt;
&lt;/div&gt;
    </pre>
    <p>在上面的例子中，作为第一个元素的元素包括第一个 p、第一个 li 和 strong 和 em 元素。<br>给定以下规则：</p>
    <pre class="code">
p:first-child {font-weight: bold;}
li:first-child {text-transform:uppercase;}
    </pre>
    <p>第一个规则将作为某元素第一个子元素的所有 p 元素设置为粗体。第二个规则将作为某个元素（在 HTML 中，这肯定是 ol 或 ul 元素）第一个子元素的所有 li 元素变成大写。</p>
    <p><span>提示：</span>最常见的错误是认为 p:first-child 之类的选择器会选择 p 元素的第一个子元素。</p>

    <h3>例子 1 - 匹配第一个 &lt;p&gt; 元素</h3>
    <p>在下面的例子中，选择器匹配作为任何元素的第一个子元素的 p 元素：</p>
    <pre class="code">
&lt;html&gt;
&lt;head&gt;
&lt;style type=&quot;text/css&quot;&gt;
<code>p:first-child</code> {
  color: red;
  }
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
<code>&lt;p&gt;some text&lt;/p&gt;</code>
&lt;p&gt;some text&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
    </pre>

    <h3>例子 2 - 匹配所有 &lt;p&gt;元素中的第一个 &lt;i&gt; 元素</h3>
    <p>在下面的例子中，选择器匹配所有 &lt;p&gt; 元素中的第一个 &lt;i&gt; 元素：</p>
    <pre class="code">&lt;html&gt;
&lt;head&gt;
&lt;style type=&quot;text/css&quot;&gt;
<code>p &gt; i:first-child</code> {
  font-weight:bold;
  }
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;some <code>&lt;i&gt;text&lt;/i&gt;</code>. some &lt;i&gt;text&lt;/i&gt;.&lt;/p&gt;
&lt;p&gt;some <code>&lt;i&gt;text&lt;/i&gt;</code>. some &lt;i&gt;text&lt;/i&gt;.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>

    <h3>例子 3 - 匹配所有作为第一个子元素的 &lt;p&gt; 元素中的所有 &lt;i&gt; 元素</h3>

    <p>在下面的例子中，选择器匹配所有作为元素的第一个子元素的 &lt;p&gt; 元素中的所有 &lt;i&gt; 元素：</p>

<pre class="code">&lt;html&gt;
&lt;head&gt;
&lt;style type=&quot;text/css&quot;&gt;
<code>p:first-child i</code> {
  color:blue;
  }
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;some <code>&lt;i&gt;text&lt;/i&gt;</code>. some <code>&lt;i&gt;text&lt;/i&gt;</code>.&lt;/p&gt;
&lt;p&gt;some &lt;i&gt;text&lt;/i&gt;. some &lt;i&gt;text&lt;/i&gt;.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>

    <h2 id="lang">CSS2 - :lang 伪类</h2>

    <p>:lang 伪类使你有能力为不同的语言定义特殊的规则。在下面的例子中，:lang 类为属性值为 no 的 q 元素定义引号的类型：</p>

<pre class="code">&lt;html&gt;
&lt;head&gt;

&lt;style type=&quot;text/css&quot;&gt;
<code>q:lang(no)
   {
   quotes: &quot;~&quot; &quot;~&quot;
   }</code>
&lt;/style&gt;

&lt;/head&gt;

&lt;body&gt;
&lt;p&gt;文字&lt;q <code>lang=&quot;no&quot;</code>&gt;段落中的引用的文字&lt;/q&gt;文字&lt;/p&gt;
&lt;/body&gt;&lt;/html&gt;</pre>
    
</div>
<?php require_once 'foot.php';?>
</body>
</html>