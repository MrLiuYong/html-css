<?php
/**
 * 处理逻辑
 */
session_start();

require_once 'db/userdb.php';
/*require_once 'db/answerdb.php';*/


/**
 * 用户注册
 */
function Register()
{
    if(empty($_POST['uname']))
    {
        header('location:register.php?errno=1');
        exit();
    }
    if(empty($_POST['password']))
    {
    header("location: register.php?errno=2");
    exit();
    }
    $uname=$_POST['uname'];
    ///echo $uname;
    $password1 = $_POST['password'];
   // echo $password1;
    $password2 = "";
  !empty($_POST['passwordsec']) && $password2 = $_POST['passwordsec'];
    if($password1 != $password2)
    {
        setcookie("uname", $_POST['uname']);
        header("location: register.php?errno=3");
        exit();
    }
    if(IsExist($uname))
    {
       header("location: register.php?errno=4");
        exit();
    }
    $ret = ModeRegister($uname,$password1);
    if(!$ret)
    {
        setcookie('uname',$_POST['uname']);
        header("location: register.php?errno=5");
        exit();
    }
    echo "<script>alert('注册成功,请登录!');location.href='login.php';</script>";
}
/**
 * 重置密码
 */
function ResetPassword()
{

    if(empty($_POST['password']))
    {
        header('location: reset.php?errno=1');
        exit();
    }
    if(empty($_POST['passwordsec']))
    {
        header('location: reset.php?errno=1');
        exit();
    }

    $password1 = $_POST['password'];
    $password2 = $_POST['passwordsec'];
    if($password1 != $password2)
    {
        header('location: reset.php?errno=2');
        exit();
    }
    ModeResetPassword($email, $password1);
    echo '<script>alert("密码重置成功，请登录");location.href="login.php"</script>';
}

/**
 * 用户登录
 */
function Login()
{
    if(empty($_POST['uname']))
    {
        header("location:login.php?errno=1");
    }
    if(empty($_POST['password']))
    {
        setcookie('email',$_POST['email']);
        header("location:login.php?errno=2");
        exit();
    }
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $user=ModeLogin($uname, $password);
   if(!$user)
    {
        setcookie('$uname',$_POST['$uname']);
        header("location:login.php?errno=3");
        exit();
    }
    $_SESSION['uname']=$user['uname'];
    $_SESSION['uid'] = $user['uid'];
    echo "<script>alert('登录成功');location.href='index.php';</script>";
}

/**
 * 用户退出
 */
function Quit()
{
    if(empty($_SESSION['uid']))
    {
        header("location: index.php");
        return;
    }
    session_destroy();
    setcookie(session_name(),'', time()-1);
    unset($_SESSION);
    header("location: index.php");
}

/**
 * 回答问题
 */
function Answer()
{
    if(empty($_SESSION['uid']))
    {
        echo '<script>alert("请先登录，再评论");location.href="login.php";</script>';
        return ;
    }
    if(empty($_POST['replycontent']))
    {
        echo"<script>alert('您提交的内容格式有误!');location.href='index.php'</script>";
        return;
    }
    $replyuid = $_SESSION['uid'];
    //echo $replyuid;
   $replycontent = $_POST['replycontent'];
    ModeAddAnser( $replyuid, $replycontent);
    header("location:index.php");
}




/**
 * 入口
 */
function main()
{
    if(empty($_GET['cmd']))
    {
        header('location: index.php');
        exit();
    }
    $fun = $_GET['cmd'];
    if(function_exists($fun))
    {
        $fun();
    }
    else
    {
        header('location: index.php');
        exit();
    }
}
main();