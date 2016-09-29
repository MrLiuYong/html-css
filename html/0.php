<!DOCTYPE html><!-- 声明: 文件类型和版本 -->
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- 编码声明 如果是中文网站，需要此声明，否则可能会出现乱码 -->
    <title>HTML简介</title>
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
熊老师是个非常好的老师!<br><sub>create time:2016-08-17 11:50:30</sub>
<div class="contain">
    <h1>HTML 简介</h1>
    <ul >
        <li><a href="#whathtml">什么是HTML</a></li>
        <li><a href="#htmltag">HTML 标签</a></li>
        <li><a href="#htmlelement">HTML 元素</a></li>
        <li><a href="#htmlweb">Web浏览器</a></li>
    </ul>
    <h2><a id="whathtml">什么是HTML</a></h2>
    <ol>
        <li>HTML 指的是超文本标记语言（HyperTextMarkup Language）</li>
        <li>HTML 不是一种编程语言，而是一种标记语言</li>
        <li>标记语言是一套<a href="#htmltag">标记标签</a></li>
        <li>HTML 使用标记标签来描述网页</li>
        <li>HTML 文档包含了HTML标签及文本内容</li>
        <li>HTML 文档也就Web页面</li>
    </ol>
    <h2><a id="htmltag">HTML 标签</a></h2>
    <p>HTML标记标签通常称为HTML标签</p>
    <ol>
        <li>HTML标签是有尖括号包围的关键词，如&lt;html&gt;</li>
        <li>HTML标签通常是成对出现的，如&lt;b&gt;和&lt;/b&gt;</li>
        <li>标签对中的第一个标签是<b>开始标签</b><br>第二个标签是<b>结束标签</b></li>
        <li>开始和结束标签也被称为<b>开放标签</b>和<b>闭合标签</b></li>
    </ol>
    <span>语法</span>
<pre>
    &lt;标签&gt;内容&lt;/标签&gt;
</pre>

    <h2><a id="htmlelement">HTML 元素</a></h2>
    <p>"HTML标签" 和 "HTML元素" 通常都是描述同样的意思。<br>但是严格来讲，一个HTML元素包含了开始标签和结束标签，比如：</p>
<pre>
    &lt;p&gt;熊老师很帅&lt;\p&gt;
</pre>

    <h2><a id="htmlweb">Web浏览器</a></h2>
    <p>Web浏览器是用于读取HTML文件，并将其作为网页显示。<br>浏览器并不是直接显示的<a href="#htmltag" title="释义">HTML标签</a>，但可以使用标签来决定如何展现HTML页面的内容给用户</p>
</div>

</body>
</html>