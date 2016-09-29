<html>
  <head>
      <title>HTML框架</title>
      <meta charset="utf-8" >
      <meta name="keywords" content="html,css,javascript" >
      <link href="../css/main.css" rel="stylesheet" type="text/css">
      <style>
           body{
            padding-top: 8% ;
           }
      </style>
  </head>
<body>
      <div class="contain">
          <h1>HTML框架</h1>
             <h3>&lt;iframe(一个页面包含另外一个页面)&gt;</h3>
             <strong>语法</strong>
            <pre class="code">
                &lt;iframe width="%100" src="url"&gt;&lt;/iframe&gt;
            </pre>
           <strong>实例</strong>
            <pre class="code">
                &lt;iframe&gt;
                      width=&quot;100%&quot; src=&quot;index.php&quot;
                &lt;/iframe&gt;
            </pre>
             <iframe width="100%" src="index.php"></iframe>
          <strong>实例</strong>
          <p><a href="index.php">点击我进入首页</a></p>
            <pre class="code">
                &lt;iframe&gt;
                     width=&quot;100%&quot; src=&quot;http://wenya.xiongxianhe,com/&quot;
                &lt;/iframe&gt;
            </pre>
            <iframe width="100%" src="http://wenya.xiongxianhe.com/"></iframe>
             <strong>实例</strong>
             <pre class="code">
                 &lt;iframe&gt; width=&quot;100%&quot; height=&quot;30%&quot; name=&quot;showme&quot;
                     src=&quot;http://www.baidu.com/&quot;
                 &lt;/iframe&gt;
             </pre>
              <iframe  width="100%" height="30%"  name=" showme" src="http://www.baidu.com/"></iframe>
      </div>
</body>
</html>
