<?php
$flag=true;//SQL连接认证
require_once("../include/to_sql.php");
require_once("../include/isLoggedIn.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.css" rel="stylesheet">
<script src="../js/md5.js"></script>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap-switch.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/ripples.js"></script>
</head>
<body>
<?php include("../include/shownav.php"); ?>
<div class="row"><hr>
<h1><font color="green"><center>
Sorry!</font>
<font color="red">
<br>This Page have not build success!
<br>Please Wait for a few times!
<br>Thanks for your waiting!
</center></font></h1>

<div class="row"><hr>

<h1><b><font color="green"><center>
道歉</font>
<font color="red"> 
<br>此页面暂未开发完毕
<br>请耐心等待一段时间
<br>谢谢您的谅解和支持！
</center></font></b></h1>
<?php include("../include/showbanner.php"); ?>