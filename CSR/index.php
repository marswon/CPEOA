<?php
$flag=true;//SQL连接认证
require_once("include/to_sql.php");
require_once("include/isLoggedIn.php");
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>星河湾半岛酒店工程部OA | 主面板</title>
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.Header{width:100%;height:auto;}
.left{float:left;width:15%;height:620px;background:#c9cddc;}
.right{float:right;width:15%;height:620px;}
.con{float:left;width:70%;height:300px;}
.con1{width:100%;height:150px;}
.Footer{width:100%;height:100px;background:#ccffff;}
</style>
</head>

<body style="font-family:Microsoft YaHei">
<?php include("include/shownav.php"); ?>
<div class="Header"><?php include("include/toNotice.php"); ?></div>
<div class="left"><?php include("include/toDepHumanAddress.htm"); ?></div>
<div class="right"><?php include("include/toWatchAllList.htm"); ?></div>
<div class="con"><div class="con1">

<h2 class="h2 text-center">主控制面板 || 开始工作啦~</h2>
<div class="row col-md-10 col-md-offset-1"><hr>
<button class="btn btn-info" style="width:100%" onclick="window.location.href='WorkOrder/toList.php?token=<?php echo $_SESSION["token"]?>'">
<h4><b>工 &nbsp;&nbsp;作 &nbsp;&nbsp;单 &nbsp;&nbsp;管 &nbsp;&nbsp;理</b></h4></button><br><br>
<button class="btn btn-info" style="width:100%" onclick="window.location.href='PurchaseOrder/toList.php?token=<?php echo $_SESSION["token"]?>'">
<h4><b>采 &nbsp;&nbsp;购 &nbsp;&nbsp;单 &nbsp;&nbsp;管 &nbsp;&nbsp;理</b></h4></button><br><br>

<h2 class="h2 text-center">理理自己的事儿~</h2>
<div class="row col-md-10 col-md-offset-1"><hr>
<button class="btn btn-warning" style="width:100%" onclick="window.location.href='Personal/InvaledtoWatch.php?token=<?php echo $_SESSION["token"]?>'"><h4><b>个 &nbsp;&nbsp;&nbsp;人 &nbsp;&nbsp;&nbsp;隐 &nbsp;&nbsp;&nbsp;私</b></h4></button><br><br>
<button class="btn btn-warning" style="width:100%" onclick="window.location.href='Personal/InvaledtoWatch.php?token=<?php echo $_SESSION["token"]?>'"><h4><b>咻 &nbsp;&nbsp;一 &nbsp;&nbsp;咻 &nbsp;&nbsp;密 &nbsp;&nbsp;码</b></h4></button><br><br>

<h2 class="h2 text-center">恐怖的操作！谨慎操作啊！！！</h2>
<div class="row col-md-10 col-md-offset-1"><hr>
<button class="btn btn-danger" style="width:100%" onclick="window.location.href='Personal/InvaledtoWatch.php?token=<?php echo $_SESSION["token"]?>'"><h4><b>重 &nbsp;&nbsp;置 &nbsp;&nbsp;账 &nbsp;&nbsp;户 &nbsp;&nbsp;状 &nbsp;&nbsp;态</b></h4></button><br><br>
<button class="btn btn-danger" style="width:100%" onclick="window.location.href='Personal/InvaledtoWatch.php?token=<?php echo $_SESSION["token"]?>'"><h4><b>临 &nbsp;&nbsp;时 &nbsp;&nbsp;挂 &nbsp;&nbsp;失 &nbsp;&nbsp;账 &nbsp;&nbsp;户 （非 被 盗 请 勿 戳 此！）</b></h4></button><br><br>

<?php include("include/showbanner.php"); ?>
<script src="js/md5.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/ripples.js"></script>

</body>
</html>