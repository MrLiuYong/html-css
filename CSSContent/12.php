<!DOCTYPE html>
<html>
<head>
    <title>CSS边框</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 16:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
<h1>CSS边框</h1>
    <p>CSS边框属性允许你指定一个元素边框的样式和颜色。</p>
    <h2>CSS边框属性</h2>
    <table>
        <tr>
            <th>属性</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>border</td>
            <td>简写</td>
        </tr>
        <tr>
            <td>border-style</td>
            <td>设置边框的样式</td>
        </tr>
        <tr>
            <td>border-width</td>
            <td>简写，设置边框的宽度</td>
        </tr>
        <tr>
            <td>border-color</td>
            <td>简写，设置边框的颜色</td>
        </tr>
        <tr>
            <td>boder-bottom</td>
            <td>简写，设置下边框的属性</td>
        </tr>
        <tr>
            <td>border-bottom-color</td>
            <td>设置下边框的颜色</td>
        </tr>
        <tr>
            <td>border-bottom-style</td>
            <td>设置下边框的样式</td>
        </tr>
        <tr>
            <td>border-bottom-width</td>
            <td>设置下边框的宽度</td>
        </tr>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
    </table>
    <p><strong>注：</strong>边框其他三边的样式属性与border-bottom-*一致，此就不一一列举。</p>

    <h2>边框样式</h2>
    <p>边框样式指定要显示什么样的边界。</p>
    <table>
        <tr>
            <th>值</th>
            <th>属性</th>
        </tr>
        <tr>
            <td>dotted</td>
            <td>定义一个点线框</td>
        </tr>
        <tr>
            <td>dashed</td>
            <td>定义一个虚线框</td>
        </tr>
        <tr>
            <td>solid</td>
            <td>定义实线边界</td>
        </tr>
        <tr>
            <td>double</td>
            <td>定义两个边界，两边界的宽度和border-width相同</td>
        </tr>
        <tr>
            <td>groove</td>
            <td>定义3D沟槽边界，效果取决于边界的颜色值</td>
        </tr>
        <tr>
            <td>ridge</td>
            <td>定义3D脊边界，效果取决于边界的颜色值</td>
        </tr>
        <tr>
            <td>inset</td>
            <td>定义一个3D嵌入框，效果取决于边界的颜色值</td>
        </tr>
        <tr>
            <td>outset</td>
            <td>定义一个3D突出边框，效果取决于边界的颜色值</td>
        </tr>
    </table>
    <h3>border: dotted 5px green</h3>
    <p style="border: dotted 5px green">测试使用</p>
    <h3>border: dashed 5px green</h3>
    <p style="border: dashed 5px green">测试使用</p>
    <h3>border: double 10px green</h3>
    <p style="border: double 10px green">测试使用</p>
    <h3>border: groove 5px gray</h3>
    <p style="border: groove 20px gray">测试使用</p>
    <p style="border-bottom: groove 20px gray">测试使用</p>
    <h3>border: ridge 20px gray</h3>
    <p style="border: ridge 20px gray">测试使用</p>
    <h3>border: inset 20px gray</h3>
    <p style="border: inset 20px gray">测试使用</p>
    <h3>border: outset 20px gray</h3>
    <p style="border: outset 20px gray">测试使用</p>

    <input type="text" style="height: 50px;border-width: 20px;">

    <h2>边框指定不同的侧面</h2>
    <ul>
        <li>
            <strong>border-style: dotted solid double dashed</strong>
            <ul>
                <li>上边框是 dotted</li>
                <li>右边框是 solid</li>
                <li>底边框是 double</li>
                <li>左边框是 dashed</li>
            </ul>
        </li>
        <li>
            <strong>border-style: dotted solid double</strong>
            <ul>
                <li>上边框是 dotted</li>
                <li>右边框是 solid</li>
                <li>底边框是 double</li>
                <li>左边框是 solid</li>
            </ul>
        </li>
        <li>
            <strong>border-style: dotted solid</strong>
            <ul>
                <li>上边框是 dotted</li>
                <li>右边框是 solid</li>
                <li>底边框是 dotted</li>
                <li>左边框是 solid</li>
            </ul>
        </li>
        <li>
            <strong>border-style: dotted</strong>
            <ul>
                <li>上边框是 dotted</li>
                <li>右边框是 dotted</li>
                <li>底边框是 dotted</li>
                <li>左边框是 dotted</li>
            </ul>
        </li>
    </ul>
</div>
<?php require_once 'foot.php';?>
</body>
</html>