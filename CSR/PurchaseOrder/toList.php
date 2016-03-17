<?php
$flag=true;//SQL连接认证
require_once("../include/to_sql.php");
require_once("../include/isLoggedIn.php");

//分页显示
$sql="select * from workorder order by id asc";
$result=mysql_query($sql);
$total=mysql_num_rows($result);
$page=isset($_GET['page'])?intval($_GET['page']):1;  
$info_num=20; //一页显示数据数量
$pagenum=ceil($total/$info_num); 
If($page>$pagenum || $page == 0){
  Echo"<script>alert('对不起！暂无数据！');history.go(-1);</script>";  
  Exit;
}
$offset=($page-1)*$info_num; 
$info=mysql_query("select * from workorder order by id desc limit $offset,$info_num");
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

<h1 class="h1 text-center">报销单列表</h1>

<div class="row col-md-10 col-md-offset-1">
<hr>
<table class="table table-hover table-striped table-bordered" style="border-radius: 5px; border-collapse: separate;" id="tbSign">        

<tr>
<td><center>订单号</center></td>
<td><center>消费内容</center></td>
<td><center>消费日期</center></td>
<td><center>消费人</center></td>
<td><center>消费地点</center></td>
<td><center>报销金额</center></td>
<td><center>备注</center></td>
<td><center>状态</center></td>

<?php while($rs=mysql_fetch_array($info)){ ?>
<tr>
<td><input type="checkbox"><?php echo $rs['orderid']; ?></td>
<td><center><?php echo $rs['ordername']; ?></center></td>
<td><center><?php echo $rs['ordertime']; ?></center></td>
<td><center><?php echo $rs['orderhuman']; ?></center></td>
<td><center><?php echo $rs['orderwhere']; ?></center></td>
<td><center><?php echo $rs['ordermoney']; ?></center></td>
<td><center><?php echo $rs['remarks']; ?></center></td>
<td><center><?php echo $rs['state']; ?></center></td>
<?php } ?>
</table>
</div>

</body>
</html>