<?php
/**
 * 数据库连接
 */

/*if(!defined('IS_ACCESS'))
    die("非法访问");*/

//require_once '../log.php';
error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';

$dbDatabase = 'phpexam_liuyong';

$con = mysql_connect($dbhost, $dbuser, $dbpassword) or die("数据库连接失败");
mysql_select_db($dbDatabase);

mysql_query("set names utf8");
