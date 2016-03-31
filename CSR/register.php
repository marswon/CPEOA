

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#4caf50">
<link rel="icon" sizes="180x180" href="logo.png">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/md5.js"></script>
<title>星河湾半岛酒店工程部OA | 首次登录认证</title>
</head>

<body><br>
<div class="container text-center">
<img src="img/logo.png" style="width:96px;">
<h3>星河湾半岛酒店工程部OA系统 | 用户激活</h3>
<hr>
<div class="row text-center">
<div class="well col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center col-xs-10 col-xs-offset-1">
<h3>欢迎回来 - 星河湾半岛酒店工程部</h3><br>
<form method="post" action="checkregi.php">
<div class="col-md-offset-2 col-md-8" style="line-height:12px;">
<div class="input-group">
	<span class="input-group-addon">登录名称</span>
	<input type="text" class="form-control" placeholder="请输入你的用户名" name="usr">
	<span class="input-group-addon" id="forgot">&lt;</span>
</div>
<div class="input-group">
	<span class="input-group-addon">您的密码</span>
  <input type="text" class="form-control" placeholder="请输入你的密码" name="pwd">
  <span class="input-group-addon" id="forgot">&lt;</span>
</div>
<div class="input-group">
	<span class="input-group-addon">确认密码</span>
  <input type="text" class="form-control" placeholder="请再次输入你的密码" name="vrfpw">
  <span class="input-group-addon" id="forgot">&lt;</span>
</div>
<div class="row"><hr></div>
<div class="input-group">
	<span class="input-group-addon">真实姓名</span>
  <input type="text" class="form-control" placeholder="您的尊姓大名" name="truename">
  <span class="input-group-addon" id="forgot">&lt;</span>
</div>
<div class="input-group">
	<span class="input-group-addon">个人工号</span>
  <input type="text" class="form-control" placeholder="请输入您的个人工号" name="workid">
  <span class="input-group-addon" id="forgot">&lt;</span>
</div>
<div class="input-group">
	<span class="input-group-addon">保留信息</span>
  <input type="text" class="form-control" placeholder="请输入账户保留信息，以便忘记密码时使用" name="remaininfo">
  <span class="input-group-addon" id="forgot">&lt;</span>
</div>
<div class="row"><hr>
<div class="input-group">
	<span class="input-group-addon">个人CPEOA-KEY</span>
  <input type="text" class="form-control" placeholder="输入您的个人CPEOA-KEY" name="key">
  <span class="input-group-addon" id="forgot">&lt;</span>
</div>


<br>
<input type="submit" class="btn btn-success" value="激 活 账 户" name="regi">
</button>
  </div>
</div>
</div>
</div>
</form>