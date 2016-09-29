<!DOCTYPE html>
<html>
<head>
    <title>CSS 相邻兄弟选择器</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-29 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS 相邻兄弟选择器</h1>
    <p>相邻兄弟选择器（Adjacent sibling selector）可选择紧接在另一元素后的元素，且二者有相同父元素。</p>

    <h2>选择相邻兄弟</h2>
    <p>如果需要选择紧接在另一个元素后的元素，而且二者有相同的父元素，可以使用相邻兄弟选择器（Adjacent sibling selector）。<br>
        例如，如果要增加紧接在 h1 元素后出现的段落的上边距，可以这样写：</p>
    <p class="code">h1 + p {margin-top:50px;}</p>
    <p>这个选择器读作：“选择紧接在 h1 元素后出现的段落，h1 和 p 元素拥有共同的父元素”。</p>

    <h2>语法解释</h2>
    <p>相邻兄弟选择器使用了加号（+），即相邻兄弟结合符（Adjacent sibling combinator）。</p>
    <p>请看下面这个文档树片段：</p>
    <pre class="code">
&lt;div&gt;
  &lt;ul&gt;
    &lt;li&gt;List item 1&lt;/li&gt;
    &lt;li&gt;List item 2&lt;/li&gt;
    &lt;li&gt;List item 3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;ol&gt;
    &lt;li&gt;List item 1&lt;/li&gt;
    &lt;li&gt;List item 2&lt;/li&gt;
    &lt;li&gt;List item 3&lt;/li&gt;
  &lt;/ol&gt;
&lt;/div&gt;
    </pre>
    <p>在上面的片段中，div 元素中包含两个列表：一个无序列表，一个有序列表，每个列表都包含三个列表项。这两个列表是相邻兄弟，列表项本身也是相邻兄弟。不过，第一个列表中的列表项与第二个列表中的列表项不是相邻兄弟，因为这两组列表项不属于同一父元素（最多只能算堂兄弟）。</p>
    <p>请记住，用一个结合符只能选择两个相邻兄弟中的第二个元素。请看下面的选择器：</p>
    <p class="code">li + li {font-weight:bold;}</p>
    <p>上面这个选择器只会把列表中的第二个和第三个列表项变为粗体。第一个列表项不受影响。</p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>