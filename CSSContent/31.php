<!DOCTYPE html>
<html>
<head>
    <title>CSS3 渐变（Gradients）</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .linear {
            width: 200px;
            height: 100px;
            background: linear-gradient(red,blue);
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 渐变（Gradients）</h1>
    <p><img src="img/gradient_top.png"></p>
    <p>CSS3 渐变（gradients）可以让你在两个或多个指定的颜色之间显示平稳的过渡。<br>
        以前，你必须使用图像来实现这些效果。但是，通过使用 CSS3 渐变（gradients），你可以减少下载的事件和宽带的使用。此外，渐变效果的元素在放大时看起来效果更好，因为渐变（gradient）是由浏览器生成的。<br>
        CSS3 定义了两种类型的渐变（gradients）：</p>
    <ul>
        <li>线性渐变（Linear Gradients）- 向下/向上/向左/向右/对角方向</li>
        <li>径向渐变（Radial Gradients）- 由它们的中心定义</li>
    </ul>
    <h2>浏览器支持</h2>
    <p>表中的数字指定了完全支持该属性的第一个浏览器版本。<br>
        后边跟 -webkit-、-moz- 或 -o- 的数字指定了需加上前缀才能支持属性的第一个版本。</p>
    <table class="browserref notranslate">
        <tr>
            <th style="width:25%;font-size:16px;text-align:left;">属性</th>
            <th style="width:12%;" class="bsIE" title="Internet Explorer">Internet Explorer</th>
            <th style="width:16%;" class="bsChrome" title="Chrome">Chrome</th>
            <th style="width:16%;" class="bsFirefox" title="Firefox">Firefox</th>
            <th style="width:16%;" class="bsSafari" title="Safari">Safari</th>
            <th style="width:15%;" class="bsOpera" title="Opera">Opera</th>
        </tr>
        <tr>
            <td>linear-gradient</td>
            <td>10.0</td>
            <td>26.0<br>10.0 -webkit-</td>
            <td>16.0<br>3.6 -moz-</td>
            <td>6.1<br>5.1 -webkit-</td>
            <td>12.1<br>11.1 -o-</td>
        </tr>
        <tr>
            <td>radial-gradient</td>
            <td>10.0</td>
            <td>26.0<br>10.0 -webkit-</td>
            <td>16.0<br>3.6 -moz-</td>
            <td>6.1<br>5.1 -webkit-</td>
            <td>12.1<br>11.6 -o-</td>
        </tr>
        <tr>
            <td>repeating-linear-gradient</td>
            <td>10.0</td>
            <td>26.0<br>10.0 -webkit-</td>
            <td>16.0<br>3.6 -moz-</td>
            <td>6.1<br>5.1 -webkit-</td>
            <td>12.1<br>11.1 -o-</td>
        </tr>
        <tr>
            <td>repeating-radial-gradient</td>
            <td>10.0</td>
            <td>26.0<br>10.0 -webkit-</td>
            <td>16.0<br>3.6 -moz-</td>
            <td>6.1<br>5.1 -webkit-</td>
            <td>12.1<br>11.6 -o-</td>
        </tr>
    </table>

    <h2>CSS3 线性渐变</h2>
    <p>为了创建一个线性渐变，你必须至少定义两种颜色结点。颜色结点即你想要呈现平稳过渡的颜色。同时，你也可以设置一个起点和一个方向（或一个角度）。</p>
    <h3>语法</h3>
    <p class="code">background: linear-gradient(direction, color-stop1, color-stop2, ...);</p>
    <p><strong>线性渐变 - 从上到下（默认情况下）</strong></p>
    <p>下面的实例演示了从顶部开始的线性渐变。起点是红色，慢慢过渡到蓝色：</p>
    <pre class="code">
#grad {
    background: -webkit-linear-gradient(red, blue); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(red, blue); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(red, blue); /* Firefox 3.6 - 15 */
    background: linear-gradient(red, blue); /* 标准的语法 */
}
    </pre>
    <p><strong>线性渐变 - 从左到右</strong></p>
    <p>下面的实例演示了从左边开始的线性渐变。起点是红色，慢慢过渡到蓝色：</p>
    <pre class="code">
#grad {
    background: -webkit-linear-gradient(left, red , blue); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(right, red, blue); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(right, red, blue); /* Firefox 3.6 - 15 */
    background: linear-gradient(to right, red , blue); /* 标准的语法 */
}
    </pre>
    <p><strong>线性渐变 - 对角</strong></p>
    <pre class="code">
