<!DOCTYPE html>
<html>
<head>
    <title>CSS3 3D 动画</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 动画</h1>
    <p>CSS3，我们可以创建动画，它可以取代许多网页动画图像，Flash动画，和JAVAScripts。</p>
    <h2>CSS3 @keyframes 规则</h2>
    <p>要创建CSS3动画，你将不得不了解@keyframes规则。<br>
        @keyframes规则是创建动画。 @keyframes规则内指定一个CSS样式和动画将逐步从目前的样式更改为新的样式。</p>
    <p>实例</p>
    <pre class="code">@keyframes myfirst
{
from {background: red;}
to {background: yellow;}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
from {background: red;}
to {background: yellow;}
}</pre>

    <h2>CSS3 动画</h2>
    <p>当在 @keyframes 创建动画，把它绑定到一个选择器，否则动画不会有任何效果。<br>
        指定至少这两个CSS3的动画属性绑定向一个选择器：</p>
    <ul>
        <li>规定动画的名称</li>
        <li>规定动画的时长</li>
    </ul>
    <p>把 "myfirst" 动画捆绑到 div 元素，时长：5 秒：</p>
    <pre class="code">div
{
animation: myfirst 5s;
-webkit-animation: myfirst 5s; /* Safari and Chrome */
}</pre>
    <p><span>注:</span>您必须定义动画的名称和动画的持续时间。如果省略的持续时间，动画将无法运行，因为默认值是0。</p>

    <h2>CSS3动画是什么？</h2>
    <p>动画是使元素从一种样式逐渐变化为另一种样式的效果。<br>
        您可以改变任意多的样式任意多的次数。<br>
        请用百分比来规定变化发生的时间，或用关键词 "from" 和 "to"，等同于 0% 和 100%。<br>
        0% 是动画的开始，100% 是动画的完成。<br>
        为了得到最佳的浏览器支持，您应该始终定义 0% 和 100% 选择器。</p>
    <p>当动画为 25% 及 50% 时改变背景色，然后当动画 100% 完成时再次改变：</p>
    <pre class="code">@keyframes myfirst
{
0%   {background: red;}
25%  {background: yellow;}
50%  {background: blue;}
100% {background: green;}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
0%   {background: red;}
25%  {background: yellow;}
50%  {background: blue;}
100% {background: green;}
}</pre>

    <p>改变背景色和位置：</p>
    <pre class="code">@keyframes myfirst
{
0%   {background: red; left:0px; top:0px;}
25%  {background: yellow; left:200px; top:0px;}
50%  {background: blue; left:200px; top:200px;}
75%  {background: green; left:0px; top:200px;}
100% {background: red; left:0px; top:0px;}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
0%   {background: red; left:0px; top:0px;}
25%  {background: yellow; left:200px; top:0px;}
50%  {background: blue; left:200px; top:200px;}
75%  {background: green; left:0px; top:200px;}
100% {background: red; left:0px; top:0px;}
}</pre>

    <h2>CSS3的动画属性</h2>
    <p>下面的表格列出了 @keyframes 规则和所有动画属性：</p>
    <table>

        <tbody><tr>
            <th>属性</th>
            <th>描述</th>
            <th>CSS</th>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 @keyframes 规则">@keyframes</a></td>
            <td>规定动画。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation 属性">animation</a></td>
            <td>所有动画属性的简写属性，除了 animation-play-state 属性。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-name 属性">animation-name</a></td>
            <td>规定 @keyframes 动画的名称。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-duration 属性">animation-duration</a></td>
            <td>规定动画完成一个周期所花费的秒或毫秒。默认是 0。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-timing-function 属性">animation-timing-function</a></td>
            <td>规定动画的速度曲线。默认是 "ease"。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-delay 属性">animation-delay</a></td>
            <td>规定动画何时开始。默认是 0。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-iteration-count 属性">animation-iteration-count</a></td>
            <td>规定动画被播放的次数。默认是 1。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-direction 属性">animation-direction</a></td>
            <td>规定动画是否在下一周期逆向地播放。默认是 "normal"。</td>
            <td>3</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS3 animation-play-state 属性">animation-play-state</a></td>
            <td>规定动画是否正在运行或暂停。默认是 "running"。</td>
            <td>3</td>
        </tr>
        </tbody></table>

    <p>运行myfirst动画，设置所有的属性：</p>
    <pre class="code">div
{
animation-name: myfirst;
animation-duration: 5s;
animation-timing-function: linear;
animation-delay: 2s;
animation-iteration-count: infinite;
animation-direction: alternate;
animation-play-state: running;
/* Safari and Chrome: */
-webkit-animation-name: myfirst;
-webkit-animation-duration: 5s;
-webkit-animation-timing-function: linear;
-webkit-animation-delay: 2s;
-webkit-animation-iteration-count: infinite;
-webkit-animation-direction: alternate;
-webkit-animation-play-state: running;
}</pre>

    <p>与上面的动画相同，但是使用了简写的动画 animation 属性：</p>
    <pre class="code">div
{
animation: myfirst 5s linear 2s infinite alternate;
/* Safari and Chrome: */
-webkit-animation: myfirst 5s linear 2s infinite alternate;
}</pre>

</div>

<?php include_once "foot.php";?>
</body>
</html>