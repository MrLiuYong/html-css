<!DOCTYPE html>
<html>
<head>
    <title>CSS3 3D 过渡</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        .transition {
            font-size: 12px;
            width: 100px;
            height: 100px;
            background: red;
            -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* For Safari 3.1 to 6.0 */
            transition: width 2s, height 2s, transform 9s;
        }

        .transition:hover {
            width: 200px;
            height: 200px;
            -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 过渡</h1>
    <h2>CSS3 过渡</h2>
    <p>CSS3中，我们为了添加某种效果可以从一种样式转变到另一个的时候，无需使用Flash动画或JavaScript。</p>

    <h2>CSS3 transition 属性</h2>
    <p>语法</p>
    <p class="code">transition: property duration timing-function delay;</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td><i><a href="#">transition-property</a></i></td>
            <td>指定CSS属性的name，transition效果</td>
        </tr>
        <tr>
            <td><i><a href="#">transition-duration</a></i></td>
            <td>transition效果需要指定多少秒或毫秒才能完成</td>
        </tr>
        <tr>
            <td><i><a href="#">transition-timing-function</a></i></td>
            <td>指定transition效果的转速曲线</td>
        </tr>
        <tr>
            <td><i><a href="#">transition-delay</a></i></td>
            <td>定义transition效果开始的时候</td>
        </tr>
    </table>

    <h2>它是如何工作？</h2>
    <p>CSS3 过渡是元素从一种样式逐渐改变为另一种的效果。</p>

    <p>要实现这一点，必须规定两项内容：</p>
    <ul>
        <li>指定要添加效果的CSS属性</li>
        <li>指定效果的持续时间。</li>
    </ul>

    <p>应用于宽度属性的过渡效果，时长为 2 秒：</p>
    <pre class="code">div
{
transition: width 2s;
-webkit-transition: width 2s; /* Safari */
}</pre>
    <p><span>注意：</span> 如果未指定的期限，transition将没有任何效果，因为默认值是0。<br>
        指定的CSS属性的值更改时效果会发生变化。一个典型CSS属性的变化是用户鼠标放在一个元素上时：</p>
    <pre class="code">规定当鼠标指针悬浮(:hover)于 <div>元素上时：
div:hover
{
width:300px;
}</pre>
    <p>注意： 当鼠标光标移动到该元素时，它逐渐改变它原有样式</p>

    <h2>多项改变</h2>
    <p>要添加多个样式的变换效果，添加的属性由逗号分隔：</p>
    <p>添加了宽度，高度和转换效果：</p>
    <pre class="code">div
{
transition: width 2s, height 2s, transform 2s;
-webkit-transition: width 2s, height 2s, -webkit-transform 2s;
}</pre>

    <div class="transition">鼠标移动到 div 元素上，查看过渡效果。</div>

    <h2>过渡属性</h2>
    <p>下表列出了所有的过渡属性:</p>
    <table>
        <tbody><tr>
            <th style="width:30%">属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td><a href="#" title="CSS3 transition 属性">transition</a></td>
            <td>简写属性，用于在一个属性中设置四个过渡属性。</td>
            <td>3</td>
        </tr>
        <tr>
            <td><a href="#" title="CSS3 transition-property 属性">transition-property</a></td>
            <td>规定应用过渡的 CSS 属性的名称。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 transition-duration 属性">transition-duration</a></td>
            <td>定义过渡效果花费的时间。默认是 0。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 transition-timing-function 属性">transition-timing-function</a></td>
            <td>规定过渡效果的时间曲线。默认是 "ease"。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 transition-delay 属性">transition-delay</a></td>
            <td>规定过渡效果何时开始。默认是 0。</td>
        </tr>
        </tbody></table>

    <p>在一个例子中使用所有过渡属性：</p>
    <pre class="code">div
{
transition-property: width;
transition-duration: 1s;
transition-timing-function: linear;
transition-delay: 2s;
/* Safari */
-webkit-transition-property:width;
-webkit-transition-duration:1s;
-webkit-transition-timing-function:linear;
-webkit-transition-delay:2s;
}</pre>
    <p>与上面的例子相同的过渡效果，但是使用了简写的 transition 属性：</p>
    <pre class="code">div
{
transition: width 1s linear 2s;
/* Safari */
-webkit-transition:width 1s linear 2s;
}</pre>
</div>
<?php include_once "foot.php";?>
</body>
</html>