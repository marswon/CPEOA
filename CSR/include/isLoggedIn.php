<?php
session_start();
if(empty($_SESSION['adminname'])){
$strout="请思考您是否做过以下丑事！<font color='red'><br>①冒然冲进本系统<br>②未操作时间超过24小时</font>";
echo "<script>window.location.href='login.php';</script>";
}
if($_GET['token']!=$_SESSION['token']){
$strout="请思考您是否做过以下丑事！<font color='red'><br>①冒然冲进本系统<br>②未操作时间超过24小时</font>";
echo "<script>window.location.href='login.php';</script>";
}
?>

<html>
<head>
<script>
  window.onload=function(){
    $.getScript("js/checkSign.js",function(){
        p="<?php echo($strout); ?>";
        if(p){alt(p,"查询结果");}
    });
  };
</script>
</head>
<body>
<!-- for modal alert...-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
        <h3 class="modal-title">警告！警告！</h4>
      </div>
      <div class="modal-body">
        <p id='msg'></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="javascript:reset()">好吧……我知错了……</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>