<!DOCTYPE html>
    <html>
      <head>
          <meta charset="utf-8">
          <meta name="keywords" content="php">
          <title>HTML表单</title>
          <link rel="stylesheet" type="text/css" href="../css/main.css">
      </head>
     <body>
       <div class="contain">
           <h1>HTML表单和输入</h1>
              <h3>HTML表单标签</h3>
                 <table>
                     <tr>
                         <th>标签</th>
                         <th>描述</th>
                     </tr>
                     <tr>
                         <td>&lt;form&gt;</td>
                         <td>定义用户输入的表单</td>
                     </tr>
                     <tr>
                         <td>&lt;input&gt;</td>
                         <td>定义输入域</td>
                     </tr>
                     <tr>
                         <td>&lt;textarea&gt;</td>
                         <td>定义输入域(一个多行的输入控件)</td>
                     </tr>
                     <tr>
                         <td>&lt;label&gt;</td>
                         <td>定义了&lt;input&gt;元素的标题,一般为输入标题</td>
                     </tr>
                     <tr>
                         <td>&lt;fieldset&gt;</td>
                         <td>定义了&lt;一组相关的表单元素,并使用外框包含起来&gt;</td>
                     </tr>

                     <tr>
                         <td>&lt;legend&gt;</td>
                         <td>定义了&lt;fieldset&gt;元素的标题</td>
                     </tr>
                     <tr>
                         <td>&lt;select&gt;</td>
                         <td>定义了下拉选项列表</td>
                     </tr>
                     <tr>
                         <td>&lt;optgroup&gt;</td>
                         <td>定义选项组</td>
                     </tr>
                     <tr>
                         <td>&lt;option&gt;</td>
                         <td>定义下拉列表中的选项</td>
                     </tr>
                     <tr>
                         <td>&lt;button&gt;</td>
                         <td>定义一个点击按钮</td>
                     </tr>
                      <tr>
                         <td>&lt;datalist&gt;</td>
                         <td>指定一个预先定义的输入控件选项列表</td>
                     </tr>
                      <tr>
                         <td>&lt;button&gt;</td>
                         <td>定义一个点击按钮</td>
                     </tr>
                     <tr>
                         <td>&lt;keygen&gt;</td>
                         <td>定义了表单的秘钥对生成器字段</td>
                     </tr>
                     <tr>
                         <td>&lt;output&gt;</td>
                         <td>定义一个计算结果</td>
                     </tr>
                 </table>
                <h3 id="form">HTML表单</h3>
             <p>表单是一个包含表单元素的区域。<br><b>表单元素</b>是允许用户在表单中输入内容，比如：文本框，下拉列表，单选框，复选框等<br>
             表单使用表单标签&lt;form&gt;来设置
             </p>
             <pre class="code">
                 &lt;form action=&quot;...&quot; method=&quot;post&quot;&gt;
                 ........
                 &lt;/form&gt;
             </pre>
              <h3 id="input">HTML表单-输入元素</h3>
              <p>多数情况下被用到的表单标签是<b>输入标签&lt;input&gt;</b><br>
              输入类型是有类型属性(type)来定义的
              </p>
              <h3 id="radio">单选按钮</h3>
              <strong>实例：单选按钮</strong>
              <pre class="code" style="overflow: scroll">
                  <?php
                  $html='
               <form>
                   <input type="radio" name="sex" value="1" checked>男
                   <input type="radio" name="sex" value="0" >女
               </form>';
                  echo htmlspecialchars($html);
                  ?>
              </pre>
           <form>
               <input type="radio" name="sex" value="1" checked>男<br>
               <input type="radio" name="sex" value="0" >女
           </form>
            <h3 id="checkbox">复选框按钮</h3>
           <pre class="code" style="overflow: scroll">
              <?php
                $html=' <form>
               <input type="checkbox" name="ck[]"  >男<br>
               <input type="checkbox" name="ck[]"  >女
           </form>';
              echo htmlspecialchars($html);
              ?>
           </pre>
            <form>
               <input type="checkbox" name="ck[]"  >男<br>
               <input type="checkbox" name="ck[]"  >女
           </form>
           <h3 id="select">下拉列表</h3>
           <form>
               <select name="phone">
                   <option value="0">苹果</option>
                   <option value="1">三星</option>
                   <option value="2" selected>华为</option>
               </select>
           </form>
            <h3 id="tetxarea">实例-文本域</h3>
           <pre class="code">
           <?php
              $html='
            <form>
                <textarea rows="10" cols="10"></textarea>
            </form>';
           echo htmlspecialchars($html);
           ?>
               </pre>
            <form>
               <!-- <input type="text"  style="overflow: scroll">-->
                <textarea rows="8" cols="60"></textarea><br>
                <input type="submit">
            </form>
            <h3 id="field">实例-带边框的表单</h3>
            <pre class="code" style="overflow: scroll">
                <?php
                  $html='
                  <form>
                   <fieldset>
                     <legend>用户信息</legend>
                     <label>用户名:<input type="text" name="user"></label>
                     <label>密码:<input type="text" name="pswd"></label>
                   </fieldset>
                  </form>';
                  echo htmlspecialchars($html);
                ?>
            </pre>
            <h3>实例</h3>
           <form>
               <fieldset>
                   <legend>用户信息</legend>
                   <label>用户名:<input type="text" name="user"></label><br>
                   <label>密码:<input type="text" name="pswd"></label><br>
                   <label><input type="submit"></label>
               </fieldset>
           </form>
             <h3 id="optgroup">HTML&lt;optgroup&gt;标签</h3>
             <p>通过&lt;optgroup&gt;标签把相关 选项组合在一起</p>
           <form>
               <select name="book">
                   <optgroup label="语言类">
                       <option value="0">PHP</option>
                       <option value="1">Java</option>
                       <option value="2">C/C++</option>
                   </optgroup>
                   <optgroup label="基础类">
                       <option value="3">数据结构</option>
                       <option value="4">计算机网络</option>
                       <option value="5">计算机组成原理</option>
                       <option value="6">计算机操作系统</option>
                   </optgroup>
                   <optgroup label="文学类">
                       <option value="7">三国演义</option>
                       <option value="8">水浒传</option>
                       <option value="9">红楼梦</option>
                   </optgroup>
               </select>
           </form>

             <h3 id="datalist">HTML&lt;datalist&gt;标签</h3>
             <p>&lt;datalist&gt;标签规定了&lt;input&gt;元素可能的选项列表.<br>&lt;datalist&gt;标签被用来在为&lt;input&gt;元素提供<q>自动完成</q>的特性.用户能看到一个下拉列表,里边的选项是预先定义好的，将作为用户的输入数据。
             </p>
           <i><b>注:</b>IE9（更早）,Safari不支持</i>
           <pre class="code" style="overflow: scroll">
               <?php
               $html='<form>
                 <input type="text" list="fruits" name="fruit">
                  <datalist id="fruits">
                     <option value="苹果" selected> </option>
                     <option value="香蕉"> </option>
                     <option value="桔子"> </option>
                  </datalist >
             </form>';
               echo htmlspecialchars($html);
               ?>
           </pre>
           <h2>实例(多选项下拉列表)</h2>
             <form>
                 <input type="text" list="fruits" name="fruit">
                  <datalist id="fruits">
                     <option value="苹果"></option>
                     <option value="香蕉"> </option>
                     <option value="桔子"> </option>
                  </datalist >
             </form>
       </div>
     </body>
    </html>