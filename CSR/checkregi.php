<?php  
$flag=true;
require_once("include/to_sql.php");
$USER=$_POST['usr']; 
$TRNAME=$_POST['truename'];
$PW=$_POST['pwd'];
$VRFPW=$_POST['vrfpw'];
$KEY=$_POST['key'];
$RMINFO=$_POST['remaininfo'];
$ID=$_POST['workid'];

if($USER == ""){
$strout=$strout."请输入您的用户名(工号)<br> ";
$errstatus=1;
} 

if($TRNAME == ""){
$strout=$strout."请输入您的真实姓名<br> "; 
$errstatus=1;
} 

if($PW == ""){
$strout=$strout."请输入您需要设置的密码<br> ";
$errstatus=1;
}

if($VRFPW == ""){
$strout=$strout."请再次输入您需要设置的密码<br> ";
$errstatus=1;
}

if($PW != $VRFPW){
$strout=$strout."两次输入的密码不相符，请重新输入！ <br> ";
$errstatus=1;
}

if($KEY == ""){
$strout=$strout."<font color='red'>请输入您的CPEOA KEY！</font><br>";
$errstatus=1;
} 

if($RMINFO == ""){
$strout=$strout."<font color='red'>请输入您账户的保留信息！</font><br>";
$errstatus=1;
}

if($ID == ""){
$strout=$strout."请输入您的工号！<br>";
$errstatus==1;
}

else{
	$query="select * from user where username='{$USER}'";
	$result=mysqli_fetch_array(mysqli_query($conn,$query));

if($KEY != $result['key']){
  $strout="<font color='red'>您的CPEOA-KEY(系统激活码)不正确！请重新输入！</font>";
  }

else{

$times=mt_rand(mt_rand(10,20),mt_rand(40,50));
for ($i=0; $i < $times; $i++) { 
  $PW=md5($PW);
}

//取随机SALT值
//1. 设定SALT总值
$ALLsalt="1A2S3D4F5G6HJ8K9QWERTYUPZXCVBNM";
//2. 随机抽取位数，并抽取对应字符，循环6次。
for ($s=0; $s < 6; $s++) { 
  $RDsalt=mt_rand(0,30);
  $salt=$salt.$ALLsalt{$RDsalt};
}

$pass=md5($PW.$salt);

  $regiIP=$_SERVER['REMOTE_ADDR'];
  $regiTIME=date("Y-m-d H:i:s",time()+7*60*60);
  $addsql="UPDATE user SET truename='".$TRNAME."',verifystatus='2',pw='".$pass."',RetainInfo='".$RMINFO."',workid='".$ID."',mdtime='".$times."',salt='".$salt."' WHERE username='".$USER."' "; 
  $result2=mysqli_query($conn,$addsql);//执行语句
  $query="insert user_regi(username,ip) values('{$TRNAME}','{$regiIP}')";
  $result3=mysqli_query($conn,$query);//执行语句

$strout="<font color='blue'>恭喜您已成功激活 ".$USER." 账户！<br>激活IP: ".$regiIP."<br>激活时间: ".$regiTIME."<br>请重新登录！谢谢配合！</font>";
  }
}

?>

<html>
<head>
<link href="../css/bootstrap.css" rel="stylesheet">
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap-switch.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/ripples.js"></script>
<script>
  window.onload=function(){
    $.getScript("../js/checkSign.js",function(){
        p="<?php echo($strout); ?>";
        if(p){alt(p,"查询结果");}
    });
  };
</script>
</head>
<body>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
        <h3 class="modal-title">善意的提醒</h3>
      </div>
      <div class="modal-body">
      <b>
        <p id='msg'></p>
        </b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">哦~俺知道了</button>
      </div>
    </div>
  </div>
</div>
</h3>
<script>
   $(function () { $('#myModal').modal('hide')});
</script>
<script>
   $(function () { $('#myModal').on('hide.bs.modal', function () {
      window.location.href='register.php';})
   });
</script>
</body>
</html>