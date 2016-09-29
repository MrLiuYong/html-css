<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JavaScript~HTML~CSS</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/answer.css" rel="stylesheet">
    <link href="css/myquestion.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
</head>
<body>
<?php require_once 'header.php';?>
<div class="main-content">
    <div class="left-content">
        <div class="title">
            <strong>注册</strong>
        </div>
        <div class="register-contain">
            <form action="process.php?cmd=register" method="post">
                <input id="password" type="text" name="uname" placeholder="uname" value="<?php echo empty($_COOKIE['uname'])?'':$_COOKIE['uname'];?>">
                <input id="password" type="password" name="password" placeholder="password">
                <input id="passwordsec" type="password" name="passwordsec" placeholder="second password">
                <input id="bntregistere" type="submit" name="submit" value="注册">
            </form>
            <div class="errormsg">
                <?php
                if(!empty($_GET['errno']))
                {
                    $errno = $_GET['errno'];
                    switch ($errno)
                    {
                        case 1: echo '*用户名不能为空';break;
                        case 2: echo '*密码不能为空';break;
                        case 3: echo '* 两次密码不一致';break;
                        case 4: echo '* 该用户名已经被注册';break;
                        case 5: echo '* 服务器繁忙，请稍后再试';break;
                    }
                }
                ?>
            </div>
        </div>

    </div>
    <div class="right-nav">
    <?php require_once 'rightnav.php';?>
        </div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>