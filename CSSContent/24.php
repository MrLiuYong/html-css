<!DOCTYPE html>
<html>
<head>
    <title>CSS 子元素选择器</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-29 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS 子元素选择器</h1>
    <p>与后代选择器相比，子元素选择器（Child selectors）只能选择作为某元素子元素的元素。</p>

    <h2>选择子元素</h2>
    <p>如果您不希望选择任意的后代元素，而是希望缩小范围，只选择某个元素的子元素，请使用子元素选择器（Child selector）。<br>
        例如，如果您希望选择只作为 h1 元素子元素的 strong 元素，可以这样写：</p>
    <p class="code">h1 > strong {color:red;}</p>

    <p>这个规则会把第一个 h1 下面的两个 strong 元素变为红色，但是第二个 h1 中的 strong 不受影响：</p>
    <pre class="code">
&lt;h1&gt;This is &lt;strong&gt;very&lt;/strong&gt; &lt;strong&gt;very&lt;/strong&gt; important.&lt;/h1&gt;
&lt;h1&gt;This is &lt;em&gt;really &lt;strong&gt;very&lt;/strong&gt;&lt;/em&gt; important.&lt;/h1&gt;
    </pre>

    <h2>结合后代选择器和子选择器</h2>
    <p>请看下面这个选择器：</p>
    <p class="code">
        table.company td > p
    </p>
    <p>上面的选择器会选择作为 td 元素子元素的所有 p 元素，这个 td 元素本身从 table 元素继承，该 table 元素有一个包含 company 的 class 属性。</p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>