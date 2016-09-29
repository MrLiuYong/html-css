<!DOCTYPE html>
<html>
<head>
    <title>CSS3 2D 转换</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 2D 转换</h1>
    <h2>CSS3 转换</h2>
    <p>CSS3转换，我们可以移动，比例化，反过来，旋转，和拉伸元素。</p>
    <p><img src="img/transforms.gif"></p>
    <h2>浏览器支持</h2>
    <p>表格中的数字表示支持该属性的第一个浏览器版本号。<br>
        紧跟在 -webkit-, -ms- 或 -moz- 前的数字为支持该前缀属性的第一个浏览器版本号</p>
    <table>
        <tbody><tr>
            <th style="width:25%;font-size:16px;text-align:left">属性</th>
            <th style="width:15%" class="bsChrome" title="Chrome">Chrome</th>
            <th style="width:15%" class="bsEdge" title="Internet Explorer / Edge">Internet Explorer / Edge</th>
            <th style="width:15%" class="bsFirefox" title="Firefox">Firefox</th>
            <th style="width:15%" class="bsSafari" title="Safari">Safari</th>
            <th style="width:15%" class="bsOpera" title="Opera">Opera</th>
        </tr>
        <tr>
            <td style="text-align:left">transform</td>
            <td>36.0<br>4.0&nbsp;-webkit-</td>
            <td>10.0<br>9.0&nbsp;-ms-</td>
            <td>16.0<br>3.5&nbsp;-moz-</td>
            <td>3.2&nbsp;-webkit-</td>
            <td>23.0<br>15.0&nbsp;-webkit-<br>12.1<br>10.5&nbsp;-o-</td>
        </tr>
        <tr>
            <td style="text-align:left">transform-origin<br>(two-value syntax)</td>
            <td>36.0<br>4.0&nbsp;-webkit-</td>
            <td>10.0<br>9.0&nbsp;-ms-</td>
            <td>16.0<br>3.5&nbsp;-moz-</td>
            <td>3.2&nbsp;-webkit-</td>
            <td>23.0<br>15.0&nbsp;-webkit-<br>12.1<br>10.5&nbsp;-o-</td>
        </tr>
        </tbody></table>

    <h2>2D 转换</h2>
    <p>在本章您将了解2D变换方法：</p>
    <ul>
        <li>translate()</li>
        <li>rotate()</li>
        <li>scale()</li>
        <li>skew()</li>
        <li>matrix()</li>
    </ul>

    <h2>translate() 方法</h2>
    <p>translate()方法，根据左(X轴)和顶部(Y轴)位置给定的参数，从当前元素位置移动。</p>
    <pre class="code">div
{
transform: translate(50px,100px);
-ms-transform: translate(50px,100px); /* IE 9 */
-webkit-transform: translate(50px,100px); /* Safari and Chrome */
}</pre>
    <p>translate值（50px，100px）是从左边元素移动50个像素，并从顶部移动100像素。</p>

    <h2>rotate() 方法</h2>
    <p>rotate()方法，在一个给定度数顺时针旋转的元素。负值是允许的，这样是元素逆时针旋转。</p>
    <pre class="code">div
{
transform: rotate(30deg);
-ms-transform: rotate(30deg); /* IE 9 */
-webkit-transform: rotate(30deg); /* Safari and Chrome */
}</pre>
    <p>rotate值（30deg）元素顺时针旋转30度。</p>

    <h2>scale() 方法</h2>
    <p>scale()方法，该元素增加或减少的大小，取决于宽度（X轴）和高度（Y轴）的参数：</p>
    <pre class="code">div
{
transform: scale(2,4);
-ms-transform: scale(2,4); /* IE 9 */
-webkit-transform: scale(2,4); /* Safari and Chrome */
}</pre>
    <p>scale（2,4）转变宽度为原来的大小的2倍，和其原始大小4倍的高度。</p>

    <h2>skew() 方法</h2>
    <p>skew()方法，该元素会根据横向（X轴）和垂直（Y轴）线参数给定角度：</p>
    <pre class="code">div
{
transform: skew(30deg,20deg);
-ms-transform: skew(30deg,20deg); /* IE 9 */
-webkit-transform: skew(30deg,20deg); /* Safari and Chrome */
}</pre>
    <p>skew(30deg,20deg)是绕X轴和Y轴周围20度30度的元素。</p>

    <h2>matrix() 方法</h2>
    <p>matrix()方法和2D变换方法合并成一个。<br>
        matrix 方法有六个参数，包含旋转，缩放，移动（平移）和倾斜功能。</p>
    <pre class="code">div
{
transform:matrix(0.866,0.5,-0.5,0.866,0,0);
-ms-transform:matrix(0.866,0.5,-0.5,0.866,0,0); /* IE 9 */
-webkit-transform:matrix(0.866,0.5,-0.5,0.866,0,0); /* Safari and Chrome */
}</pre>

    <h2>2D 转换方法</h2>
    <table>

        <tbody><tr>
            <th style="width:25%">函数</th>
            <th>描述</th>
        </tr>

        <tr>
            <td>matrix(<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>)</td>
            <td>定义 2D 转换，使用六个值的矩阵。</td>
        </tr>

        <tr>
            <td>translate(<i>x</i>,<i>y</i>)</td>
            <td>定义 2D 转换，沿着 X 和 Y 轴移动元素。</td>
        </tr>

        <tr>
            <td>translateX(<i>n</i>)</td>
            <td>定义 2D 转换，沿着 X 轴移动元素。</td>
        </tr>

        <tr>
            <td>translateY(<i>n</i>)</td>
            <td>定义 2D 转换，沿着 Y 轴移动元素。</td>
        </tr>

        <tr>
            <td>scale(<i>x</i>,<i>y</i>)</td>
            <td>定义 2D 缩放转换，改变元素的宽度和高度。</td>
        </tr>

        <tr>
            <td>scaleX(<i>n</i>)</td>
            <td>定义 2D 缩放转换，改变元素的宽度。</td>
        </tr>

        <tr>
            <td>scaleY(<i>n</i>)</td>
            <td>定义 2D 缩放转换，改变元素的高度。</td>
        </tr>

        <tr>
            <td>rotate(<i>angle</i>)</td>
            <td>定义 2D 旋转，在参数中规定角度。</td>
        </tr>

        <tr>
            <td>skew(<i>x-angle</i>,<i>y-angle</i>)</td>
            <td>定义 2D 倾斜转换，沿着 X 和 Y 轴。</td>
        </tr>

        <tr>
            <td>skewX(<i>angle</i>)</td>
            <td>定义 2D 倾斜转换，沿着 X 轴。</td>
        </tr>

        <tr>
            <td>skewY(<i>angle</i>)</td>
            <td>定义 2D 倾斜转换，沿着 Y 轴。</td>
        </tr>
        </tbody></table>





</div>
<?php require_once 'foot.php';?>
</body>
</html>