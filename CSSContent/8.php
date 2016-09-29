<!DOCTYPE html>
<html>
<head>
    <title>CSS列表</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 10:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
<h1>CSS列表</h1>
    <p>CSS列表属性有如下作用：</p>
    <ul>
        <li>为有序列表设置不同的列表项标记</li>
        <li>为无序列表设置不同的列表项标记</li>
        <li>设置列表项标记为图像</li>
    </ul>
    <h2>列表</h2>
    <p>在HTML中，有两种类型的列表：</p>
    <ul>
        <li>无序列表 - 列表项标记用特殊圆形</li>
        <li>有序列表 - 列表项的标记有数字或字母</li>
    </ul>
    <p>使用CSS，可以列出进一步的样式，并可用图像作列表标记。</p>
    <p>所有的CSS列表属性</p>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>list-style</td>
            <td>简写属性</td>
        </tr>
        <tr>
            <td>list-style-image</td>
            <td>将图像设置为列表项的标志</td>
        </tr>
        <tr>
            <td>list-style-position</td>
            <td>设置列表中列表项标志的位置</td>
        </tr>
        <tr>
            <td>list-style-type</td>
            <td>设置列表项标志类型</td>
        </tr>
    </table>
    <h2>list-style-image</h2>
    <p>list-style-image属性使用图像来替换列表项的标记。</p>
    <pre class="code">
        <?php
        $html='
<ul style="list-style-image: url(\'img/u.gif\'); ">
    <li>PHP</li>
    <li>Java</li>
    <li>C++</li>
</ul>
        ';
        echo htmlspecialchars($html);
        ?>
    </pre>
    <ul style="list-style-image: url('img/u.gif');">
        <li>PHP</li>
        <li>Java</li>
        <li>C++</li>
    </ul>

    <p>使用简写属性值的顺序：</p>
    <ol>
        <li>list-style-type</li>
        <li>list-style-position</li>
        <li>list-style-image</li>
    </ol>
</div>
<?php require_once 'foot.php';?>
</body>
</html>