#grad {
    background: -webkit-linear-gradient(left top, red , blue); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(bottom right, red, blue); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(bottom right, red, blue); /* Firefox 3.6 - 15 */
    background: linear-gradient(to bottom right, red , blue); /* 标准的语法 */
}
    </pre>

    <h2>使用角度</h2>
    <p>如果你想要在渐变的方向上做更多的控制，你可以定义一个角度，而不用预定义方向（to bottom、to top、to right、to left、to bottom right，等等）。</p>
    <h3>语法</h3>
    <p class="code">background: linear-gradient(angle, color-stop1, color-stop2);</p>
    <p>角度是指水平线和渐变线之间的角度，逆时针方向计算。换句话说，0deg 将创建一个从下到上的渐变，90deg 将创建一个从左到右的渐变。</p>
    <p><img src="img/rt.jpg" width="400"></p>
    <p>但是，请注意很多浏览器(Chrome,Safari,fiefox等)的使用了旧的标准，即 0deg 将创建一个从左到右的渐变，90deg 将创建一个从下到上的渐变。换算公式 90 - x = y 其中 x 为标准角度，y为非标准角度。<br>
        下面的实例演示了如何在线性渐变上使用角度：</p>
    <pre class="code">
#grad {
    background: -webkit-linear-gradient(180deg, red, blue); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(180deg, red, blue); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(180deg, red, blue); /* Firefox 3.6 - 15 */
    background: linear-gradient(180deg, red, blue); /* 标准的语法 */
}
    </pre>

    <h2>使用多个颜色结点</h2>
    <p>下面的实例演示了如何设置多个颜色结点：</p>
    <pre class="code">#grad {
  background: -webkit-linear-gradient(red, green, blue); /* Safari 5.1 - 6.0 */
  background: -o-linear-gradient(red, green, blue); /* Opera 11.1 - 12.0 */
  background: -moz-linear-gradient(red, green, blue); /* Firefox 3.6 - 15 */
  background: linear-gradient(red, green, blue); /* 标准的语法 */
}</pre>
    <p>下面的实例演示了如何创建一个带有彩虹颜色和文本的线性渐变：</p>
    <pre class="code">#grad {
  /* Safari 5.1 - 6.0 */
  background: -webkit-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);
  /* Opera 11.1 - 12.0 */
  background: -o-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);
  /* Firefox 3.6 - 15 */
  background: -moz-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);
  /* 标准的语法 */
  background: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);
}</pre>

    <h2>使用透明度（Transparency）</h2>
    <p>CSS3 渐变也支持透明度（transparency），可用于创建减弱变淡的效果。<br>
        为了添加透明度，我们使用 rgba() 函数来定义颜色结点。rgba() 函数中的最后一个参数可以是从 0 到 1 的值，它定义了颜色的透明度：0 表示完全透明，1 表示完全不透明。<br>
        下面的实例演示了从左边开始的线性渐变。起点是完全透明，慢慢过渡到完全不透明的红色：</p>
    <pre class="code">#grad {
  background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(255,0,0,1)); /* Safari 5.1 - 6 */
  background: -o-linear-gradient(right,rgba(255,0,0,0),rgba(255,0,0,1)); /* Opera 11.1 - 12*/
  background: -moz-linear-gradient(right,rgba(255,0,0,0),rgba(255,0,0,1)); /* Firefox 3.6 - 15*/
  background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /* 标准的语法 */
}</pre>

    <h2>重复的线性渐变</h2>
    <p>repeating-linear-gradient() 函数用于重复线性渐变：</p>
    <pre class="code">#grad {
  /* Safari 5.1 - 6.0 */
  background: -webkit-repeating-linear-gradient(red, yellow 10%, green 20%);
  /* Opera 11.1 - 12.0 */
  background: -o-repeating-linear-gradient(red, yellow 10%, green 20%);
  /* Firefox 3.6 - 15 */
  background: -moz-repeating-linear-gradient(red, yellow 10%, green 20%);
  /* 标准的语法 */
  background: repeating-linear-gradient(red, yellow 10%, green 20%);
}</pre>

    <h2>CSS3 径向渐变</h2>
    <p>径向渐变由它的中心定义。<br>
        为了创建一个径向渐变，你也必须至少定义两种颜色结点。颜色结点即你想要呈现平稳过渡的颜色。同时，你也可以指定渐变的中心、形状（原型或椭圆形）、大小。默认情况下，渐变的中心是 center（表示在中心点），渐变的形状是 ellipse（表示椭圆形），渐变的大小是 farthest-corner（表示到最远的角落）。</p>
    <h3>语法</h3>
    <p class="code">background: radial-gradient(center, shape size, start-color, ..., last-color);</p>
    <p>径向渐变 - 颜色结点均匀分布（默认情况下）</p>
    <pre class="code">#grad {
  background: -webkit-radial-gradient(red, green, blue); /* Safari 5.1 - 6.0 */
  background: -o-radial-gradient(red, green, blue); /* Opera 11.6 - 12.0 */
  background: -moz-radial-gradient(red, green, blue); /* Firefox 3.6 - 15 */
  background: radial-gradient(red, green, blue); /* 标准的语法 */
}</pre>
    <p>径向渐变 - 颜色结点不均匀分布</p>
    <pre class="code">#grad {
  background: -webkit-radial-gradient(red 5%, green 15%, blue 60%); /* Safari 5.1 - 6.0 */
  background: -o-radial-gradient(red 5%, green 15%, blue 60%); /* Opera 11.6 - 12.0 */
  background: -moz-radial-gradient(red 5%, green 15%, blue 60%); /* Firefox 3.6 - 15 */
  background: radial-gradient(red 5%, green 15%, blue 60%); /* 标准的语法 */
}</pre>

    <h2>设置形状</h2>
    <p>shape 参数定义了形状。它可以是值 circle 或 ellipse。其中，circle 表示圆形，ellipse 表示椭圆形。默认值是 ellipse。</p>
    <p>形状为圆形的径向渐变：</p>
    <pre class="code">#grad {
  background: -webkit-radial-gradient(circle, red, yellow, green); /* Safari 5.1 - 6.0 */
  background: -o-radial-gradient(circle, red, yellow, green); /* Opera 11.6 - 12.0 */
  background: -moz-radial-gradient(circle, red, yellow, green); /* Firefox 3.6 - 15 */
  background: radial-gradient(circle, red, yellow, green); /* 标准的语法 */
}</pre>

    <h2>不同尺寸大小关键字的使用</h2>
    <p>size 参数定义了渐变的大小。它可以是以下四个值：</p>
    <ul>
        <li><strong>closest-side</strong></li>
        <li><strong>farthest-side</strong></li>
        <li><strong>closest-corner</strong></li>
        <li><strong>farthest-corner</strong></li>
    </ul>
    <p>带有不同尺寸大小关键字的径向渐变：</p>
    <pre class="code">#grad1 {
  /* Safari 5.1 - 6.0 */
  background: -webkit-radial-gradient(60% 55%, closest-side,blue,green,yellow,black);
  /* Opera 11.6 - 12.0 */
  background: -o-radial-gradient(60% 55%, closest-side,blue,green,yellow,black);
  /* Firefox 3.6 - 15 */
  background: -moz-radial-gradient(60% 55%, closest-side,blue,green,yellow,black);
  /* 标准的语法 */
  background: radial-gradient(60% 55%, closest-side,blue,green,yellow,black);
}

