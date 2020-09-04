## 第一节课课堂作业提交
### 代码：
#### 首先在网页中敲入：
var oHead = document.getElementsByTagName('HEAD').item(0); 
var oScript= document.createElement("script"); 
oScript.type = "text/javascript"; 
oScript.src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js";
oHead.appendChild( oScript);
alert('jquery注入完成');

#### 然后用选择器选择网页元素进行一系列操作，如：
$(this).hide()  // 隐藏当前元素
$("p").hide() // 隐藏所有 <p> 元素
$("p.test").hide() // 隐藏所有 class="test" 的 <p> 元素
$("#test").hide() // 隐藏 id="test" 的元素
  
#### 实现的效果就是改变网页呈现形式
