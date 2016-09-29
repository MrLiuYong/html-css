<!DOCTYPE html>
<html>
<head>
    <title>CSS3 3D 转换</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 3D 转换</h1>
    <h2>3D Transforms</h2>
    <p>CSS3 允许您使用 3D 转换来对元素进行格式化。<br>
        在本章中，您将学到其中的一些 3D 转换方法：</p>
    <ul>
        <li>rotateX()</li>
        <li>rotateY()</li>
    </ul>

    <h2>rotateX() 方法</h2>
    <p>rotateX()方法，围绕其在一个给定度数X轴旋转的元素。</p>
    <pre class="code">div
{
transform: rotateX(120deg);
-webkit-transform: rotateX(120deg); /* Safari and Chrome */
}</pre>

    <h2>rotateY() 方法</h2>
    <p>rotateY()方法，围绕其在一个给定度数Y轴旋转的元素。</p>
    <pre class="code">div
{
transform: rotateY(130deg);
-webkit-transform: rotateY(130deg); /* Safari and Chrome */
}</pre>

    <h2>3D 转换方法</h2>
    <table class="reference">

        <tbody><tr>
            <th style="width:25%">函数</th>
            <th>描述</th>
        </tr>

        <tr>
            <td>matrix3d(<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<br><i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>)</td>
            <td>定义 3D 转换，使用 16 个值的 4x4 矩阵。</td>
        </tr>

        <tr>
            <td>translate3d(<i>x</i>,<i>y</i>,<i>z</i>)</td>
            <td>定义 3D 转化。</td>
        </tr>

        <tr>
            <td>translateX(<i>x</i>)</td>
            <td>定义 3D 转化，仅使用用于 X 轴的值。</td>
        </tr>

        <tr>
            <td>translateY(<i>y</i>)</td>
            <td>定义 3D 转化，仅使用用于 Y 轴的值。</td>
        </tr>

        <tr>
            <td>translateZ(<i>z</i>)</td>
            <td>定义 3D 转化，仅使用用于 Z 轴的值。</td>
        </tr>

        <tr>
            <td>scale3d(<i>x</i>,<i>y</i>,<i>z</i>)</td>
            <td>定义 3D 缩放转换。</td>
        </tr>

        <tr>
            <td>scaleX(<i>x</i>)</td>
            <td>定义 3D 缩放转换，通过给定一个 X 轴的值。</td>
        </tr>

        <tr>
            <td>scaleY(<i>y</i>)</td>
            <td>定义 3D 缩放转换，通过给定一个 Y 轴的值。</td>
        </tr>

        <tr>
            <td>scaleZ(<i>z</i>)</td>
            <td>定义 3D 缩放转换，通过给定一个 Z 轴的值。</td>
        </tr>

        <tr>
            <td>rotate3d(<i>x</i>,<i>y</i>,<i>z</i>,<i>angle</i>)</td>
            <td>定义 3D 旋转。</td>
        </tr>

        <tr>
            <td>rotateX(<i>angle</i>)</td>
            <td>定义沿 X 轴的 3D 旋转。</td>
        </tr>

        <tr>
            <td>rotateY(<i>angle</i>)</td>
            <td>定义沿 Y 轴的 3D 旋转。</td>
        </tr>

        <tr>
            <td>rotateZ(<i>angle</i>)</td>
            <td>定义沿 Z 轴的 3D 旋转。</td>
        </tr>

        <tr>
            <td>perspective(<i>n</i>)</td>
            <td>定义 3D 转换元素的透视视图。</td>
        </tr>
        </tbody></table>
</div>
<?php include_once "foot.php";?>
</body>
</html>