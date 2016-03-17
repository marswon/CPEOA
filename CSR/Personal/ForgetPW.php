<?php
$flag=true;
require_once('/CSR/include/to_sql.php');
if($_POST){
$applyTRUENAME=$_POST['truename'];
$applyID=$_POST['id'];
$applyRMINFO=$_POST['rmf'];
$sql="select ID,RemainInfo from user where username='$applyTRUENAME'";
$rs=mysqli_fetch_array(mysqli_query($conn,$sql));
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
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap-switch.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/ripples.js"></script>
</head>

<body style="font-family:Microsoft YaHei">
<?php include("../include/shownav.php"); ?>
<h1 class="h1 text-center">哎呀~我忘记密码了！</h1>
<div class="row col-md-10 col-md-offset-1">
<hr>
<h2 class="h2 text-center">
不怕！有攻城狮在！<br>
只要你偷偷地把你的小秘密告诉我们<br>
攻城狮哥哥就可以帮到你哦！
</h2>
<div class="row">
<hr>
</div>
<form method="post">
<div class="form-group">
  <label for="inputTRUENAME"><font color="blue"><h4>你的尊姓大名</h4></font></label>
  <input type="text" name="truename" class="form-control" placeholder="别填错字了哦！否则攻城狮哥哥也帮不了你啊~">
</div>
<div class="form-group">
  <label for="inputID"><font color="green"><h4>你的工号</h4></font></label>
  <input type="text" name="id" class="form-control" placeholder="是在星河湾的工号，不是身份证号哦！">
</div>
<div class="form-group">
  <label for="inputRMF"><font color="red"><h4>你的账号保留信息</h4></font></label>
  <input type="text" name="rmf" class="form-control" placeholder="必须要填对啊！这可是对您尊贵身份的认证哦！">
</div>
<input type="submit" class="btn btn-success">
</form>