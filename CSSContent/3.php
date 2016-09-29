<!DOCTYPE html>
<html>
<head>
    <title>CSS创建</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-23 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
<h1>CSS创建</h1>
    <h2>CSS创建</h2>
    <p>当读到一个样式表时，浏览器会根据他来格式化HTML文档</p>

    <h2>如何插入样式表</h2>
    <p>插入样式表的方法有三种：</p>
    <ul>
        <li>外部样式表</li>
        <li>内部样式表</li>
        <li>内联样式表</li>
    </ul>

    <h2>外部样式表</h2>
    <p>当样式需要应用于很多页面时，外部样式表将是理想的选择。在使用外部样式的情况下，你可以通过一个文件来改变整个站点的外观，每个页面使用&lt;link&gt;标签链接到样式表。&lt;link&gt;标签在文档的头部中。</p>
    <pre class="code">
&lt;head&gt;
    &lt;link rel="stylesheet" type="text/css" href="css/main.css" &gt;
&lt;/head&gt;
    </pre>
    <p>外部样式表可以在任何文本编辑器中进行编辑，文件不能包含任何的HTML标签，样式表应该以.css扩展名进行保存，比如：</p>
    <p class="code">main.css</p>
    <p><span>注：</span>不要在属性值与单位之间留有空格，即：</p>
    <pre class="code">
p {
    font-size: 14px; /* 正确 */
    margin-right: 5 px; /* 错误，值与单位之间有空格 */
}
    </pre>

    <h2>内部样式表</h2>
    <p>当单个文档需要特殊的样式时，就应该使用内部样式表。你可以使用&lt;style&gt;标签在文档头部定义内部样式表，如：</p>
    <pre class="code">
&lt;head&gt;
    &lt;style&gt;
        p {
            color: red;
        }
    &lt;/style&gt;
&lt;/head&gt;
    </pre>

    <h2>内联样式</h2>
    <p>由于要将表现和内容混杂在一起，内联样式会损失掉样式表的许多优势，请慎用这种方法。例如当样式仅需要在一个元素上应用一次是。<br>要使用内联样式，你需要在相关的标签内容使用样式style属性，style属性可以包含任何css属性，如：</p>
    <p class="code">
        &lt;p style="color: green"&gt;这是内联样式&lt;/p&gt;
    </p>
    <p style="color: green">这是内联样式</p>

    <h2>多重样式</h2>
    <p>如果某些属性在不同的样式表中被同样的选择器定义，那么属性值将从更具体的样式表中被继承过来。</p>
    <p><strong>如：</strong></p>

    <h2>多重样式将层叠为一个</h2>
    <p>样式表允许以多种方式规定样式信息。样式可以规定在单个的HTML元素中、在HTML页面的头元素中、或在一个外部的CSS文件中，甚至可以在同一个HTML文档内部引用多个外部样式。</p>
    <h3>层叠次序</h3>
    <p>当同一个HTML元素被不止一个样式定义时，会使用哪个样式呢？<br>一般而言，所有的样式会根据下面的规则层叠于一个新的虚拟样式表中，其中数字<q>4</q>拥有最高的优先权：</p>
    <ol>
        <li>浏览器缺省样式</li>
        <li>外部样式表</li>
        <li>内部样式表（位于&lt;head&gt;标签内部）</li>
        <li>内联样式（在HTML元素内部）</li>
    </ol>
</div>
<?php require_once 'foot.php'; ?>
</body>
</html>
