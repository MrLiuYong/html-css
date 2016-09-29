<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML头部</title>
    <link type="text/css" href="../css/main.css" rel="stylesheet">
    <meta name="keywords"  content="html5,php">
    <meta name="description"  content="php深圳">
   <!-- <meta http-equiv="refresh"  url="http://h5.xiongxianhe.com/" content="5">每隔5秒页面自动刷新一次-->
    <!--<base href="http://h5.xiongxianhe.com/">-->
    <!--<script>
        alert('welcome ~!')
    </script>  script脚本语言可以放在任何位置-->

</head>
<body>
<p>熊老师是个非常好的老师!<br><sub>create time:2016-08-17 14:50:30</sub></p>
<div class="nav">
</div>
     <div class="contain">
         <h1>HTML&lt;head&gt;元素</h1>
         <p>&lt;head&gt;元素包含了所有的头部元素。在&lt;head&gt;元素中,你可以插入脚本(scripts)，样式文件（css）以及各种meta信息</p>
         <p>可以添加在头部区域的元素标签有：<br> &lt;title&gt;&lt;style&gt;&lt;meta&gt;&lt;link&gt;&lt;script&gt;&lt;base&gt;&lt;noscript&gt;</p>
         <h2>HTML&lt;Title&gt;元素</h2>
         <p>
             &lt;Title&gt;标签定义了不同文档的标题<br>
             &lt;Title&gt;在html。xhtml文档中是必须的
         </p>
         &lt;Title&gt;元素；
         <ul>
             <li>定义了浏览器工具栏的标题</li>
             <li>当网页添加到收藏夹时，显示在收藏夹的标题</li>
             <li>显示在搜索引擎结果页面的标题</li>
         </ul>
         <h1>HTML&lt;base&gt;元素</h1>
         <p>
             &lt;base&gt;标签描述了基本的链接地址目标.该标签作为HTML文档中所有链接标签的默认链接
         </p>
         比如:<br>
         <a href="http://h5.xiongxianhe.com/">进入首页</a>

         <h2>HTML&lt;link&gt;元素</h2>
         <p>
             &lt;link&gt;标签定义了文档与外部资源之间的关系<br>
             &lt;link&gt;标签通常用于链接到样式表
         </p>
         <h2>HTML&lt;style&gt;元素</h2>
         <p>
             &lt;style&gt;标签定义了HTML文档的样式文件引用地址<br>
             &lt;style&gt;元素中，你需要指定样式文件来渲染HTML文档
         </p>
         <h2>HTML&lt;meta&gt;元素</h2>
         <p>
             &lt;meta&gt;标签描述了一些基本的元数据<br>
             &lt;meta&gt;标签提供了元数据，元数据也不显示在页面上,但会被浏览器解析<br>
             &lt;meta&gt;元素通常用于指定网页的描述，关键词，文件的最后修改时间，作者和其他元数据。<br>
             &lt;meta&gt;元数据可以使用于浏览器（如果显示内容或重新加载页面），搜索引擎(关键词)或其他web服务
         </p>
         <h2>为搜索引擎定义关键词</h2>
         <p class="code">
             &lt;meta name=&quot;keywords&quot; content=&quot;html5,php&quot;&gt;
         </p>
         <h2>为网页定义描述词</h2>
         <p class="code">
             &lt;meta name=&quot;description&quot; content=&quot;学习php&quot;&gt;
         </p>
         <h2>定义网页作者</h2>
         <p class="code">
             &lt;meta name=&quot;author&quot; content=&quot;php深圳&quot;&gt;
         </p>
         <h2>刷新当前页面</h2>
         <p class="code">
             &lt;meta http-equiv=&quot;refresh&quot; content=&quot;5&quot;&gt;
         </p>
         <h2>HTML&lt;script&gt;</h2>
         <p class="code">
             &lt;script&gt;alert(welcome~!) &lt;/script&gt;
         </p>
     </div>
</body>
</html>