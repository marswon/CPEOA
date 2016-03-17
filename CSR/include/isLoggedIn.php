<?php
session_start();

//是否已经登录的验证
//通过检测session非空
if(empty($_SESSION['adminname'])){
$strout="请思考您是否做过以下丑事！<font color='red'><br>①没有登陆就冒然冲进本系统<br>②未操作时间超过24小时</font>";
echo "<script>window.location.href='/CSR/login.php';</script>";
}

//TOKEN验证
if($_GET['token']!=$_SESSION['token']){
$strout="请思考您是否做过以下丑事！<font color='red'><br>冒然冲进本系统<br></font>";
echo "<script>window.location.href='/CSR/login.php';</script>";
}

//用户权限及激活状态
$sql="select quanxian,verifystatus from user where username='{$_SESSION["adminname"]}'";	
$result=mysqli_fetch_array(mysqli_query($conn,$sql));
$qx=$result['quanxian'];
$vrf=$result['verifystatus'];
$_SESSION['qx']=$qx;

//用户激活状态判断
if($vrf=="1"){
$strout="您的账户尚未激活！<br>即将跳转至激活页面";
echo "<script>window.location.href='/CSR/register.php';</script>";
}

//用户权限判断
if($qx=="1"){$_SESSION['role']="技工";}/*技工*/ 
if($qx=="4"){$_SESSION['role']="值工";}/*值工*/ 
if($qx=="8"){$_SESSION['role']="文员";}/*文员*/ 
if($qx=="10"){$_SESSION['role']="管理员";}/*管理员*/
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