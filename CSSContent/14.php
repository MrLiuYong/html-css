<!DOCTYPE html>
<html>
<head>
    <title>CSS外边距</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS margin外边距</h1>
    <p>围绕在元素边框的空白域是外边距。设置外边距会在元素外创建额外的“空白”。</p>
    <h2>CSS margin属性</h2>
    <p>margin属性接受任何长度单位，可以是像素、英寸、毫米或em<br>百分数是相对父元素的width计算的。</p>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>margin</td>
            <td>简写</td>
        </tr>
        <tr>
            <td>margin-*<br>bottom<br>left<br>top<br>right</td>
            <td>设置元素的下、左、上、右外边距</td>
        </tr>
    </table>
</div>
<?php require_once 'foot.php';?>
</body>
</html>