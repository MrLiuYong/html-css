<!DOCTYPE html>
<html>
<head>
    <title>CSS 伪元素</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-29 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS 伪元素</h1>
    <p>CSS 伪元素用于向某些选择器设置特殊效果。</p>
    <h2>伪元素</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
            <th>CSS</th>
        </tr>
        <tr>
            <td><a href="#first-letter">:first-letter</a></td>
            <td>向文本的第一个字母添加特殊样式。</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#first-line">:first-line</a></td>
            <td>向文本的首行添加特殊样式。</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#before">:before</a></td>
            <td>在元素之前添加内容。</td>
            <td>2</td>
        </tr>
        <tr>
            <td><a href="#after">:after</a></td>
            <td>在元素之后添加内容。</td>
            <td>2</td>
        </tr>
    </table>

    <h2>语法</h2>
    <p>伪元素的语法：</p>
    <p class="code">selector:pseudo-element {property:value;}</p>

    <h2 id="first-line">:first-line 伪元素</h2>
    <p>"first-line" 伪元素用于向文本的首行设置特殊样式。<br>
        在下面的例子中，浏览器会根据 "first-line" 伪元素中的样式对 p 元素的第一行文本进行格式化：</p>
    <pre class="code">p:first-line
{
    color:#ff0000;
    font-variant:small-caps;
}</pre>
    <p><span>注：</span>"first-line" 伪元素只能用于块级元素。</p>
    <p>下面的属性可应用于 "first-line" 伪元素：</p>
    <ul>
        <li>font</li>
        <li>color</li>
        <li>background</li>
        <li>word-spacing</li>
        <li>letter-spacing</li>
        <li>text-decoration</li>
        <li>vertical-align</li>
        <li>text-transform</li>
        <li>line-height</li>
        <li>clear</li>
    </ul>

    <h2 id="first-letter">:first-letter 伪元素</h2>
    <p>"first-letter" 伪元素用于向文本的首字母设置特殊样式：</p>
    <pre class="code">p:first-letter
{
    color:#ff0000;
    font-size:xx-large;
}</pre>
    <p><span>注：</span>"first-letter" 伪元素只能用于块级元素。</p>
    <p>下面的属性可应用于 "first-letter" 伪元素：</p>
    <ul>
        <li>font</li>
        <li>color</li>
        <li>background</li>
        <li>margin</li>
        <li>padding</li>
        <li>border</li>
        <li>text-decoration</li>
        <li>vertical-align (仅当 float 为 none 时)</li>
        <li>text-transform</li>
        <li>line-height</li>
        <li>float</li>
        <li>clear</li>
    </ul>

    <h2>伪元素和 CSS 类</h2>
    <p>伪元素可以与 CSS 类配合使用：</p>
    <pre class="code">
<code>p.article:first-letter</code>
{
    color: #FF0000;
}

&lt;p <span class="marked">class=&quot;article&quot;</span>&gt;This is a paragraph in an article。&lt;/p&gt;
</pre>
    <p>上面的例子会使所有 class 为 article 的段落的首字母变为红色。</p>

    <h2>多重伪元素</h2>
    <p>可以结合多个伪元素来使用。<br>
        在下面的例子中，段落的第一个字母将显示为红色，其字体大小为 xx-large。第一行中的其余文本将为蓝色，并以小型大写字母显示。段落中的其余文本将以默认字体大小和颜色来显示：</p>
    <pre>
p:first-letter
{
    color:#ff0000;
    font-size:xx-large;
}

p:first-line
{
    color:#0000ff;
    font-variant:small-caps;
}
</pre>


    <h2 id="before">CSS2 - :before 伪元素</h2>
    <p>":before" 伪元素可以在元素的内容前面插入新内容。<br>
        下面的例子在每个 &lt;h1&gt; 元素前面插入一幅图片：</p>
    <pre class="code">h1:before
{
    content:url("img/2.png");
}</pre>

    <h2 id="after">CSS2 - :after 伪元素</h2>
    <p>":after" 伪元素可以在元素的内容之后插入新内容。<br>
        下面的例子在每个 &lt;h1&gt; 元素后面插入一幅图片：</p>
    <pre class="code">h1:after
{
    content:url("img/2.png");
}</pre>
</div>
<?php require_once 'foot.php';?>
</body>
</html>