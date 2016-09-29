<?php
/*
 * user表相关的接口文件
 */

require_once 'dbbase.php';
//'../log.php';

/*
 * 根据uname判断用户是否存在
 * 如果存在，返回false
 * 如果不存在，返回true
 */
function IsExist($uname)
{
    $sqlSql = "select uid from user_liuyong where uname='$uname'";
    $result = mysql_query($sqlSql);
    $row = mysql_fetch_row($result);
    //var_dump($row);
    if($row[0]==0)
        return false;
    else
        return true;
}

/*
 * 用户注册
 * 注册成功返回true，否则返回false
 */
function ModeRegister($uname,$password)
{
    if(IsExist($uname))
    {
        return false;// 当用户存在时，不允许注册
    }else
    $password = md5($password);
    $strSql = "insert into user_liuyong(uid,uname,password) VALUES (0, '$uname','$password')";
    //echo $strSql;
    //echo $$strSqlstrSql;
    $result = mysql_query($strSql);
    if(!$result)
    {
        return false;
    }
    return $result;
}

/**
 * 重置密码
 */
function ModeResetPassword($email, $password)
{
    $password = md5($password);
    $strSql = "update user_liuyong set password='$password' where email='$email'";
    $result = mysql_query($strSql);
    if(!$result)
    {
        //eLog("$strSql " . mysql_error(), __FILE__, __LINE__);
        return false;
    }
    return true;
}

/*
 * 用户登录
 * 登录成功返回该用信息，否则返回false
 */
function ModeLogin($uname, $password)
{
    $password = md5($password);
    $strSql = sprintf("select uid, uname, password from user_liuyong where  uname='%s' and password='%s'", $uname, $password);

    $result = mysql_query($strSql);
    if(!$result)
    {
        echo"<script>alert('登录失败')</script>";
        return false;
    }
    $row = mysql_fetch_row($result);
    if(!$row)
        return false;
    $user=array();
    $user['uid']=$row[0];
    $user['uname']=$row[1];
    $user['password']=$row[2];
    return $user;
}

/**
 * 更新用户信息
 * 更新成功返回true，失败返回false
 */
function ModeUpdateUserInfo($uid, $uname)
{
    $strSqlFormat = "update user_liuyong set uname='%s' where uid=%s";
    $strSql = sprintf($strSqlFormat, $uname,$uid);
    $result = mysql_query($strSql);
    if(!$result)
    {
       // eLog($strSql . " " . mysql_error(), __FILE__, __LINE__);
        return false;
    }
    $num = mysql_affected_rows();
    if ($num == 0)
        return false;
        return true;
}


/**
 * 获取用户信息
 * @param $uid
 * @return array|bool
 */
function ModeGetOneUserInfo($uid)
{
    $stru="select uname, password,uid from user_liuyong where uid=$uid";
   /* echo $stru;*/
    $struu=mysql_query("$stru");
    $strr=mysql_fetch_row($struu);
    if(!$strr)
        return false;
    mysql_free_result($struu);
    $user=array();

    $user['uname']=$strr[0];
    $user['password']=$strr[1];
    $user['uid']=$strr[2];

    return $user;
}

//添加评论
function ModeAddAnser($replyuid, $replycontent)
{
    $strSql = sprintf("insert into liuyong_html(answerid, replyuid, replycontent, createtime) VALUES (0,  %s, '%s', now())",  $replyuid, $replycontent);
   // echo $strSql;
    // mysql_query: 执行成功时返回true，否则返回false
    $result = mysql_query($strSql);
    if(!$result)
    {
        echo"<script>alert('评论失败');location.href='../index.php'</script>";
    }
    return $result;
}

/**
 * 获取回答信息
 */
function ModeGetAnswerInfo()
{
    $strSql = "select a.answerid,a.replyuid,a.replycontent,a.createtime,b.uname from liuyong_html a,user_liuyong b where a.replyuid = b.uid";
    $result = mysql_query($strSql);
    if(!$result)
    {
       // eLog($strSql . " " . mysql_error(), __FILE__, __LINE__);
        return false;
    }
    $infos = array();
    $i = 0;
    while ($row = mysql_fetch_row($result))
    {
        $infos[$i]['answerid'] = $row[0];
        $infos[$i]['replyuid'] = $row[1];
        $infos[$i]['replycontent'] = $row[2];
        $infos[$i]['createtime'] = $row[3];
        $infos[$i]['uname'] = $row[4];
        $i++;
    }
    return $infos;
}
