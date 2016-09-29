<!DOCTYPE html>
<html>
<head>
    <title>CSS属性选择器</title>
    <meta charset="utf-8">
    <meta name="keywords" content="css,html,问呀">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
<p style="font-size: 7px;margin:0;padding:0;position: absolute;top:1px;right:5px">create time: 2016-08-25 17:14:30</p>

<?php /*require_once 'nav.php';*/?>

<div class="contain">
    <h1>CSS属性选择器</h1>
    <p>属性选择器可以根据元素的属性及属性值来选择元素。</p>
    <h2>简单属性选择</h2>
    <p>如果希望选择有某个属性的元素，而不论属性值是什么，可以使用简单属性选择器。</p>
    <h3>实例</h3>
    <p>如果您希望把包含标题（title）的所有元素变为红色，可以写作：</p>
    <p class="code">*[title] {color:red;}</p>

    <p>可以只对有 href 属性的锚（a 元素）应用样式：</p>
    <p class="code">a[href] {color:red;}</p>

    <p>还可以根据多个属性进行选择，只需将属性选择器链接在一起即可。<br>例如，为了将同时有 href 和 title 属性的 HTML 超链接的文本设置为红色，可以这样写：</p>
    <p class="code">a[href][title] {color:red;}

    <h2>根据具体属性值选择</h2>
    <p>除了选择拥有某些属性的元素，还可以进一步缩小选择范围，只选择有特定属性值的元素。</p>
    <p>例如，假设希望将指向 Web 服务器上某个指定文档的超链接变成红色，可以这样写：</p>
    <p class="code">a[href="http://www.uwenya.cc/"] {color: red;}</p>

    <p>与简单属性选择器类似，可以把多个属性-值选择器链接在一起来选择一个文档。</p>
    <p class="code">a[href="http://www.uwenya.cc/"][title="uwenya"] {color: red;}</p>

    <h2>属性与属性值必须完全匹配</h2>
    <p>请注意，这种格式要求必须与属性值完全匹配。<br>
        如果属性值包含用空格分隔的值列表，匹配就可能出问题。</p>
    <p class="code">
        p[class="important warning"] {color: red;}<br>
        &lt;p class="important warning">This paragraph is a very important warning.&lt;/p&gt;
    </p>
    <p>如果写成 p[class="important"]，那么这个规则不能匹配示例标记。</p>

    <h2>根据部分属性值选择</h2>
    <p>如果需要根据属性值中的词列表的某个词进行选择，则需要使用波浪号（~）。<br>假设您想选择 class 属性中包含 important 的元素，可以用下面这个选择器做到这一点：</p>
    <p class="code">p[class~="important"] {color: red;}</p>

    <h2>子串匹配属性选择器</h2>
    <table>
        <tr>
            <th>类型</th>
            <th>描述</th>
        </tr>

        <tr>
            <td>[abc^=&quot;def&quot;]</td>
            <td>选择 abc 属性值以 &quot;def&quot; 开头的所有元素</td>
        </tr>

        <tr>
            <td>[abc$=&quot;def&quot;]</td>
            <td>选择 abc 属性值以 &quot;def&quot; 结尾的所有元素</td>
        </tr>

        <tr>
            <td>[abc*=&quot;def&quot;]</td>
            <td>选择 abc 属性值中包含子串 &quot;def&quot; 的所有元素</td>
        </tr>
    </table>
    <p>举例来说，如果希望对指向 W3School 的所有链接应用样式，不必为所有这些链接指定 class，再根据这个类编写样式，而只需编写以下规则：</p>
    <p class="code">a[href*="w3school.com.cn"] {color: red;}</p>

    <h2>特定属性选择类型</h2>
    <p class="code">*[lang|="en"] {color: red;}</p>
    <p>上面这个规则会选择 lang 属性等于 en 或以 en- 开头的所有元素。因此，以下示例标记中的前三个元素将被选中，而不会选择后两个元素：</p>
    <p class="code" style="white-space: pre-line">
        &lt;p lang=&quot;<span class="marked">en</span>&quot;&gt;Hello!&lt;/p&gt;
        &lt;p lang=&quot;<span class="marked">en-</span>us&quot;&gt;Greetings!&lt;/p&gt;
        &lt;p lang=&quot;<span class="marked">en-</span>au&quot;&gt;G'day!&lt;/p&gt;
        &lt;p lang=&quot;fr&quot;&gt;Bonjour!&lt;/p&gt;
        &lt;p lang=&quot;cy-en&quot;&gt;Jrooana!&lt;/p&gt;
    </p>

    <h2>CSS 选择器参考手册</h2>
    <table class="dataintable">
        <tr>
            <th style="width:30%;">选择器</th>
            <th>描述</th>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute] 选择器">[<i>attribute</i>]</a></td>
            <td>用于选取带有指定属性的元素。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute=value] 选择器">[<i>attribute</i>=<i>value</i>]</a></td>
            <td>用于选取带有指定属性和值的元素。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute~=value] 选择器">[<i>attribute</i>~=<i>value</i>]</a></td>
            <td>用于选取属性值中包含指定词汇的元素。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute|=value] 选择器">[<i>attribute</i>|=<i>value</i>]</a></td>
            <td>用于选取带有以指定值开头的属性值的元素，该值必须是整个单词。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute^=value] 选择器">[<i>attribute</i>^=<i>value</i>]</a></td>
            <td>匹配属性值以指定值开头的每个元素。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute$=value] 选择器">[<i>attribute</i>$=<i>value</i>]</a></td>
            <td>匹配属性值以指定值结尾的每个元素。</td>
        </tr>

        <tr>
            <td><a href="#" title="CSS [attribute*=value] 选择器">[<i>attribute</i>*=<i>value</i>]</a></td>
            <td>匹配属性值中包含指定值的每个元素。</td>
        </tr>
    </table>

</div>
<?php require_once 'foot.php';?>
</body>
</html>