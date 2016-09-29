<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>META元素</title>
    <link type="text/css" href="../css/main.css" rel="stylesheet">
    <meta name="keywords"  content="html5,php">
    <meta name="author"  content="php深圳">
    <meta name="description"  content="学习php">
    <meta name="format-detection" content="telphone=no">
    <meta content="email=no" name="format-detection">

    <style>
        h1{
            text-align: center;
            border: 1px solid #e6e6e6;
            padding: 5px 5px 5px 10px;
            background-color: #31b0d5;
        }
    </style>
    <meta http-equiv="set-cookie" content="xxh=1234">
    <!-- <meta http-equiv="refresh"  url="http://h5.xiongxianhe.com/" content="5">每隔5秒页面自动刷新一次-->
    <!--<base href="http://h5.xiongxianhe.com/">-->
</head>
<body>
     <div class="contain">
         <h1>HTML表格</h1>
           <h3>HTML表格标签</h3>
           <table>
               <tr>
                   <th>标签</th>
                   <th>描述</th>
               </tr>
               <tr>
                   <td ><a href="#table">&lt;table&gt;</a></td>
                   <td>定义表格</td>
               </tr>
               <tr>
                   <td><a href="#th">&lt;th&gt;</a></td>
                   <td>定义表格的表头</td>
               </tr>
               <tr>
                   <td ><a href="#th">&lt;td&gt;</a></td>
                   <td>定义表格单元</td>
               </tr>
               <tr>
                   <td ><a href="#caption">&lt;caption&gt;</a></td>
                   <td>定义表格的标题</td>
               </tr>
               <tr>
                   <td ><a href="#colgroup">&lt;colgroup&gt;</a></td>
                   <td>定义表格列的组</td>
               </tr>
               <tr>
                   <td ><a href="#col">&lt;col&gt;</a></td>
                   <td>定义用于表格列的属性</td>
               </tr>
               <tr>
                   <td ><a href="#thead">&lt;thead&gt;</a></td>
                   <td>定义表格页眉</td>
               </tr>
               <tr>
                   <td ><a href="#tbody">&lt;tbody&gt;</a></td>
                   <td>定义表格的主体</td>
               </tr>
               <tr>
                   <td ><a href="#tfoot">&lt;tfoot&gt;</a></td>
                   <td>定义表格的页脚</td>
               </tr>
           </table>
            <h3>实例1-th</h3>
         <strong>水平表头</strong>
         <table id="table">
             <tr>
                 <th id="th">姓名</th>
                 <th>年龄</th>
                 <th>成绩</th>
             </tr>
             <tr>
                 <td id="td">小明</td>
                 <td>28</td>
                 <td>82</td>
             </tr>
             <tr>
                 <td>小花</td>
                 <td>16</td>
                 <td>80</td>
             </tr>
         </table>
         <strong>垂直表头</strong>
         <table>
             <tr>
                 <th>姓名</th>
                 <td>小明</td>
                 <td>小花</td>
             </tr>
             <tr>
                 <th>年龄</th>
                 <td>20</td>
                 <td>20</td>
             </tr>
             <tr>
                 <th>成绩</th>
                 <td>80</td>
                 <td>80</td>
             </tr>
         </table>
         <h3 id="caption">带有标题-caption</h3>
         <table>
             <caption>宝宝支持者调查</caption>


         </table>
         <h3 >跨行或跨列</h3>
         <strong id="col">跨列</strong>
         <table>
             <tr>
                 <th colspan="2">参赛</th>
                 <th colspan="3">奖牌数</th>
             </tr>
             <tr>
                 <td>项目</td>
                 <td>姓名</td>
                 <td>金牌</td>
                 <td>银牌</td>
                 <td>铜牌</td>
             </tr>
             <tr>
                 <td>游泳</td>
                 <td>赖德特</td>
                 <td>1</td>
                 <td>1</td>
                 <td>1</td>
             </tr>
             <tr>
                 <td>田径</td>
                 <td>博尔特</td>
                 <td>1</td>
                 <td>1</td>
                 <td>1</td>
             </tr>
         </table>
         <strong>跨行</strong>
         <table >
             <tr>
                 <th rowspan="2">参赛</th>
                 <td>项目</td>
                 <td>游泳</td>
                 <td>田径</td>
             </tr>
               <tr>

                   <td>姓名</td>
                   <td>赖德杰</td>
                   <td>博尔特</td>
               </tr>
             <tr>
                 <th rowspan="3">奖牌数</th>
                 <td>金牌</td>
                 <td>1</td>
                 <td>1</td>
             </tr>
             <tr>
                 <td>银牌</td>
                 <td>3</td>
                 <td>3</td>
             </tr>
             <tr>
                 <td>铜牌</td>
                 <td>6</td>
                 <td>6</td>
             </tr>
         </table>


         <table>
             <caption id="#caption">我是标题(caption)</caption>
             <colgroup>
                 <col span="1" style="background-color: #245269">
             </colgroup>
             <thead>
             <tr>
                 <td id="#thead">页眉</td>
                 <td>页眉第一行第一列</td>
                 <td>页眉第一行第二列</td>
                 <td>页眉第一行第三列</td>
             </tr>
             <tr>
                 <td>页眉</td>
                 <td>页眉第二行第一列</td>
                 <td>页眉第二行第二列</td>
                 <td>页眉第二行第三列</td>
             </tr>
             <tr>
                 <td>页眉</td>
                 <td>页眉第三行第一列</td>
                 <td>页眉第三行第二列</td>
                 <td>页眉第三行第三列</td>
             </tr>
             <tr>
                 <td>表头</td>
                 <td>表头1</td>
                 <td>表头2</td>
                 <td>表头3</td>
             </tr>
             <tr>
                 <td id="tbody">内容</td>
                 <td>内容1</td>
                 <td>内容2</td>
                 <td>内容3</td>
             </tr>
             <tr>
                 <td id="tfoot">页脚</td>
                 <td>页脚第一行第一列</td>
                 <td>页脚第一行第二列</td>
                 <td>页脚第一行第三列</td>
             </tr>
             </thead>
         </table>
     </div>
</body>
</html>