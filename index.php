<?php


session_start();

require_once'visitNum.php';
require_once'db/userdb.php';


// 记录访客信息
$clientIP = $_SERVER['REMOTE_ADDR'];
ModeAddVisitRecord( $_SESSION['uid'], $clientIP);
//访问量
$visitnum=ModeVisitNum($_SESSION['uid']);


$replyHtmlFormat = '<div class="answer-contain">
                <div class="answerer-info">
                    <div class="answerer-name"> %s</div>
                    <div class="anserer-attr">我来写上两笔</div>
                </div>
                <div class="answer-content">
                    <pre>%s</pre>
                </div>
                <div class="answer-attr">
                    <div class="edit-time">编辑于 %s</div>
                </div>
            </div>
';
$replyinfos = ModeGetAnswerInfo();
$replyHtml = "";
for($i=0; $i < count($replyinfos); $i++)
{
    $uname=$replyinfos[$i]['uname'];
    $replycontent=$replyinfos[$i]['replycontent'];
    $createtime=$replyinfos[$i]['createtime'];

   $tmp = sprintf(
        $replyHtmlFormat,
        $uname,
        $replycontent,
        $createtime
    );
    $replyHtml.=$tmp;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB~HTML~CSS</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/answer.css" rel="stylesheet">
    <script charset="utf-8" src="kindeditor-4.1.7/kindeditor-min.js"></script>
    <script charset="utf-8" src="kindeditor-4.1.7/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[id="replaycontent"]', {
                resizeType : 1,
                allowPreviewEmoticons : true,
                allowImageUpload : true,
                items : [
                    'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                    'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                    'insertunorderedlist', '|', 'emoticons', 'image', 'link']
            });
        });
    </script>
</head>
<body>
<?php
    require_once"header.php";
    $type=$_GET['type'];
   echo $type;
    switch($type)
  {
      case 1:
          $titletype='CSS';
          $html='<iframe height="600px" width="750px" name="left" frameborder="0" src="CSSContent/1.php"></iframe>';
          break;
      case 2:
          $titletype="HTML";
          $html='<iframe  height="600px" width="750px" name="left" frameborder="0" src="html/1.php"></iframe>';
          break;
      case 3:
          $titletype="Javascript";
          $html='<iframe  height="600px" width="750px" name="left" frameborder="0" src="javascript/1.php"></iframe>';
          break;
      default:
          $titletype="HTML";
          $html='<iframe  height="600px" width="750px" name="left" frameborder="0" src="html/1.php"></iframe>';
          break;
  }
    $htmlFormat=sprintf($html);

   /*if($type==1)
   {
       $html='
           <iframe  height="600px" width="750px" name="left" frameborder="0" src="CSSContent/1.php"></iframe>
       ';
       $htmlFormat=sprintf($html);
   }else
   {
      $html='
           <iframe  height="600px" width="750px" name="left" frameborder="0" src="html/1.php"></iframe>
       ';
       $htmlFormat=sprintf($html);
   }*/
?>
<div class="main-content">
    <div class="left-content">
        <div class="title">
            <strong><?php echo $titletype;?>简介</strong>
        </div>
        <div class="main-body">
            <?php
                echo $htmlFormat;
            ?>
<!--            <iframe  height="600px" width="750px" name="left" frameborder="0" src="html/1.php"></iframe>
-->          <div class="line">
              <hr style="border:  solid 2px">
              </div>
            <h3>评论</h3>
            <!--评论区-->
          <?php echo $replyHtml;?>
            <!-- 回答区 -->
          <div class="replay-contain">
                <form action="process.php?cmd=answer" method="post">
                    <textarea id='replaycontent' name="replycontent" rows="10"></textarea>
                    <input id='replay' type="submit" name="submit">
                </form>
            </div>
        </div>
         <div class="other">
            <h2> 总访问量:<?php echo $visitnum;?></h2>
         </div>
         <div class="left-nav">
             <div class="left-div1">
                  <ul>
                      <li>
                          <h1>CSS</h1>
                          <div class="left-div2">
                             <?php require_once'leftnav.php';?>
                          </div>
                      </li>
                  </ul>
             </div>
             <div class="left-div3">
                 <ul>
                     <li>
                         <h1>JavaScript</h1>
                         <div class="left-div4">
                             <?php require_once'leftnavJS.php';?>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
    </div>
    <div class="right-nav">
       <div class="menu">
            <?php require_once'rightnav.php';?>
        </div>
    </div>
</div>
<div class="footer"></div>
</body>
</html>