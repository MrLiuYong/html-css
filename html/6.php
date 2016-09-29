<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML链接</title>
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<p>熊老师是个非常好的老师!<br><sub>create time:2016-08-17 14:50:30</sub></p>
<div class="contain">
   <h1 id="htmllianjie">HTML链接</h1>
    HTML使用超链接与网页上的另一个文档相连<br>
    <b>&lt;a&gt;</b><br>
    超链接:一个字，一个词，一组词，一副图像<br>
    当把鼠标指针移动到连接时，鼠标会出现小手的形状<br>
    默认样式:<br>
    <ol>
        <li>一个未访问过的链接显示为蓝色字体并带有下划线</li>
        <li>访问过的链接显示为紫色并带有下划线</li>
        <li>点击链接时，链接显示为红色并带有下划线</li>
    </ol>
        比如:
    <p class="code">
        &lt; a href=  &quot; http://h5.xiongxianhe.com/&quot;&gt;点击进入h5.xiongxianhe.com&lt;/&gt;
    </p>
    <h3 id="target">target属性</h3>
    说明打开链接后,弹出新页面的方式<br>
    <strong>默认</strong>
    <p class="code">
        &lt;a href=&quot;http://h5.xiongxianhe.com/&quot;&gt;点击进入h5.xiongxianhe.com&lt;/&gt;<br>
        <a href="http://h5.xiongxianhe.com/"target="">点击进入h5.xiongxianhe.com</a>
    </p>
    <strong>target_blank</strong>
    <p class="code">
        &lt;a href=&quot;http://h5.xiongxianhe.com/&quot;&gt;点击进入h5.xiongxianhe.com&lt;/&gt;<br>
        <a href="http://h5.xiongxianhe.com/"target="_blank">点击进入h5.xiongxianhe.com</a>
    </p>
    <strong>target_parent</strong>
    <p class="code">
        &lt;a href=&quot;http://h5.xiongxianhe.com/&quot;&gt;点击进入h5.xiongxianhe.com&lt;/&gt;<br>
        <a href="http://h5.xiongxianhe.com/"target="_parent">点击进入h5.xiongxianhe.com</a>
    </p>
    <strong>target_self</strong>
    <p class="code">
        &lt;a href=&quot;http://h5.xiongxianhe.com/&quot;&gt;点击进入h5.xiongxianhe.com&lt;/&gt;<br>
        <a href="http://h5.xiongxianhe.com/"target="_self">点击进入h5.xiongxianhe.com</a>
    </p>
    <strong>target_top</strong>
    <p class="code">
        &lt;a href=&quot;http://h5.xiongxianhe.com/&quot;&gt;点击进入h5.xiongxianhe.com&lt;/&gt;<br>
        <a href="http://h5.xiongxianhe.com/"target="_top">点击进入h5.xiongxianhe.com</a>
    </p>
    <p>
        <em>注</em> 请始终将正斜杠添加到子文件夹
    </p>
</div>
</body>
</html>