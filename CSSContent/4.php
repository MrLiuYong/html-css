<!DOCTYPE html>
<html>
<head>
    <title>CSS背景</title>
    <meta charset="utf-8">
    <meta name="keywords" content="CSS,HTML,问呀">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <style>
        .background-color {
            width: 100px;
            height: 100px;
            background-color: #00FF00;
        }
        .background-image{
            width: 100%;
            height: 200px;
            background-image: url("img/2.png");
        }
        .background-repeat-x {
            background-repeat: repeat-x;
        }
        .background-repeat-y {
            background-repeat: repeat-y;
        }
        .background-repeat-norepeat {
            background-repeat: no-repeat;
        }
        body {
            background-image: url("img/2.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: left bottom;
        }
        .background {
            width: 100%;
            height: 200px;
            background: #e6e6e6 url("img/2.png") no-repeat center center;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-24 09:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS背景</h1>
    <p>CSS背景属性用于定义HTML元素的背景。</p>
    <h2>CSS背景属性</h2>
    <table>
        <tr>
            <th>Property</th>
            <th>描述</th>
        </tr>
        <tr>
            <td><a href="#background">background</a></td>
            <td>简写属性，作用是将背景属性设置在一个声明中</td>
        </tr>
        <tr>
            <td><a href="#attachment">background-attachment</a> </td>
            <td>背景图像是否固定或者随着页面的其余部分滚动</td>
        </tr>
        <tr>
            <td><a href="#color">background-color</a> </td>
            <td>设置元素的背景颜色</td>
        </tr>
        <tr>
            <td><a href="#image">background-image</a> </td>
            <td>把图像设置为背景</td>
        </tr>
        <tr>
            <td><a href="#position">background-position</a> </td>
            <td>设置背景图像的起始位置</td>
        </tr>
        <tr>
            <td><a href="#repeat">background-repeat</a> </td>
            <td>设置背景图像是否及如何重复</td>
        </tr>
    </table>
    <h2 id="color">背景颜色</h2>
    <p>background-color属性定义了元素的背景颜色。<br>CSS中，颜色值通常有以下方式定义：</p>
    <ul>
        <li>十六进制，如：#FF0000</li>
        <li>RGB，如：rgb(255,0,0)</li>
        <li>颜色名称，如：red</li>
    </ul>
    <pre class="code">
        <?php
        $html = '
<style>
.background-color {
    width: 100px;
    height: 100px;
    background-color: #00FF00;
}
</style>

<div class="background-color"></div>
        ';
        echo htmlspecialchars($html);
        ?>
    </pre>
    <div class="background-color"></div>

    <h2 id="image">背景图像</h2>
    <p>background-image属性描述了元素的背景图像。<br>默认情况下，背景图像进行平铺重复显示，以覆盖整个元素实体。如：</p>
    <pre class="code">
.background-image {
    background-image: url('img/2.png');
}
    </pre>
    <div class="background-image code"></div>

    <h2 id="repeat">背景图像 - 水平式/垂直平铺</h2>
    <p>默认情况background-image属性会在页面的水平垂直方向平铺。<br>如果图像只在水平方向平铺：</p>
    <div class="background-image code background-repeat-x"></div>

    <p>只在垂直方向平铺</p>
    <div class="background-image code background-repeat-y"></div>

    <p>不平铺</p>
    <div class="background-image code background-repeat-norepeat"></div>
    <pre class="code">
.background-repeat-x {
    background-repeat: repeat-x;
}
.background-repeat-y {
    background-repeat: repeat-y;
}
.background-repeat-norepeat {
    background-repeat: no-repeat;
}
    </pre>

    <h2 id="attachment">background-attachment属性</h2>
    <p>background-attachment设置背景图像是否固定或随着页面滚动而滚动。</p>
    <table>
        <tr>
            <th>默认值</th>
            <td>scroll</td>
        </tr>
        <tr>
            <th>JavaScript语法</th>
            <td>object.style.backgroundAttachment="fixed"</td>
        </tr>
    </table>
    <p><b>属性</b></p>
    <table>
        <tr>
            <th>值</th>
            <th>说明</th>
        </tr>
        <tr>
            <td>scroll</td>
            <td>背景图片随页面滚动而滚动，默认</td>
        </tr>
        <tr>
            <td>fixed</td>
            <td>背景图像固定</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td>指定background-attachment的设置应该从父元素继承</td>
        </tr>
    </table>

    <h2 id="position">background-position</h2>
    <p>background-position属性设置背景图像的起始位置。</p>
    <p><b>属性值</b></p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>left top<br>left center<br>left bottom<br>right top<br>right center<br>right bottom<br>center top<br>center center<br>center bottom</td>
            <td>如果仅指定一个关键字，其他的将会是center</td>
            </tr>
        <tr>
            <td>x% y%</td>
            <td>第一个值是水平位置，第二个位置是垂直位置。<br>左上角:0% 0%；右下角：100% 100%；<br>如果仅指定一个值，其他值为50%，默认为0% 0%</td>
        </tr>
        <tr>
            <td>xpos ypos</td>
            <td>单位为像素</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td>指定从父元素继承</td>
        </tr>
    </table>

    <h2 id="background">简写</h2>
    <p>当使用简写属性时，属性值的顺序为：</p>
    <ol>
        <li>background-color</li>
        <li>background-image</li>
        <li>background-repeat</li>
        <li>background-attachment</li>
        <li>background-position</li>
    </ol>
    <p class="code">
background: #e6e6e6 url("img/2.png") no-repeat center center;
    </p>
    <div class="background"></div>
</div>
</body>
</html>