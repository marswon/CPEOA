<?php
session_start();
$flag=true;//SQL连接认证
require_once("../include/to_sql.php");
require_once("../include/isLoggedIn.php");
$token=$_SESSION['token'];
if($_SESSION['qx'] < 8){header("Location:/CSR/WorkOrder/toList.php?token=$token");}
$id=$_GET['odid'];
$query="select * from workorder where odid='".$id."'";
$rs=mysqli_fetch_array(mysqli_query($conn,$query));

//检测是否存在此单，防止恶意修改
if(!$rs){
header("Location:/CSR/WorkOrder/toReturn.php?token=$token");
}

if($_POST){
$applyREASON=$_POST['reason'];
$applyHUMAN=$_POST['human'];
$query="UPDATE workorder SET tdreason='".$applyREASON."',tdhuman='".$applyHUMAN."',status='已退单' WHERE odid='".$id."'";
$result=mysqli_query($conn,$query);
header("Location:/CSR/WorkOrder/toManage.php?token=$token");
}
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

<body style="font-family:Microsoft YaHei">
<?php include("../include/shownav.php"); ?>
<h1 class="h1 text-center">编辑<?php echo $id; ?>号工作单</h1>
<div class="row col-md-10 col-md-offset-1"><hr>
<table class="table table-hover table-striped table-bordered">

<tr>
<th width="12%"><center>工作单编号</center></th><td>
<?php echo $rs['odid']; ?>
</td></tr>

<tr>
<th width="12%"><center>交单时间</center></th><td>
<?php echo $rs['odtime']; ?>
</td></tr>

<tr>
<th width="12%"><center>交单部门</center></th><td>
<?php echo $rs['oddep']; ?>
</td></tr>

<tr>
<th width="12%"><center>派单值工</center></th><td>
<?php echo $rs['odhuman']; ?>
</td></tr>

<tr>
<th width="12%"><center>工作单内容</center></th><td>
<?php echo $rs['odcontent']; ?>
</td></tr>

<tr>
<th width="12%"><center>联系人</center></th><td>
<?php echo $rs['contact']; ?>
</td></tr>

<tr>
<th width="12%"><center>联系人电话</center></th><td>
<?php echo $rs['phone']; ?>
</td></tr>

<tr>
<th width="12%"><center>状态</center></th><td>
<?php echo $rs['status']; ?>
</td></tr>
</table><div class="row"><hr>

<!--POST表格 退单-->
<form method="post">
<table class="table table-hover table-striped table-bordered">
<tr>
<th width="12%"><center>退单原因</center></th><td>
<input class="form-control" name="reason">
</td></tr>

<tr>
<th width="12%"><center>退单人</center></th><td>
<input class="form-control" name="human">
</td></tr>

</table>
<div class="row"><hr>

<center>
<input type="submit" class="btn btn-success" style='width:300px;height:40px;' value="确 定 退 单（不可挽回的！请看清！）" name="modify">
</center>
</form>

<?php include("../include/showbanner.php"); ?>
