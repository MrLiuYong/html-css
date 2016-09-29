<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML 段落</title>
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<p>熊老师是个非常好的老师!<br><sub>create time:2016-08-17 14:50:30</sub></p>

<div class="contain">
    <h1 id="htmlparagraph">HTML 段落</h1>
    <p>段落通过&lt;p&gt;标签来定义的</p>
    <div class="code">
        &lt;p&gt;熊老师说，这是一个段落&lt;/p&gt;
    </div>
    <p><b>注</b> 浏览器会自动地在段落前后添加空行</p>
    <p>当显示页面时，浏览器会移除源代码中多余的空格和空行，所有连续的空格或空行都会被算作一个空格。如：</p>
    <p class="code">
        致&nbsp;&nbsp;橡树
        --舒婷
        我如果爱你，
        绝不像那攀缘的凌霄花，
        借你的高枝，炫耀自己。

        我如果爱你，
        ...
    </p>
<pre class="code">
        致橡树
          --舒婷
    我如果爱你，
    绝不像那攀缘的凌霄花，
    借你的高枝，炫耀自己。

    我如果爱你，
    ...
</pre>
</div>
</body>
</html>