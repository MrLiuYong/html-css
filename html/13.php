<!DOCTYPE html><!-- 声明: 文件类型和版本 -->
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- 编码声明 如果是中文网站，需要此声明，否则可能会出现乱码 -->
    <title>HTML区块</title>
    <link href="../css/main.css" rel="stylesheet">
   <style>
       #example li{
         border: solid 1px cyan;
           padding: 20px 20px 20px 20px;<!--内边距-->
           margin-left: 20px;<!--外边距-->
       }
   </style>
</head>

<body>
熊老师是个非常好的老师!<br><sub>create time:2016/8/22 9:43</sub>
  <div class="contain">
      <h1>HTML区块</h1>
   <!--   <ul>
          <li><a href="#kuaiji">块级元素</a></li>
          <li><a href="#neilian">HTML内联元素</a></li>
          <li><a href="#div">HTMLdiv元素</a></li>
      </ul>-->

       <p>大多数HTML元素被定义为<b>块级元素</b>和<b>内联元素(行内)</b><br>
       </p>
            <h3 id="kuaiji">块级元素</h3>
          块级元素在浏览显示时,通常会以新行开始(结束)<br>
           如：&lt;h1,p,ul,table,div&gt;
        <h3 id="neilian">HTML内联元素</h3>
        <p>内联元素在显示时通常不会以新行开始,<br>
            如&lt;b&gt;&lt;td&gt;&lt;a&gt;&lt;img&gt;&lt;i&gt;
        </p>
         <h3 id="div">HTML&lt;div元素&gt;</h3>
         <p style=" color: #ffffff">HTML&lt;div&gt;元素是块级元素,它可用于组合其他HTML元素的容器<br>
             &lt;div&gt;元素没有特定的定义,除此之外，由于它属于块级元素，浏览器会在其前后显示换行。<br>
             &lt;div&gt;元素的另一个常见的用途是文档布局，它取代了使用表格定义布局的老式方法。<br>
             <i>&lt;table&gt;元素的作用是显示表格化的数据</i>
         </p>

      <h3>实例-行块级元素相互转化</h3>
       <pre class="code" style="overflow: scroll">
       <?php
       $html='<strong style="display: block">实例-行块级元素相互转化</strong><!--行级元素转化为块级元素-->
          <div style="border: solid  #206A9B; display: inline-block">div1</div>
          <div style="border: solid 3px #206A9B;display: inline-block">div2</div>';
        echo htmlspecialchars($html);
       ?>
           </pre>

          <strong><div>实例</div></strong><!--块级元素转化为行级元素(加块级元素标签)-->
          <div style="border: solid  #206A9B; display: inline-block">div1</div>
          <div style="border: solid 3px #206A9B;display: inline-block">div2</div>

       <h3>实例:使用&lt;ul&gt;制作导航栏</h3>
      <ol id="example" style="list-style: none;">
          <li style="display: inline-block">首页</li><li style="display: inline-block">HTML</li><li style="display: inline-block">CSS</li><li style="display: inline-block">JavaScript</li><li style="display: inline-block">PHP</li>
      </ol>


       <h3>HTML&lt;span&gt;</h3>
      <p>
          HTML&lt;span&gt;是内联元素,可用作文本的容器。<br>&lt;span&gt;也没有特定的含义
      </p>
  </div>
  </body>
</html>