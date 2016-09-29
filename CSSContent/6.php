<!DOCTYPE html>
<html>
<head>
    <title>CSS字体</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 09:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS字体</h1>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>font</td>
            <td>在一个声明中设置所有字体属性</td>
        </tr>
        <tr>
            <td>font-family</td>
            <td>字体系列</td>
        </tr>
        <tr>
            <td>font-size</td>
            <td>字体大小</td>
        </tr>
        <tr>
            <td>font-style</td>
            <td>字体样式</td>
        </tr>
        <tr>
            <td>font-weight</td>
            <td>字体粗细</td>
        </tr>
    </table>
    <h2>font-family</h2>
    <p>指定一个元素的字体。应该设置几个字体名称，作为一种“后备”机制，如果浏览器不支持一种字体，他将尝试下一种字体。</p>
    <p><span>注：</span>如果字体系列的名称超过一个字，他必须使用引号。</p>
    <p class="code">
        font-family: "Consolas", "Monaco", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace;
    </p>

    <h2>font-style</h2>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
        <td>normal</td>
            <td>默认</td>
        </tr>
        <tr>
            <td>italic</td>
            <td>斜体字体样式</td>
        </tr>
        <tr>
            <td>oblique</td>
            <td>倾斜字体样式</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <strong>italic</strong>
    <p class="code" style="font-style: italic">
        我是italic斜体字
    </p>
    <strong>oblique</strong>
    <p class="code" style="font-style: oblique">
        我是oblique倾斜字
    </p>
</div>

<?php require_once 'foot.php';?>
</body>
</html>