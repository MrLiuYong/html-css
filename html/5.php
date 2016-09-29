<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML文本格式化</title>
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<p>熊老师是个非常好的老师!<br><sub>create time:2016-08-17 14:50:30</sub></p>
<div class="contain">
<h1>HTML 文本格式化</h1>
<b id="label">格式化标签</b>
<table border="1px" cellspacing="0">
    <tr>
        <th>标签</th>
        <th>描述</th>
    </tr>
    <tr>
        <td>&lt;b&gt;</td>
        <td><a href="#b"> 定义粗体文本</a></td>
    </tr>
    <tr>
        <td>&lt;em&gt;</td>
        <td><a href="#em"> 定义着重文字</a></td>
    </tr>
    <tr>
        <td>&lt;i&gt;</td>
        <td><a href="#i">定义斜体字</a></td>
    </tr>
    <tr>
        <td>&lt;small&gt;</td>
        <td><a href="#small">定义小号字</a></td>
    </tr>
    <tr>
        <td>&lt;strong&gt;</td>
        <td><a href="#strong">定义加重语气</a></td>
    </tr>
    <tr>
        <td>&lt;sub&gt;</td>
        <td><a href="#sub">定义下标字</a></td>
    </tr>
    <tr>
        <td>&lt;sup&gt;</td>
        <td><a href="#sup">定义上标字</a></td>
    </tr>
    <tr>
        <td>&lt;ins&gt;</td>
        <td><a href="#ins">定义插入字</a></td>
    </tr>
    <tr>
        <td>&lt;del&gt;</td>
        <td><a href="#del">定义删除字</a></td>
    </tr>
</table>
<p id="b" class="code">
    <b>这是&lt;b&gt;标签</b>
</p>
<p id="em" class="code">
    <em>这是&lt;em&gt;标签</em>
</p>
<p id="i" class="code">
    <i>这是&lt;i&gt;标签</i>
</p>
<p id="small" class="code">
    <small>这是&lt;small&gt;标签</small>
</p>
<p id="strong" class="code">
    <strong>这是&lt;strong&gt;标签</strong>
</p>
<p id="sub" class="code">
    熊老师<sub>这是&lt;sub&gt;标签</sub><br>
    X<sub>1</sub> + X<sub>2</sub> = 3
</p>
<p id="sup" class="code">
    熊老师<sup>这是&lt;sup&gt;标签</sup><br>
    X<sup>2</sup> + Y<sup>2</sup> = 4
</p>
<p id="ins" class="code">
    熊老师<ins>这是&lt;ins&gt;标签</ins>
</p>
<p id="del" class="code">
    熊老师<del>这是&lt;del&gt;标签</del>
</p>
<h2 id="yinyonglabel">引文 引用标签</h2>
&lt;abbr&gt; 表示一个缩写词或首字母缩略词，通过对缩写词语进行标记，能够为浏览器拼写检查程序、翻译系统以及搜索引擎分度器提供有用信息。
比如：
<p class="code">
    &lt;abbr title="全写"&gt;简写&lt;/abbr&gt;<br>
    The <abbr title="Xiong Xian He">XXH</abbr> 是 Xiong Xian He 的缩写
</p>
<p>
    &lt;address&gt;定义文档作者/所有者的信息，比如：
</p>
  <p class="code">

  </p>
<p>
    &lt;bdo&gt;指定文本访问,比如:
</p>
<p class="code">
    这是一段正常的文本<br>
    <bdo dir="rtl">这是一段逆向文本</bdo><br>
    &lt;bdo dir="rtl"&gt;文本内容 &lt;/bdo&gt;
</p>
<p>
    &lt;blockquote&gt;定义长的引用<br>定义摘自另一个源的块引用，源浏览器通常会对  &lt;blockquote&gt;元素进行缩进，比如：
</p>
<p class="code">
    &lt;blockquote cite="http://h5.xiongxianhe.com/"&gt;这段文字引用自h5.xiongxianhe.com  &lt;/blockquote&gt;
</p>
<p>
    &lt;q&gt;定义一个短的引用<br>浏览器会在这种引用的周围插入引号
</p>
<p class="code">
    &lt;q&gt;我是一个引用   &lt;/q&gt;<br>
    <q>我是一个引用</q><br>
    &quot;我是一个双引号<br>
    &apos;我是一个双引号<br>
</p>
    </div>
</body>
</html>