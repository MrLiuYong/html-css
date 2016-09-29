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
            padding: 5px 0px 5px 10px;
            background-color: #31b0d5;
        }
    </style>
    <meta http-equiv="set-cookie" content="xxh=1234">
    <!-- <meta http-equiv="refresh"  url="http://h5.xiongxianhe.com/" content="5">每隔5秒页面自动刷新一次-->
    <!--<base href="http://h5.xiongxianhe.com/">-->
</head>
<body>
<p >WEBHTML<br><sub>create time:2016-08-18 09:50:30</sub></p>
<div class="contain">
    <h1>HTML图像</h1>
    <h2>HTML图像</h2>
    <p>图像标签（&lt;img&gt;）和源属性（src）</p>
    <p>在HTML中，图像标签由&lt;img&gt;标签定义。<br>&lt;img&gt;是空标签，意思是说，它只包含属性，并且没有闭合标签</p>
    <p>要在页面上显示图像，你需要使用源属性(src)。源属性值是图像的URL地址。</p>
    <strong>语法</strong>
    <p class="code">
        &lt;img src="url" alt="说明"&gt;
    </p>
    <h2>HTML属性 - alt属性</h2>
    <p>alt属性用来为图像定义一串预备的可替代文本，替换文本属性的值是用户定义的。<br>在浏览器无法载入图像时，替换文本属性告诉读者，他们失去的信息，此时，浏览器将显示这个替代性的文本而不是图像</p>
    <strong>实例1 正常显示图片</strong>
    <p class="code">
        &lt;img src="20160816/icon.png"&gt;
    </p>
    <p>在浏览器中显示：</p>
    <img src="img/php.jpg">

    <p><strong>实例2 当图片加载失败时</strong></p>
    <p class="code">
        &lt;img src="_01_x2.png"&gt; &lt;!--_01_x2.png 图片不存在服务中--&gt;
    </p>
    <p>在浏览器中显示：</p>
   <!-- <img src="icon.png">-->
    <img src="_01_x2.png ">
    <p><strong>实例3 当图片加载失败，且有alt属性时</strong></p>
    <p class="code">
        &lt;img src="_01_x2.png" alt="图片找不到，请到问呀网" &gt; &lt;!--_01_x2.png 图片不存在服务中--&gt;
    </p>
    <p>在浏览器中显示：</p>
    <img src="_01_x2.png" alt="图片找不到，请到问呀网">

    <h2>HTML图像 - 设置图像的高度与宽度</h2>
    <p>height(高度)与width(宽度)属性用于设置图像的高度与宽度，属性值默认单位为像素</p>
    <p><strong>实例4 控制图片大小</strong></p>
    <p class="code">
        &lt;img src="_01_x.png" width="200px" height="100px"&gt;
    </p>
    <p>在浏览器中显示：</p>
    <img src="img/php.jpg" width="100px" height="200px">

    <p><strong>实例4 图片等比例缩放(防止图片变形)</strong></p>
    <p class="code">
        &lt;img src="_01_x.png" width="200px"&gt;
    </p>
    <p>在浏览器中显示：</p>
    <img src="img/php.jpg" width="100px">
    <div class="code" >
        <h3 id="page"> 今天是个好天气</h3>
         <p>
             <img src="img/php.jpg" width="100px">>今天带着老婆和崽去散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步，散步啊，散步。。。散了一整天，然后在路上看到了一个乞丐，然后我定睛一看：咦，这人怎么这么眼熟呢？<img src="icon.png" width="100px" style="padding:30px 0px 40px 800px;"/>，哦，原来是10年前的好基友。然后，就问：嗨，好基友，你怎么这样啦？基友抬头看了看我：哦，原来是你呀，当初我们分手的时候，我依然继续打多塔，一直打，拼命的打，然后就成这样了，哎，当初就应该听你的话，和你一起跟着熊老师学PHP，也许就会像你这样出任CEO，迎娶白富美了，哎......。<br>然后，我眨了眨眼，跟他说：听说，熊老师还是个教书匠，现在他的名声可大了，你赶紧的去找他 ....<br>话还没说完，那人就不见了.....
         </p>
    </div>
    <h2 style="border: dotted 1px #000000"></h2>
    <p><strong>实例6 文字与图片对齐 - 底部对齐(默认)</strong></p>
    <p class="code">
        &lt;img src="icon.png" width="100" align="middle"&gt;<br><br>
        天真是愉<img src="img/php.jpg" width="100px">快的一天
    </p>

    <p><strong>实例7 文字与图片对齐 - 居中对齐</strong></p>
    <p class="code">
        &lt;img src="icon.png" width="100" align="middle"&gt;<br><br>
        天真是愉<img src="img/php.jpg" width="100px" align="middle">快的一天
    </p>

    <p><strong>实例8 文字与图片对齐 - 顶部对齐</strong></p>
    <p class="code">
        &lt;img src="icon.png" width="100" align="top"&gt;<br><br>
        天真是愉<img src="img/php.jpg" width="100px" align="top">快的一天
    </p>

    <p><strong>实例9 图片链接</strong></p>
    <p class="code">
        &lt;a href="#page"&gt;&lt;img src="icon.png" width="100" align="top"&gt;&lt;/a&gt;<br><br>
        天真是愉<a href="#page"><img src="img/php.jpg" width="100px" align="top"></a>快的一天
    </p>

</div>
</body>
</html>