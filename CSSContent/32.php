<!DOCTYPE html>
<html>
<head>
    <title>CSS3 文本效果</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        div.card {
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        div.header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 40px;
        }

        div.container {
            padding: 10px;
        }
    </style>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-30 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS3 文本效果</h1>

    <p>box-shadow 属性用来可以创建纸质样式卡片:</p>

    <div class="card">
        <div class="header">
            <h1>1</h1>
        </div>

        <div class="container">
            <p>January 1, 2016</p>
        </div>
    </div>
    
</div>
<?php require_once 'foot.php';?>
</body>
</html>