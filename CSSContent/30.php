<!DOCTYPE html>
<html>
<head>
    <title>CSS3 边框</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .radius
        {
            width: 100px;
            height: 30px;
            border:2px solid;
            border-radius:10px;
            -moz-border-radius:25px; /* Old Firefox */
        }
        .shadow {
            width: 200px;
            height: 100px;
            background-color: yellowgreen;
            box-shadow: 10px 10px 5px #888888;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 边框</h1>
    <p>通过 CSS3，您能够创建圆角边框，向矩形添加阴影，使用图片来绘制边框 - 并且不需使用设计软件，比如 PhotoShop。</p>
    <h2>CSS3 边框</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
            <th>CSS</th>
        </tr>

        <tr>
            <td><a href="#image" title="CSS3 border-image 属性">border-image</a></td>
            <td>设置所有 border-image-* 属性的简写属性。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#radius" title="CSS3 border-radius 属性">border-radius</a></td>
            <td>设置所有四个 border-*-radius 属性的简写属性。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#shadow" title="CSS3 box-shadow 属性">box-shadow</a></td>
            <td>向方框添加一个或多个阴影。</td>
            <td>3</td>
        </tr>
    </table>


    <h2 id="radius">CSS3 border-radius 属性</h2>
    <p>该属性允许您为元素添加圆角边框！</p>
    <h3>定义和用法</h3>
    <p>border-radius 属性是一个简写属性，用于设置四个 border-*-radius 属性。</p>

    <h3>语法</h3>
    <p class="code">border-radius: 1-4 length|% / 1-4 length|%;</p>
    <table>
        <tr>
            <th style="width:28%;">值</th>
            <th>描述</th>
        </tr>

        <tr>
            <td><i>length</i></td>
            <td>定义圆角的形状。</td>
        </tr>

        <tr>
            <td><i>%</i></td>
            <td>以百分比定义圆角的形状。</td>
        </tr>
    </table>
    <p><strong>注：</strong>按此顺序设置每个 radii 的四个值。如果省略 bottom-left，则与 top-right 相同。如果省略 bottom-right，则与 top-left 相同。如果省略 top-right，则与 top-left 相同。如：</p>

    <p class="code">border-radius:2em;</p>
    <p>等价于：</p>
    <pre class="code">border-top-left-radius:2em;
border-top-right-radius:2em;
border-bottom-right-radius:2em;
border-bottom-left-radius:2em;</pre>

    <p><a href="example/30.html" target="_blank"><strong>实例1</strong></a></p>

    <h2 id="shadow">CSS3 box-shadow 属性</h2>
    <p>box-shadow 属性向框添加一个或多个阴影。</p>
    <h3>语法</h3>
    <p class="code">box-shadow: h-shadow v-shadow blur spread color inset;</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>

        <tr>
            <td><i>h-shadow</i></td>
            <td>必需。水平阴影的位置。允许负值。</td>
        </tr>

        <tr>
            <td><i>v-shadow</i></td>
            <td>必需。垂直阴影的位置。允许负值。</td>
        </tr>

        <tr>
            <td><i>blur</i></td>
            <td>可选。模糊距离。</td>
        </tr>

        <tr>
            <td><i>spread</i></td>
            <td>可选。阴影的尺寸。</td>
        </tr>

        <tr>
            <td><i>color</i></td>
            <td>可选。阴影的颜色。请参阅 CSS 颜色值。</td>
        </tr>

        <tr>
            <td>inset</td>
            <td>可选。将外部阴影 (outset) 改为内部阴影。</td>
        </tr>
    </table>

    <h3>实例</h3>
    <pre class="code">.shadow {
    width: 200px;
    height: 100px;
    background-color: yellowgreen;
    box-shadow: 10px 10px 5px #888888;
}</pre>
    <div class="shadow"></div>

    <h2 id="image">CSS3 border-image 属性</h2>
    <p>通过 CSS3 的 border-image 属性，您可以使用图片来创建边框</p>
    <p>语法(略)</p>

</div>
<?php require_once 'foot.php';?>
</body>
</html>