<!DOCTYPE html>
<html>
<head>
    <title>CSS 后代选择器</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-29 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS 后代选择器</h1>
    <p>后代选择器（descendant selector）又称为包含选择器。<br>后代选择器可以选择作为某元素后代的元素。</p>

    <h2>根据上下文选择元素</h2>
    <p>我们可以定义后代选择器来创建一些规则，使这些规则在某些文档结构中起作用，而在另外一些结构中不起作用。<br>
        举例来说，如果您希望只对 h1 元素中的 em 元素应用样式，可以这样写：</p>
    <p class="code">h1 em {color:red;}</p>

    <p>上面这个规则会把作为 h1 元素后代的 em 元素的文本变为 红色。其他 em 文本（如段落或块引用中的 em）则不会被这个规则选中：</p>
    <pre class="code">
&lt;h1&gt;This is a &lt;em&gt;important&lt;/em&gt; heading&lt;/h1&gt;
&lt;p&gt;This is a &lt;em&gt;important&lt;/em&gt; paragraph.&lt;/p&gt;
    </pre>

    <p><strong>有关后代选择器有一个易被忽视的方面，即两个元素之间的层次间隔可以是无限的。</strong></p>
    <p>例如，如果写作 ul em，这个语法就会选择从 ul 元素继承的所有 em 元素，而不论 em 的嵌套层次多深。<br>
        因此，ul em 将会选择以下标记中的所有 em 元素：</p>
    <pre class="code">
&lt;ul&gt;
  &lt;li&gt;List item 1
    &lt;ol&gt;
      &lt;li&gt;List item 1-1&lt;/li&gt;
      &lt;li&gt;List item 1-2&lt;/li&gt;
      &lt;li&gt;List item 1-3
        &lt;ol&gt;
          &lt;li&gt;List item 1-3-1&lt;/li&gt;
          &lt;li&gt;List item <span class="marked">&lt;em&gt;1-3-2&lt;/em&gt;</span>&lt;/li&gt;
          &lt;li&gt;List item 1-3-3&lt;/li&gt;
        &lt;/ol&gt;
      &lt;/li&gt;
      &lt;li&gt;List item 1-4&lt;/li&gt;
    &lt;/ol&gt;
  &lt;/li&gt;
  &lt;li&gt;List item 2&lt;/li&gt;
  &lt;li&gt;List item 3&lt;/li&gt;
&lt;/ul&gt;
    </pre>
</div>
<?php require_once 'foot.php';?>
</body>
</html>