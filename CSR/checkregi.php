<?php
if($applyUSER == ""){
$strout="请输入您的用户名(工号)<br> ";
$errstatus=1;
} 

if($applyTRUENAME == ""){
$strout="请输入您的真实姓名<br> "; 
$errstatus=1;
} 

if($applyPW == ""){
$strout="请输入您需要设置的密码<br> ";
$errstatus=1;
}

if($applyVFRPW == ""){
$strout="请再次输入您需要设置的密码<br> ";
$errstatus=1;
}

if($applyPW != $applyVFRPW){
$strout="两次输入的密码不相符，请重新输入！ <br> ";
$errstatus=1;
}

if($applyCPEOAKEY == ""){
$strout="<font color='red'>请输入您的CPEOA KEY！</font><br>";
$errstatus=1;
} 

if($applyRMINFO == ""){
$strout="<font color='red'>请输入您账户的保留信息！</font><br>";
$errstatus=1;
}

if($applyAGAINRMIF == ""){
$strout="请再次输入您账号的保留信息<br>";
$errstatus=1;
}

if($applyRMINFO != $applyAGAINRMIF){
$strout="两次输入的保留信息不相符，请重新输入！";
$errstatus=1;
}


if($errstatus=1){}

else{
$sql="SELECT * FROM user WHERE usname='".$applyUSER."' AND truename= '".$applyTRUENAME."'";
$result=mysqli_query($conn,$sql);//SQL查询
$res=mysqli_fetch_array($result);//获取数据
}

if($applyCPEOAKEY != $res['KEYID']){
$strout="<font color='red'>您的CPEOA-KEY(系统激活码)不正确！请重新输入！</font>";
}
  
else{
$regiIP=$_SERVER['REMOTE_ADDR'];
$regiTIME=date("Y-m-d H:i:s");
$addsql="INSERT user(truename,pw,remaininfo,vrfstatus) VALUES('{$applyTRUENAME}','{$applyPW}','{$applyRMINFO}','1')"; $result=mysqli_query($conn,$addsql);//执行语句
$strout="<font color='blue'>恭喜您已成功激活 ".$applyNAME." 账户！<br>激活IP: ".$regiIP."<br>激活时间: ".$regiTIME."<br>请重新登录！谢谢配合！</font>";
header("login.php");
}

?>