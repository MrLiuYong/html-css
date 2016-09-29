<!DOCTYPE html>
<html>
<head>
<title>CSS文本格式</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html,css,问呀">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">-->
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-24 10:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS文本格式</h1>
    <h2>CSS文本属性</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td><a href="#color">color</a> </td>
            <td>设置文本颜色</td>
        </tr>
        <tr>
            <td><a href="#direction">direction</a> </td>
            <td>设置文本方向</td>
        </tr>
        <tr>
            <td><a href="#letter-spacing">letter-spacing</a> </td>
            <td>设置字符间距</td>
        </tr>
        <tr>
            <td><a href="#line-height">line-height</a> </td>
            <td>设置行高</td>
        </tr>
        <tr>
            <td><a href="#text-align">text-align</a> </td>
            <td>对齐元素中的文本</td>
        </tr>
        <tr>
            <td><a href="#text-decoration">text-decoration</a> </td>
            <td>向文本添加修饰</td>
        </tr>
        <tr>
            <td><a href="#text-indent">text-indent</a> </td>
            <td>缩进元素中文本的首行</td>
        </tr>
        <tr>
            <td><a href="#text-shadow">text-shadow</a> </td>
            <td>设置文本阴影</td>
        </tr>
        <tr>
            <td><a href="#text-transform">text-transform</a></td>
            <td>控制元素的字母</td>
        </tr>
        <tr>
            <td><a href="#vertical-align">vertical-align</a></td>
            <td>设置元素的垂直对齐</td>
        </tr>
        <tr>
            <td><a href="#white-space">white-space</a></td>
            <td>设置元素中空白的处理方式</td>
        </tr>
        <tr>
            <td><a href="#word-spacing">word-spacing</a></td>
            <td>设置字间距</td>
        </tr>
    </table>

    <h2 id="direction">CSS direction属性</h2>
    <p>direction指定文本方向</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>ltr</td>
            <td>默认，文本方向从左到右</td>
        </tr>
        <tr>
            <td>rtl</td>
            <td>文本方向从右到左</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <strong>lrt:</strong>
    <p class="code" style="direction: ltr">
        这是一段文字。<br>Mr.X is my teacher.
    </p>
    <strong>rtl:</strong>
    <p class="code" style="direction: rtl">
        这是一段文字。<br>Mr.X is my teacher.
    </p>

    <h2 id="letter-spacing">CSS letter-spacing</h2>
    <p>letter-spacing属性增加或减少字符间的空白（字符间距）。</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>normal</td>
            <td>默认</td>
        </tr>
        <tr>
            <td>length</td>
            <td>定义字符间的固定空间，允许使用负值</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <b>默认</b>
    <p class="code">
        Mr.Xiong is a good teacher!
    </p>
    <b>letter-spacing: 15px</b>
    <p class="code" style="letter-spacing: 15px">
        Mr.Xiong is a good teacher!
    </p>
    <b>letter-spacing: -3px</b>
    <p class="code" style="letter-spacing: -3px">
        Mr.Xiong is a good teacher!
    </p>
    <b>letter-spacing: -30px</b>
    <p class="code" style="letter-spacing: -30px;text-align: right">
        Mr.Xiong is a good teacher!
    </p>

    <h2 id="line-height">CSS line-height属性</h2>
    <p>设置行高</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>nomal</td>
            <td>默认</td>
        </tr>
        <tr>
            <td>number</td>
            <td>设置数值，此数值会与当前字体尺寸相乘来设置行间距</td>
        </tr>
        <tr>
            <td>length</td>
            <td>像素</td>
        </tr>
        <tr>
            <td>%</td>
            <td>基于当前字体尺寸的百分比行间距</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <b>默认</b>
    <p class="code">
        Mr.Xiong is a good teacher.
    </p>
    <b>line-height: 2</b>
    <p class="code" style="line-height: 2">
        Mr.Xiong is a good teacher.
    </p>

    <h2 id="text-align">CSS text-align属性</h2>
    <p>对齐元素中的文本</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>left</td>
            <td>把文本排列到左边，默认</td>
        </tr>
        <tr>
            <td>right</td>
            <td>把文本排列到右边</td>
        </tr>
        <tr>
            <td>center</td>
            <td>把文本排列到中间</td>
        </tr>
        <tr>
            <td>justify</td>
            <td>两端对齐</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <b>默认</b>
    <p class="code">
        Mr.Xiong is a good teacher.
    </p>
    <b>text-align: right</b>
    <p class="code" style="text-align: right">
        Mr.Xiong is a good teacher.
    </p>
    <b>text-align: center</b>
    <p class="code" style="text-align: center">
        Mr.Xiong is a good teacher.
    </p>
    <b>text-align: justify</b>
    <p class="code" style="text-align: justify">
        Mr.Xiong is a good tesssssachaer.Mr.Xiong is a good teacher.Mr.Xiong is a good teacher.Mr.Xiong is a good teacher.
    </p>

    <h2 id="text-decoration">CSS text-decoration</h2>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>none</td>
            <td>默认</td>
        </tr>
        <tr>
            <td>underline</td>
            <td>定义文本下的一条线</td>
        </tr>
        <tr>
            <td>overline</td>
            <td>定义文本上的一条线</td>
        </tr>
        <tr>
            <td>line-through</td>
            <td>定义穿过文本的一条线</td>
        </tr>
        <tr>
            <td>blink</td>
            <td>定义闪烁的文本</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <b>text-decoration: underline</b>
    <p class="code" style="text-decoration: underline">
        文本下面有一条线<br>The line is under the text.
    </p>
    <b>text-decoration: overline</b>
    <p class="code" style="text-decoration: overline">
        文本上面有一条线<br>The line is over the text.
    </p>
    <b>text-decoration: line-through</b>
    <p class="code" style="text-decoration: line-through;">
        穿过文本的线<br>The line is through the text.
    </p>
    <p>从设计的角度看，text-decoration属性主要用来删除链接的下划线。</p>
    <p class="code">
        style="text-decoration: none"<br><br>
        <a href="#" style="text-decoration: none">Click Me</a>
    </p>

    <b>text-decoration: blink</b>
    <p class="code" style="text-decoration: blink">
        blink text
    </p>

    <h2 id="text-indent">CSS text-indent</h2>
    <p>规定文本中首行文本的缩进。<br>负值是允许的，如果值为负数，将第一行左缩进。</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>length</td>
            <td>单位像素</td>
        </tr>
        <tr>
            <td>%</td>
            <td>基于父元素宽度的百分比缩进</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <p class="code" style="text-indent: 50px;text-align: justify;line-height: 2">
        当我年轻的时候，我梦想改变这个世界；当我成熟以后，我发现我不能够改变这个世界，我将目光缩短了些，决定只改变我的国家；当我进入暮年以后，我发现我不能够改变我们的国家，我的最后愿望仅仅是改变一下我的家庭，但是，这也不可能。当我现在躺在床上，行将就木时，我突然意识到：如果一开始，我仅仅去改变我自己，然后，我可能改变我的家庭；在家人的帮助和鼓励下，我可能为国家做一些事情，谁知道呢？我甚至可能改变这个世界。
    </p>

    <h2 id="text-shadow">CSS3 text-shadow</h2>
    <b>语法：</b>
    <p class="code">
        text-shadow: h-shadow v-shadow blur color
    </p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>h-shadow</td>
            <td>必需，水平阴影的位置，允许负值</td>
        </tr>
        <tr>
            <td>v-shadow</td>
            <td>必需，垂直阴影的位置，允许负值</td>
        </tr>
        <tr>
            <td>blur</td>
            <td>可选，模糊的距离</td>
        </tr>
        <tr>
            <td>color</td>
            <td>可选，阴影的颜色</td>
        </tr>
    </table>

    <p class="code">
        style="text-shadow: 2px 2px 8px red"
    </p>
    <h1 style="text-shadow: 2px 2px 8px red">改变自己</h1>

    <p class="code">
        style="color: white;text-shadow: 2px 2px 8px #000000"
    </p>
    <h1 style="color: white;text-shadow: 2px 2px 8px #000000">改变自己</h1>

    <p class="code">
        style="text-shadow: 0 0 3px #ff0000"
    </p>
    <h1 style="text-shadow: 0 0 3px #ff0000">改变自己</h1>

    <h2 id="text-transform">CSS text-transform</h2>
    <p>控制文本的大小写</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>none</td>
            <td>默认</td>
        </tr>
        <tr>
            <td>capitalize</td>
            <td>文本中的每个单词以大写字母开头</td>
        </tr>
        <tr>
            <td>uppercase</td>
            <td>仅有大写字母</td>
        </tr>
        <tr>
            <td>lowercase</td>
            <td>仅有小写字母</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <b>默认</b>
    <p class="code">
        i study PHP following Mr.Xiong.
    </p>
    <b>text-transform: capitalize</b>
    <p class="code" style="text-transform: capitalize">
        i study PHP following Mr.Xiong.
    </p>
    <b>text-transform: uppercase</b>
    <p class="code" style="text-transform: uppercase">
        i study PHP following Mr.Xiong.
    </p>
    <b>text-transform: lowercase</b>
    <p class="code" style="text-transform: lowercase">
        i study PHP following Mr.Xiong.
    </p>

    <h2 id="vertical-align">CSS vertical-align</h2>
    <p>设置一个元素的垂直对齐</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>baseline</td>
            <td>默认，基于父元素的基线对齐</td>
        </tr>
        <tr>
            <td>sub</td>
            <td>垂直对齐文本的下标</td>
        </tr>
        <tr>
            <td>super</td>
            <td>垂直对齐文本的上标</td>
        </tr>
        <tr>
            <td>top</td>
            <td>把元素的顶端与行中最高元素的顶端对齐</td>
        </tr>
        <tr>
            <td>text-top</td>
            <td>把元素的顶端与父元素字体的顶端对齐</td>
        </tr>
        <tr>
            <td>middle</td>
            <td>把此元素放置在父元素的中部</td>
        </tr>
        <tr>
            <td>bottom</td>
            <td>把元素的顶端与行中最低的元素顶端对齐</td>
        </tr>
        <tr>
            <td>text-bottom</td>
            <td>把元素的底端与父元素字体的底端对齐</td>
        </tr>
        <tr>
            <td>%</td>
            <td>使用"line-height"属性的百分比值来排放此元素</td>
        </tr>
    </table>
    <br>
    <div class="code" style="border: solid 1px red;width: 100%;height:200px">
        <img src="img/2.png" style="vertical-align: text-bottom;border: solid 1px green"> 我的梦想是上天 <img src="img/1.png" width="120">
    </div>

    <b>垂直居中</b>
    <pre class="code">
