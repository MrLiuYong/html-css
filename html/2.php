<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML属性</title>
    <link href="../css/main.css" rel="stylesheet">
    <style>
        .table {
            font-size: 20px;
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<p>熊老师是个非常好的老师!<br><sub>create time:2016-08-17 14:50:30</sub></p>
<div class="contain">
    <h1>HTML属性</h1>
    <p>属性是HTML元素提供的附加信息</p>
    <ol>
        <li>HTML元素可以设置属性</li>
        <li>属性可以在元素中添加附加信息</li>
        <li>属性一般描述于开始标签</li>
        <li>属性总是以名称/值对的形式(键值对)出现，如:name="value"</li>
    </ol>
    例：
  <p class="code">
    &lt;a href="http://www.uwenya.cc" name='Mr "Xiong"'&gt;点击进入问呀&lt;/a&gt;
  </p>
    <p>HTML属性常用引用属性值，属性值应该始终被包括在引号内容<br>使用小写属性</p>

    <h2 id="mostelement">大多数HTML元素的属性</h2>
    <table border="1px" cellspacing="0" title="大多数HTML元素的属性" style="border: dotted 1px red" class="table">
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>class</td>
            <td>为HTML元素定义一个或多个类名</td>
        </tr>
        <tr>
            <td>id</td>
            <td>定义元素的唯一id</td>
        </tr>
        <tr>
            <td>style</td>
            <td>规定元素的行内样式(inline style)</td>
        </tr>
        <tr>
            <td>title</td>
            <td>描述了元素的额外信息（作为工具条使用）</td>
        </tr>
    </table>
</div>
</body>
</html>