#grad2 {
  /* Safari 5.1 - 6.0 */
  background: -webkit-radial-gradient(60% 55%, farthest-side,blue,green,yellow,black);
  /* Opera 11.6 - 12.0 */
  background: -o-radial-gradient(60% 55%, farthest-side,blue,green,yellow,black);
  /* Firefox 3.6 - 15 */
  background: -moz-radial-gradient(60% 55%, farthest-side,blue,green,yellow,black);
  /* 标准的语法 */
  background: radial-gradient(60% 55%, farthest-side,blue,green,yellow,black);
}</pre>

    <h2>重复的径向渐变</h2>
    <p>repeating-radial-gradient() 函数用于重复径向渐变：</p>
    <pre class="code">#grad {
  /* Safari 5.1 - 6.0 */
  background: -webkit-repeating-radial-gradient(red, yellow 10%, green 15%);
  /* Opera 11.6 - 12.0 */
  background: -o-repeating-radial-gradient(red, yellow 10%, green 15%);
  /* Firefox 3.6 - 15 */
  background: -moz-repeating-radial-gradient(red, yellow 10%, green 15%);
  /* 标准的语法 */
  background: repeating-radial-gradient(red, yellow 10%, green 15%);
}</pre>
</div>
<?php require_once 'foot.php';?>
</body>
</html>