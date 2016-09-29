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
            font-family: 微软雅黑, 宋体, Arial;
            text-align: center;
            border: 1px solid #e6e6e6;
            padding: 5px 0px 5px 10px;
            background-color: #31b0d5;
        }
        h3{
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
    <h1 >&lt;meta&gt; 元素专场</h1>
    <ul>
        <li><a href="#seo">SEO优化</a></li>
        <li><a href="#mobile">移动设备</a></li>
        <li><a href="#page">移动设备</a></li>
    </ul>
    <h3>必要属性</h3>
    <table>
        <tr>
            <th>属性</th>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>content</td>
            <td>some text</td>
            <td>定义与http-equiv或name属性相关的元信息</td>
        </tr>
    </table>
    <h3>可选属性</h3>
    <table>
        <tr>
            <th>属性</th>
            <th>值</th>
            <th>描述</th>
        </tr>
        <tr>
            <td>http-equiv</td>
            <td>refresh,content-type,expire,set-cookie</td>
            <td>把content属性关联到http头部</td>
        </tr>
        <tr>
            <td>name</td>
            <td>author,description,keywords,<br>generator,revised,others</td>
            <td>把content属性关联到一个名称</td>
        </tr>
        <tr>
            <td>content</td>
            <td>some text</td>
            <td>定义用于翻译content属性值的格式</td>
        </tr>
    </table>
    <h3 id="seo">SEO优化</h3>
    <p><strong>页面关键字</strong> 每个网页应具有描述该网页内容的一组唯一的关键字<br>
        使用人们可能会搜索，并准确描述网页上所有提供信息的描述性和代表关键字及短语。<br>
        标记内容太短，则搜索引擎可能不会认为这些内容相关。另外，标记不应该超过874个字符</p>
    <p>比如：<a href="7.html#meta-key">meta keywords</a></p>

    <p><strong>页面描述</strong> 每个网页都应有一个不超过150个字符，且能准确返回网页内容的描述标签</p>
    <p>比如: <a href="7.html#meta-desc">meta description</a> </p>

    <p><strong>搜索引擎索引方式</strong> robotterms是一组使用逗号分隔的值，通常有如下几种取值：none, all, noindex, nofollow, index和follow</p>
    <p class="code">
        &lt;meta&gt; name="robots" content="index, follow" &gt;
    </p>
    <ol>
        <li><strong>all:</strong> 允许文件被检索，且页面上的链接也可以被查询</li>
        <li><strong>index:</strong> 只允许文件被检索</li>
        <li><strong>follow:</strong> 允许页面上的链接可以被查询</li>
        <li><strong>noindex:</strong> 文件不被检索</li>
        <li><strong>nofollow:</strong> 页面上的链接不可以被查询</li>
        <li><strong>none:</strong> 文件不被检索，且页面上的链接也不可以被查询</li>
    </ol>

    <p><strong>页面重定向和刷新</strong> content内的数字代表时间（秒），即多少时间后刷新。如果加URL，则会重定向到指定网页（搜索引擎能够自动检测，也很容易被引擎视为误导，而受到惩罚）</p>
    <p class="code">
        &lt;meta http-equiv="refresh" content="0, url=http://h5.xiongxianhe.com/"&gt;
    </p>

    <h3 id="mobile">移动设备</h3>
    <p><strong>viewport:</strong> 能优化移动浏览器的显示。</p>
    <p><i>如果不是<strong>响应式</strong>网站，不要使用initial-scale或禁用缩放。</i><br>大部分4.7 - 5 寸设备的viewport宽为360px；<br>5.5寸设备为400px;<br>iphone6设备为375px，iPhone6 Plus设备为414px</p>
    <p class="code">
        &lt;meta name="viewport" content="width=device-width（设备的宽度）, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"&gt;
    </p>
    <ol>
        <li><strong>width:</strong>宽度（数值/device-width）（范围从200到10000，默认为980px）</li>
        <li><strong>height:</strong>高度（数值/device-height）（范围从223到10000）</li>
        <li><strong>initial-scale:</strong>初始的缩放比例（范围>0到10）</li>
        <li><strong>minimum-scale:</strong>允许用户缩放到的最小比例</li>
        <li><strong>maximum-scale:</strong>允许用户放大到的最大比例</li>
        <li><strong>user-scalable:</strong>用户是否可以手动缩放（no,yes）</li>
    </ol>
    <p><strong>注意:</strong>很多人使用initial-scale=1到非响应式网站上，这会让网站以100%宽度渲染，用户需要手动移动页面或者缩放<br>如果和initial-scale=1同时使用user-scalable=no或maximum-scale=1，则用户将不能放大/缩小网页来看到全部的内容</p>

    <p><strong>webApp全屏模式:</strong>伪装app，离线应用</p>
    <p class="code">
        &lt;meta name="apple-mobile-web-app-capable" content="yes"&gt;  启用WebAPP模式
    </p>

    <p><strong>隐藏状态栏/设置状态栏颜色：</strong>只有在开启webapp全屏模式时才生效。content的值为：default|black|black-translucent</p>
    <p class="code">
        &lt;meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"&gt;
    </p>

    <p><strong>忽略数字自动识别为电话号码</strong></p>
    <p class="code">
        &lt;meta name="format-detection" content="telphone=no"&gt;
    </p>
    13755639263 <br>
    xiongxianhe@163.com
    <p><strong>忽略识别邮箱</strong></p>
    <p class="code">
        &lt;meta content="email=no" name="format-detection"&gt;
    </p>

    <h3 id="page">网页相关</h3>
    <p><strong>申明编码</strong></p>
    <p class="code">
        &lt;meta charset="utf-8"&gt;
    </p>

    <p><strong>禁止浏览器从本地计算机的缓存中访问页面的内容</strong></p>
    <p class="code">
        &lt;meta http-equiv="pragma" content="no-cache"&gt;
    </p>
</div>
</body>
</html>