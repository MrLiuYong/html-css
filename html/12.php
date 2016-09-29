    <!DOCTYPE html><!-- 声明: 文件类型和版本 -->
    <html lang="en">
    <head>
        <meta charset="UTF-8"> <!-- 编码声明 如果是中文网站，需要此声明，否则可能会出现乱码 -->
        <title>HTML列表</title>
        <link href="../css/main.css" rel="stylesheet">
    </head>
    <body>
    熊老师是个非常好的老师!<br><sub>create time:2016/8/22 9:43</sub>
    <div class="contain" >
        <h1>HTML列表</h1>
        <p>HTML支持有序，无序和定义列表</p>
        <ul>
            <li><a href="#order">HTML无序列表</a></li>
            <li><a href="#unorder">HTML有序列表</a></li>
            <li><a href="#define">HTML定义列表</a></li>
        </ul>
        <h3 id="unorder">HTML无序列表</h3>
        <p>无序列表是一个项目的列表，此项目默认使用粗体圆点进行标记.<br>无序列表使用&lt;ul&gt;标签</p>
           <pre class="code">
                 &lt;ul&gt;
                    &lt;li&gt;&lt;苹果&gt; &lt;/li&gt;
                    &lt;li&gt;&lt;海鲜&gt; &lt;/li&gt;
                    &lt;li&gt;&lt;蔬菜&gt; &lt;/li&gt;
                &lt;/ul&gt;
            </pre>
              <ul>
                  <li>苹果</li>
                  <li>海鲜</li>
                  <li>蔬菜</li>
              </ul>
             <strong>空心圆列表</strong>
            <pre class="code">
               &lt;ul style= &quot;list-style-type: circle&quot;&gt;
                &lt;li&gt;PHP &lt;/li&gt;
                &lt;li&gt;JAVA &lt;/li&gt;
                &lt;li&gt;C++ &lt;/li&gt;
                &lt;/ul&gt;
            </pre>
           <ul  style="list-style-type: circle">
               <li>PHP</li>
               <li>JAVA</li>
               <li>C++</li>
           </ul>

        <strong>正方形</strong>
            <pre class="code">
               &lt;ul style= &quot;list-style-type: square&quot;&gt;
                &lt;li&gt;盘古 &lt;/li&gt;
                &lt;li&gt;耶稣 &lt;/li&gt;
                &lt;li&gt;佛祖 &lt;/li&gt;
                &lt;/ul&gt;
            </pre>
             <ul>
                 <li>盘古</li>
                 <li>耶稣</li>
                 <li>佛祖</li>
             </ul>
        <h3 id="order">HTML有序列表</h3>
        <p>有序列表页是一个列表项目。默认列表项目使用数字进行标记。<br>有序列表始于&lt;ol&gt;,每个列表项始于&lt;li&gt;</p>
        <strong>HTML有序列表</strong>
           <pre class="code">
               &lt;ol&gt;
                  &lt;li&gt;盘古&lt;/li&gt;
                  &lt;li&gt;耶稣&lt;/li&gt;
                  &lt;li&gt;佛祖&lt;/li&gt;
               &lt;/ol&gt;
           </pre>
        <hr style="border: dashed 2px cornflowerblue">
              <ol start="10"><!-- 从个数10开始-->
                   <li>盘古</li>
                   <li>耶稣</li>
                   <li>佛祖</li>
               </ol>
             <hr style="border: dashed 2px cornflowerblue">
              <ol>
                  <li>盘古</li>
                  <li>耶稣</li>
                  <li>佛祖</li>
              </ol>

             <strong>大写字母列表</strong>
        <hr style="border: dashed 2px cornflowerblue">
           <pre class="code">

               <ol type="A">
                   <li>b</li>
                   <li>c</li>
                   <li>d</li>
               </ol>
                <hr style="border: dashed 2px cornflowerblue">
               <ol type="i">
                   <li>b</li>
                   <li>c</li>
                   <li>d</li>
               </ol>
           </pre>

        <h3 id="define">HTML定义列表</h3>
        <strong>自定义列表</strong>
        <hr style="border: dashed 2px cyan">
        <p>自定义列表不仅仅是一列项目,而是项目及其注释的组合。<br>自定义列表以&lt;dl&gt;标签开始，每个自定义列表以&lt;dt&gt;开始,每个自定义<strong>列表项</strong>的定义以&lt;dd&gt;开始</p>
        <pre class="code"><!-- 定义列表-->
            &lt;dt&gt;Coffee&lt;/dt&gt;<!-- 列表项目-->
            &lt;dd&gt;black hot drink&lt;/dd&gt;
            &lt;dt&gt;可口可乐&lt;/dt&gt;<!-- 列表项目-->
            &lt;dd&gt;碳酸饮料&lt;/dd&gt;
        </pre>
         <hr style="border: dotted 2px cyan">
        <dl>
            <dt>Coffee</dt>
            <dd>black hot drink</dd>
            <dt>可口可乐</dt>
            <dd>碳酸饮料</dd>
        </dl>
    </div>
    </body>
    </html>