.father {
    display: block;
    width: 500px;
    height: 300px;/* 子元素垂直居中 */
    line-height: 300px;/* 子元素垂直居中 */
    margin: 0 auto;/* 此元素相对他的父元素水平居中 */
    border: solid 1px red;
    text-align: center;/* 子元素水平居中 */
    vertical-align: middle;/* 此元素与其兄弟元素垂直对齐 */
}
img {
    vertical-align: middle;
}

&lt;div class="father"&gt;
    &lt;img src="img/2.png"&gt;我要飞
&lt;/div>我在边框外面
    </pre>

    <h2 id="white-space">CSS white-space</h2>
    <p>指定元素内的空白怎样处理</p>
    <table>
        <tr>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>normal</td>
            <td>默认</td>
        </tr>
        <tr>
            <td>pre</td>
            <td>空白会被浏览器保留，其行为类似&lt;pre&gt;标签</td>
        </tr>
        <tr>
            <td>nowrap</td>
            <td>文本不会换行，文本会在同一行上继续，直到遇到&lt;br&gt;标签为止</td>
        </tr>
        <tr>
            <td>pre-wrap</td>
            <td>保留空白符序列，但是正常地进行换行</td>
        </tr>
        <tr>
            <td>pre-line</td>
            <td>会合并空白符序列，但是保留换行符</td>
        </tr>
        <tr>
            <td>inherit</td>
            <td></td>
        </tr>
    </table>
    <b>white-space: pre</b>
    <p class="code" style="white-space: pre">
        当我年轻的时候，
        我梦想改变这个世界；当我成熟以后，我发现我不能够改变这个世界，我将目光缩短了些......。
    </p>
    <b>white-space: nowrap</b>
    <p class="code" style="white-space: nowrap">
        当我年轻的时候，
        我梦想改变这个世界；当我成熟以后，我发现我不能够改变这个世界，我将目光缩短了些......。
    </p>
    <b>white-space: pre-wrap</b>
    <p class="code" style="white-space: pre-wrap">
        当我年轻的时候，
        我梦想改变这个世界；当我成熟以后，我发现我不能够改变这个世界，我将目光缩短了些......。
    </p>
    <b>white-space: pre-line</b>
    <p class="code" style="white-space: pre-line">
        当我年轻的时候，
        我梦想改变这个世界；当我成熟以后，我发现我不能够改变这个世界，我将目光缩短了些......。
    </p>

    <h2 id="word-spacing">CSS word-spacing</h2>
    <p>word-spacing增加或减少字与字之间空白</p>
    <p class="code" style="white-space: pre-line;word-spacing: 20px">
        when I was young,
        当我年轻的时候，
        我梦想改变这个世界；当我成熟以后，我发现我不能够改变这个世界，我将目光缩短了些......。
    </p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>