<!DOCTYPE html>
<html>
<head>
    <title>CSS3 多媒体查询</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 多媒体查询</h1>
    <h2>CSS2 多媒体类型</h2>
    <p>@media 规则在 CSS2 中有介绍，针对不同媒体类型可以定制不同的样式规则。<br>
        例如：你可以针对不同的媒体类型(包括显示器、便携设备、电视机，等等)设置不同的样式规则。<br>
        但是这些多媒体类型在很多设备上支持还不够友好。</p>

    <h2>CSS3 多媒体查询</h2>
    <p>CSS3 的多媒体查询继承了 CSS2 多媒体类型的所有思想： 取代了查找设备的类型，CSS3 根据设置自适应显示。<br>
        媒体查询可用于检测很多事情，例如：</p>
    <ul>
        <li>viewport(视窗) 的宽度与高度</li>
        <li>设备的宽度与高度</li>
        <li>朝向 (智能手机横屏，竖屏) 。</li>
        <li>分辨率</li>
    </ul>

    <h2>多媒体查询语法</h2>
    <p>多媒体查询由多种媒体组成，可以包含一个或多个表达式，表达式根据条件是否成立返回 true 或 false。</p>
    <pre class="code">@media not|only mediatype and (expressions) {
    CSS-Code;
}</pre>
    <p>如果指定的多媒体类型匹配设备类型则查询结果返回 true，文档会在匹配的设备上显示指定样式效果。<br>
        除非你使用了 not 或 only 操作符，否则所有的样式会适应在所有设备上显示效果。</p>
    <ul><li>
            <p><b>not:</b> not是用来排除掉某些特定的设备的，比如 @media not print（非打印设备）。</p>
        </li><li>
            <p><b>only:</b> 用来定某种特别的媒体类型。对于支持Media Queries的移动设备来说，如果存在only关键字，移动设备的Web浏览器会忽略only关键字并直接根据后面的表达式应用样式文件。对于不支持Media Queries的设备但能够读取Media Type类型的Web浏览器，遇到only关键字时会忽略这个样式文件。</p>
        </li><li>
            <p><b>all:</b> 所有设备，这个应该经常看到。</p>
        </li>
    </ul>

    <h2>CSS3 多媒体类型</h2>
    <table class="reference">
        <tbody><tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>all</td>
            <td>用于所有多媒体类型设备</td>
        </tr>
        <tr>
            <td>print</td>
            <td>用于打印机</td>
        </tr>
        <tr>
            <td>screen</td>
            <td>用于电脑屏幕，平板，智能手机等。</td>
        </tr>
        <tr>
            <td>speech</td>
            <td>用于屏幕阅读器</td>
        </tr>
        </tbody></table>

    <h2>多媒体查询简单实例</h2>
    <p>使用多媒体查询可以在指定的设备上使用对应的样式替代原有的样式。<br>
        以下实例中在屏幕可视窗口尺寸大于 480 像素的设备上修改背景颜色:</p>
    <pre class="code">@media screen and (min-width: 480px) {
    body {
        background-color: lightgreen;
    }
}</pre>
    <p>以下实例在屏幕可视窗口尺寸大于 480 像素时将菜单浮动到页面左侧：</p>
    <pre>@media screen and (min-width: 480px) {
    #leftsidebar {width: 200px; float: left;}
    #main {margin-left:216px;}
}</pre>
</div>
<?php include_once 'foot.php';?>
</body>
</html>