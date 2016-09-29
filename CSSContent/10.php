<!DOCTYPE html>
<html>
<head>
    <title>CSS轮廓</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        input {
            border-style: none;
            border-bottom: solid 1px green;
            outline: none;
        }
        .ex {
            outline: dashed 5px red;
            border-left:solid 1px red ;
            padding-left: 30px;
            border-top:solid 2px yellow ;
            border-right:solid 3px green;
            border-bottom:solid 4px blue;

        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 15:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS轮廓</h1>
    <p>轮廓(outline)是绘制于元素周围的一条线，位于边框边缘的外围，可起到突出元素的作用。</p>
    <h2>CSS边框属性</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>outline</td>
            <td>在一个声明中设置所有轮廓的属性</td>
        </tr>
        <tr>
            <td>outline-color</td>
            <td>外边框颜色</td>
        </tr>
        <tr>
            <td>outline-style</td>
            <td>外边框样式</td>
        </tr>
        <tr>
            <td>outline-width</td>
            <td>外边框宽度</td>
        </tr>
    </table>

    <strong>例：</strong><br>
    <input type="text"><br>
    <p class="ex" >好好学习，天天向上</p>
</div>
<?php require_once 'foot.php';?>
</body>
</html>