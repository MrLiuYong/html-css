<?php
session_start();
//if(!empty($_COOKIE['telphone']) && !empty($_COOKIE['password']))
//{
//    // 调用ModeLogin();
//    echo '<script>alert("您拥有免登陆权限");location.href="index.php";</script>';
//    return;
//}
if(!empty($_SESSION['telphone']))
{
    echo '<script>alert("您拥有免登陆权限");location.href="index.php";</script>';
    return;
}
?>

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
            <strong>登录</strong>
        </div>
        <div class="register-contain">
            <form action="process.php?cmd=login" method="post">
                <input id="telphone" type="text" name="uname" placeholder="uname" value="<?php echo empty($_COOKIE['uname'])?'':$_COOKIE['uname'];?>">
                <input id="password" type="password" name="password" placeholder="password">
                <input id="bntregistere" type="submit" name="submit" value="登录">
                <a class="forget-password" href="reset.php">忘记密码</a>
            </form>
            <div>
                <?php
                if(!empty($_GET['errno']))
                {
                    $errno=$_GET['errno'];
                    switch($errno)
                    {
                        case 1:
                            echo"请先输入用户名！";break;
                        case 2:
                            echo"请重新输入密码！";break;
                        case 3:
                            echo"用户名或密码错误！";break;
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