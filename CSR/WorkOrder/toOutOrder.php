<?php
$flag=true;//SQL连接认证
require_once("../include/to_sql.php");
require_once("../include/isLoggedIn.php");
$token=$_SESSION['token'];
if($_SESSION['qx'] < 8){header("Location:/CSR/WorkOrder/toList.php?token=$token");}
//分页显示
$sql="select * from workorder order by id asc";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$page=isset($_GET['page'])?intval($_GET['page']):1;//当前页码  
$info_num=20; //一页显示数据数量
$totalpage=ceil($total/$info_num); //总共页数
If($page>$totalpage || $page == 0){
}
$offset=($page-1)*$info_num; 
$info=mysqli_query($conn,"select * from workorder order by id desc limit $offset,$info_num");
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

<h1 class="h1 text-center">目前在案的所有工作单</h1>

<div class="row col-md-10 col-md-offset-1">
<hr>
<table class="table table-hover table-striped table-bordered" style="border-radius: 5px; border-collapse:separate;" id="tbSign">        

<tr>
<td><center>订单号</center></td>
<td><center>交单时间</center></td>
<td><center>交单部门</center></td>
<td><center>派单值工</center></td>
<!--<td><center>工作单内容</center></td>-->
<td><center>联系人</center></td>
<td><center>联系人电话</center></td>
<td><center>状态</center></td>
<td><center>操作</center></td>


<?php while($rs=mysqli_fetch_array($info)){ ?>
<tr>
<td><center><?php echo $rs['odid']; ?><center></td>
<td width="11.5%"><center><?php echo $rs['odtime']; ?></center></td>
<td width="9%"><center><?php echo $rs['oddep']; ?></center></td>
<td width="9%"><center><?php echo $rs['odhuman']; ?></center></td>
<!--<td width="26%"><center><?php echo $rs['odcontent']; ?></center></td>-->
<td width="9%"><center><?php echo $rs['contact']; ?></center></td>
<td width="12%"><center><?php echo $rs['phone']; ?></center></td>
<td width="9%"><center><?php echo $rs['status']; ?></center></td>
<td width="15%"><center>
<button class='btn btn-info' onclick="window.location.href='toOutOrderList.php?odid='+'<?php echo $rs['odid']; ?>'+'&token='+'<?php echo $_SESSION['token']; ?>'">退单</button>
</center></td>
<?php } ?>

</table>
</div>

<div class="row col-md-10 col-md-offset-1">
<hr>


<?php 
if($totalpage != 1){
$pre=$page-1;
$next=$page+1; 
if($next>$totalpage){$next=$page;}
if($pre<1){$pre=1;}
if($next>$totalpage){$next=$page;}
?>
<center>
<h3>页面选择</h3>
<button class='btn btn-info' style='width:20%' onclick="window.location.href='toList.php?page=1'">首页</button>
<button class='btn btn-info' style='width:20%' onclick="window.location.href='toList.php?page='+<?php echo $pre; ?>">上一页</button>
<button class='btn btn-info' style='width:20%' onclick="window.location.href='toList.php?page='+<?php echo $next; ?>">下一页</a></button>
<?php } 
?>
</div>
<div class="row col-md-10 col-md-offset-1">
<hr>
<center>
<h3>各种好玩的操作</h3>
<center>攻城狮又偷懒了……请您等候1年左右，或许就可以了……</center>
<div class="row col-md-10 col-md-offset-1">
<hr>
</div>
<?php include("../include/showbanner.php"); ?>
</body>
</html>
