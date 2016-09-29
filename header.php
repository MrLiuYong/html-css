<?php

$myinfo = '<button id="login" onclick="javascirpt:location.href=\'login.php\';">登录</button>
            <button id="register" onclick="javascirpt:location.href=\'register.php\';">注册';
if(!empty($_SESSION['uid']))
{
    require_once 'db/userdb.php';
    $userinfo = ModeGetOneUserInfo($_SESSION['uid']);
    $nm = empty($userinfo['uname']) ? $userinfo['telephone'] : $userinfo['uname'];
    $myinfoformat = ' <div class="my-icon"></div>
            <div class="my-uname">%s</div><div class="my-quit"><a href="process.php?cmd=quit">退出</a></div> ';
    $myinfo = sprintf($myinfoformat, $userinfo['uname'],$nm);
}
?>

<div class="nav">
    <div class="nav-contain">
        <div class="logo">
            <a href="index.php"><img src="img/php.jpg"  style="width: 60px;" ></a>
        </div>
        <div class="serach">
            <h5>HTML~CSS~JavaScript</h5>
        </div>
        <div class="opertor">
            <?php echo $myinfo; ?>
        </div>
    </div>
</div>