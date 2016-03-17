<?php
$flag=true; //SQL连接认证
require_once("include/to_sql.php");
?>
<html>
<head>
<title>星河湾半岛酒店工程部OA | 首次登录认证</title>
<?php
if($_POST){
$applyUSER=$_POST['username']; 
$applyTRUENAME=$_POST['truename'];
$applyPW=md5($_POST['pw']);
$applyVFRPW=md5($_POST['vrfpw']);
$applyCPEOAKEY=$_POST['CPEOA-key'];
$applyRMINFO=$_POST['remaininfo'];
$applyAGAINRMIF=$_POST['again-rmif'];
require_once("include/checkregi.php");
}
?>
</head>
