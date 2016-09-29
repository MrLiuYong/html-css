<!DOCTYPE html>
<html>
<head>
    <title>CSS3 多列</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 多列</h1>
    <p>CSS3 可以将文本内容设计成像报纸一样的多列布局，如下实例:</p>

    <h2>CSS3 多列属性</h2>
    <p>下表列出了所有 CSS3 的多列属性:</p>
    <table class="reference">
        <tbody><tr>
            <th style="width:28%">属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-count</a></td>
            <td>指定元素应该被分割的列数。</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-fill</a></td>
            <td>指定如何填充列</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-gap</a></td>
            <td>指定列与列之间的间隙</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-rule</a></td>
            <td>所有 column-rule-* 属性的简写</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-rule-color</a></td>
            <td>指定两列间边框的颜色</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-rule-style</a></td>
            <td>指定两列间边框的样式</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-rule-width</a></td>
            <td>指定两列间边框的厚度</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-span</a></td>
            <td>指定元素要跨越多少列</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">column-width</a></td>
            <td>指定列的宽度</td>
        </tr>
        <tr>
            <td><a target="_blank" href="#">columns</a></td>
            <td>设置 column-width 和 column-count 的简写</td>
        </tr>
        </tbody></table>

    <h2>CSS3 创建多列</h2>
    <p>column-count 属性指定了需要分割的列数。<br>
        以下实例将 <div> 元素中的文本分为 3 列：</p>
    <pre class="code">div {
-webkit-column-count: 3; /* Chrome, Safari, Opera */
-moz-column-count: 3; /* Firefox */
column-count: 3;
}</pre>

    <h2>CSS3 多列中列与列间的间隙</h2>
    <p>column-gap 属性指定了列与列间的间隙。<br>
        以下实例指定了列与列间的间隙为 40 像素：</p>
    <pre class="code">div {
    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
}</pre>

    <h3>CSS3 列边框</h3>
    <p>column-rule-style 属性指定了列与列间的边框样式：</p>
    <pre class="code">div {
    -webkit-column-rule-style: solid; /* Chrome, Safari, Opera */
    -moz-column-rule-style: solid; /* Firefox */
    column-rule-style: solid;
}</pre>
    <p>column-rule-width 属性指定了两列的边框厚度:</p>
    <pre class="code">div {
    -webkit-column-rule-width: 1px; /* Chrome, Safari, Opera */
    -moz-column-rule-width: 1px; /* Firefox */
    column-rule-width: 1px;
}</pre>
    <p>column-rule-color 属性指定了两列的边框颜色：</p>
    <pre class="code">div {
    -webkit-column-rule-color: lightblue; /* Chrome, Safari, Opera */
    -moz-column-rule-color: lightblue; /* Firefox */
    column-rule-color: lightblue;
}</pre>
    <p>column-rule 属性是 column-rule-* 所有属性的简写。<br>
        以下实例设置了列直接的边框的厚度，样式及颜色：</p>
    <pre class="code">div {
    -webkit-column-rule: 1px solid lightblue; /* Chrome, Safari, Opera */
    -moz-column-rule: 1px solid lightblue; /* Firefox */
    column-rule: 1px solid lightblue;
}</pre>

    <h2>指定元素跨越多少列</h2>
    <p>以下实例指定 &lt;h2&gt; 元素跨越所有列：</p>
    <pre class="code">h2 {
    -webkit-column-span: all; /* Chrome, Safari, Opera */
    column-span: all;
}</pre>

    <h2>指定列的宽度</h2>
    <p>column-width 属性指定了列的宽度。</p>
    <pre class="code">div {
    -webkit-column-width: 100px; /* Chrome, Safari, Opera */
    column-width: 100px;
}</pre>


</div>
<?php include_once "foot.php";?>
</body>
</html>