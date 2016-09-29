
<html>
  <head>
      <title></title>
      <style>
          .div1{
              position: relative;
              margin: 20px auto;
              width: 200px;
              height: 200px;
              border:  solid 1px lightgray;
          }
          .div1 ul{
              list-style: none;
          }
          .div1 li{
              text-decoration: none;
          }
          .div3{
              display: none;
          }
          .div2:hover .div3{
              cursor: pointer;
              color: #ffffff;
              background-color: #00002f;
              display: block;
          }
      </style>
  </head>
   <body>
     <div class="div1">
         <div class="div2">
               <ul>
                   <li>
                       下拉列表
                       <div class="div3">
                          <ul>
                              <li>英语</li>
                              <li>数学</li>
                              <li>语文</li>
                          </ul>
                       </div>
                   </li>
               </ul>

         </div>
     </div>
   </body>
</html>