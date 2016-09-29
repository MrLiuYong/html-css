<?php
session_start();
/*echo '<pre>';
print_r($_SESSION);
print_r($_COOKIE);
echo '</pre>';*/
global $uname;
$uname=$_SESSION['uname'];
if(empty($_SESSION['uname']))
{
    echo"<script>alert(\"欢迎\".$uname.\"首次进入网站\")</script>";
    //echo "欢迎".$uname."首次进入网站";
      //$_SESSION['username'] = 'xxh';
    $_SESSION['pv'] = 1;
    return;
}
else
{
    echo "欢迎" . $_SESSION['uname'] . '第'.   $_SESSION['pv'] . '次进入网站<br>';
    $_SESSION['pv'] = $_SESSION['pv'] + 1;
}
//session_destroy();