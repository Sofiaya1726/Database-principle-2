### 1.模态框

<div class="container">
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    打开模态框
  </button>
   
  <!-- 模态框 -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
   
        <!-- 模态框头部 -->
        <div class="modal-header">
          <h4 class="modal-title">模态框头部</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
   
        <!-- 模态框主体 -->
        <div class="modal-body">
          模态框内容..
        </div>
   
        <!-- 模态框底部 -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        </div>
   
      </div>
    </div>
  </div>
  
</div>

### 2.提示框

<div class="container">
  <a href="#" data-toggle="tooltip" title="提示框内容">鼠标移动</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

### 3.弹出框

<div class="container">
  <a href="#" data-toggle="popover" title="弹出框内容" data-content="弹出框内容">多次点我</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
