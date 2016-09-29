<!DOCTYPE html>
<html>
<head>
    <title>CSS定位</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        div b {
            margin-right: 10px;
            padding-left: 10px;
            border: solid 1px red;
            margin-top: 500px;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-26 14:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS定位</h1>
    <p>定位的基本思想很简单，它允许你定义元素框相对于其正常位置应该出现的位置，或者相对于父元素、另一个元素，甚至浏览器窗口本想的位置。</p>

    <p><strong style="border-bottom: solid 5px red;background-color: yellow;font-size: 35px;padding: 10px">一切皆为框</strong></p>

    <h2>CSS定位机制</h2>
    <p>CSS有三种基本的定位机制：普通流、浮动、和绝对定位。<br>除非专门指定，否则所有框都在普通流中定位，也就是说，普通流中的元素位置由元素在HTML中的位置决定。</p>
    <p>块级框从上到下一个接一个地排列，框之间的垂直距离是由框的垂直外边距计算出来的。</p>
    <p>行内框在一行中水平布置，可以使用水平内边距、边框和外边距调整他们之间的间距，但是，<del>垂直内边距、边框和</del>外边距不影响行内框的高度。</p>

    <div class="code">
        天上飘来<b>我是一只小小鸟</b><span>想要飞呀</span>却飞不高？这是为什么呢？
    </div>

    <h2>CSS定位属性</h2>
    <p>CSS定位属性允许你对元素进行定位。</p>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>position</td>
            <td>把元素放置到一个静态的、相对的、绝对的或固定的位置中</td>
        </tr>
        <tr>
            <td>top</td>
            <td>定义了一个定位元素的上外边距边界与其包含块上边界直接的偏移</td>
        </tr>
        <tr>
            <td>right</td>
            <td>定义了一个定位元素的右外边距边界与其包含块右边界直接的偏移</td>
        </tr>
        <tr>
            <td>bottom</td>
            <td>定义了一个定位元素的下外边距边界与其包含块下边界直接的偏移</td>
        </tr>
        <tr>
            <td>left</td>
            <td>定义了一个定位元素的左外边距边界与其包含块左边界直接的偏移</td>
        </tr>
        <tr>
            <td>overflow</td>
            <td>设置当元素的内容溢出其区域时发生的事情</td>
        </tr>
        <tr>
            <td>clip</td>
            <td>设置元素的形状，元素被剪入这个形状之中，然后显示出来</td>
        </tr>
        <tr>
            <td>vertical-align</td>
            <td>设置元素的垂直对齐方式</td>
        </tr>
        <tr>
            <td>z-index</td>
            <td>设置元素的堆叠顺序</td>
        </tr>
    </table>

    <h2>CSS position属性</h2>
    <p>通过使用position属性，我们可以选择4中不ongoing的类型的定位，这会影响元素框生成的方式。</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td><a href="#absolute">absolute</a></td>
            <td>生成绝对定位的元素，相对于static定位以外的第一个父元素进行定位。<br>元素的位置通过left,top,right及bottom属性进行规定</td>
        </tr>
        <tr>
            <td><a href="#fixed">fixed</a></td>
            <td>生成绝对定位的元素，相对于浏览器窗口进行定位。<br>素的位置通过left,top,right及bottom属性进行规定</td>
        </tr>
        <tr>
            <td><a href="#relative">relative</a></td>
            <td>生成相对定位的元素，相对于其正常位置进行定位，因此，left：20会想元素的left位置添加20像素</td>
        </tr>
        <tr>
            <td>static</td>
            <td>默认值。没有定位，元素出现在正常的流中，忽略top,bottom,left,right或者z-index声明</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td>规定应该从父元素继承position属性值</td>
        </tr>
    </table>

    <h2 id="absolute">CSS绝对定位</h2>
    <p>设置为绝对定位的元素框从文档流完全删除，并相对于包含块定位，包含块可能是文档中的另一个元素或者是初始包含块。元素原先在正常文档流中所占的空间会关闭，就好像改元素原来不存在一样。<br>元素定位后生成一个块级框，而不论原来它在正常流中生成的何种类型的框。如：</p>
    <img src="img/absolute.gif"><br>
    <strong><a href="example/absolute.html" target="_blank">实例</a> </strong>
    <p>绝对定位使元素的位置与文档流无关，因此不占据空间。这一点与相对定位不同，相对定位实际上被看着普通流定位模型的一部分，因为元素的位置相对于它在普通流中的位置。</p>
    <p>绝对定位的元素位置，相对于<strong>最近的已定位祖先元素</strong>，如果元素没有已定位的祖先元素，那么它的位置相对于<strong>最初的包含块。</strong></p>
    <p><span>提示：</span>因为绝对定位的框与文档流无关，所以它们可以覆盖页面上的其他元素，可以通过设置z-index属性来控制这些框的堆放次序。</p>
    <p><strong>总结：</strong></p>
    <ul>
        <li>absolute 定位相对于最近的已定位的祖先元素</li>
        <li>absolute 定位使元素的位置与文档流无关，因此不占据空间</li>
        <li>absolute 定位的元素和其他元素重叠</li>
    </ul>

    <h2 id="relative">CSS相对定位</h2>
    <p>设置为相对定位的元素框会偏移某个距离，元素仍然保持其未定位前的形状，它原本所占的空间仍然保留。</p>
    <p class="code"><strong>相对定位元素经常被用来作为绝对定位元素的容器块。</strong></p>
    <p>相对定位是一个非常易掌握的概念。如果对一个元素相对定位，它将出现在它所在的位置上，然后，可以通过设置垂直或水平位置，让这个元素“相对于”它的起点进行移动。<br>如果将top设置为20px，那么框将在原位置顶部下面20px的地方，如果left设置为30px，那么会在元素左边创建30px的空间，也就是将元素想右移动。如：</p>
    <pre class="code">
#div {
    position: relative;
    left: 30px;
    top:  30px;
}
    </pre>
    <p>
        <img src="img/relative.gif">
    </p>
    <p><strong><a href="example/relative.html" target="_blank">相对定位</a> </strong></p>
    <p><span>注：</span>在使用相对定位时，无论是否进行移动，元素仍然占据原来的空间，因此移动元素会导致它覆盖其他框。</p>

    <h2 id="fixed">fixed定位</h2>
    <p>元素的位置相对于浏览器窗口是固定位置，即使窗口是滚动的，它也不会移动。</p>
    <p><span>注：</span>Fixed定位使元素的位置与文档流无关，因此不占据空间。<br>Fixed定位的元素和其他元素重叠。</p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>