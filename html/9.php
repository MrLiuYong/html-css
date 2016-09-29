<!DOCTYPE html><!-- 声明: 文件类型和版本 -->
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- 编码声明 如果是中文网站，需要此声明，否则可能会出现乱码 -->
    <title>HTML简介</title>
    <style>
        h1{
            text-align: center;
            border: 1px solid #e6e6e6;
            padding: 5px 0px 5px 10px;
            background-color: #B6B3AF;
        }
    </style>
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
熊老师是个非常好的老师!<br><sub>create time:2016-08-17 11:50:30</sub>
<div class="contain">
    <h1>HTML CSS</h1>
    <p>
        CSS(Cascading Style Sheets)用于渲染HTML元素，标签的样式
    </p>
    <h2>如何使用CSS</h2>
    <p>CSS可以通过以下方式添加到HTML中：</p>
    <ul>
        <li><strong>内联样式：</strong>在HTML元素中使用<q>style</q>属性</li>
        <li><strong>内部样式表：</strong>在HTML文档头部&lt;head&gt;区域，使用&lt;style&gt;元素来包含CSS</li>
        <li><strong>外部引用：</strong>使用外部CSS文件</li>
    </ul>
    <p><strong>最好的方式是通过外部引用CSS文件</strong></p>
    <h3>内联样式</h3>
    <p>当特殊的样式需要应用到个别元素时，就可以使用内联样式。如：</p>
    <p class="code" style="color: red; text-align: center">
        &lt;p style="color: red"&gt;
        这是一段红色字体
        &lt;/p&gt;
    </p>

    <h3>内部样式</h3>
    <pre class="code">
        &lt;style type="text/css"&gt;
            h3 {
                background-color: #4cae4c;
                color: #ffffff;
            }
        &lt;/style&gt;
    </pre>

    <h3>外部样式表</h3>
    <p class="code">
        &lt;link type="text/css" href="css/main.css" rel="stylesheet"&gt;
    </p>
</div>
</body>
</html>