<!DOCTYPE html>
<html>
<head>
    <title>CSS浮动</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">

</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-29 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS浮动</h1>
    <p><strong>浮动的框可以向左或向右移动，直到他的外边缘碰到包含框或另一个浮动框为止。</strong><br>或者说，<br>元素的水平方向浮动，意味着元素只能左右移动而不能上下移动。<br>一个浮动元素会尽量向左或向右移动，直到他的外边缘碰到包含框或另一个浮动框的边框为止。<br><strong>浮动元素之后的元素将围绕它。<br>浮动元素之前的元素将不会受影响。</strong></p>
    <h2>CSS浮动</h2>
    <p>请看下图，当把框1向右浮动时，它脱离文档流并且向右移动，直到它的右边源碰到包含框的右边缘：</p>
    <p><img src="img/float1.gif"></p>
    <p><strong><a href="example/float.html">实例1</a> </strong></p>
    
    <p>再请看下图，当框1向左浮动时，它脱离文档流并且向左浮动，直到他的左边缘碰到包含框的左边缘。因为它不再处于文档流中，所以它不占据空间，实际上覆盖了框2，是框2从视图中消失。<br>如果把所有三个框都向左移动，那么框1向左浮动直到碰到包含框，另外两个框向左浮动直到碰到前一个浮动框。</p>
    <p><img src="img/float2.gif"></p>
    <p><strong><a href="example/float.html#ex2">实例1</a> </strong></p>

    <p>如下图所示，如果包含框太窄，无法容纳水平排列的三个浮动浮动元素，那么其他浮动块向下移动直到有足够的空间。如果浮动元素的高度不同，那么当他们向下移动时，可能被其他浮动元素“卡住”：</p>
    <p><img src="img/float3.gif"></p>

    <h2>行框和清理</h2>
    <p>浮动框旁边的<strong>行框</strong>被缩短，从而给浮动框流出空间，<strong>行框</strong>绕浮动框。<br>因此，创建浮动框可以使文本围绕图像，如图：</p>
    <p><img src="img/float4.gif"></p>

    <p>要想阻止行框围绕浮动框，需要对该框应用clear属性。clear属性的值可以是left,right,both或none，它表示框的哪些边不应该挨着浮动框。</p>

    <p>假设希望让一个图片浮动到文本块的左边，并且希望这幅图片和文本包含在另一个具有背景颜色和边框的元素中。您可能编写下面的代码：</p>
    <pre class="code">
.news {
    background-color: gray;
    border: solid 1px black;
}

.news img {
    float: left;
}

.news p {
    float: right;
}

&lt;div class="news"&gt;
&lt;img src="news-pic.jpg" /&gt;
&lt;p>some text&lt;/p&gt;
&lt;/div&gt;
    </pre>

    <p>这种情况下，出现了一个问题。因为浮动元素脱离了文档流，所以包围图片和文本的 div 不占据空间。<br>
        如何让包围元素在视觉上包围浮动元素呢？需要在这个元素中的某个地方应用 clear：</p>
    <p><img src="img/float5.gif"></p>
    <p>不幸的是出现了一个新的问题，由于没有现有的元素可以应用清理，所以我们只能添加一个空元素并且清理它。</p>
    <pre class="code">
.news {
    background-color: gray;
    border: solid 1px black;
}

.news img {
    float: left;
}

.news p {
    float: right;
}
<span style="color: blue">
.clear {
    clear: both;
}
</span>

&lt;div class="news"&gt;
&lt;img src="news-pic.jpg" /&gt;
&lt;p>some text&lt;/p&gt;
<span style="color: blue">&lt;div class="clear"&gt;</span>
&lt;/div&gt;
    </pre>

    <p>这样可以实现我们希望的效果，但是需要添加多余的代码。常常有元素可以应用 clear，但是有时候不得不为了进行布局而添加无意义的标记。<br>
        不过我们还有另一种办法，那就是对容器 div 进行浮动：</p>
    <pre class="code">
.news {
    background-color: gray;
    border: solid 1px black;
    <span style="color: blue">float: left;</span>
}

.news img {
    float: left;
}

.news p {
    float: right;
}

&lt;div class="news"&gt;
&lt;img src="news-pic.jpg" /&gt;
&lt;p>some text&lt;/p&gt;
&lt;/div&gt;
    </pre>

    <p>这样会得到我们希望的效果。不幸的是，下一个元素会受到这个浮动元素的影响。为了解决这个问题，有些人选择对布局中的所有东西进行浮动，然后使用适当的有意义的元素（常常是站点的页脚）对这些浮动进行清理。这有助于减少或消除不必要的标记。    </p>

    <p><strong>设置父元素的overflow</strong></p>
    <pre class="code">
#f {
    overflow: hidden;
}
    </pre>

    <h2>CSS 中所有的浮动属性</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
            <th>值</th>
            <th>CSS</th>
        </tr>
        <tr>
            <td><a href="#">clear</a></td>
            <td>指定不允许元素周围有浮动元素。</td>
            <td>left<br>
                right<br>
                both<br>
                none<br>
                inherit</td>
            <td>1</td>
        </tr>
        <tr>
            <td><a href="#">float</a></td>
            <td>指定一个盒子（元素）是否可以浮动。</td>
            <td>left<br>
                right<br>
                none<br>
                inherit</td>
            <td>1</td>
        </tr>
    </table>
</div>
<?php require_once 'foot.php';?>
</body>
</html>