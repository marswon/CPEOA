<?php session_start(); ?>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
<a class="navbar-brand" href="/CSR/index.php?token=<?php echo $_SESSION["token"]?>">星河湾半岛酒店工程部OA <span class="label label-danger">CPEOA Beta1.0</span></a></div>

<div class="collapse navbar-collapse" id="defaultNavbar1">
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
<span class="glyphicon glyphicon glyphicon-tasks" aria-hidden="true"></span> 工作单管理
<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">

  <li><a href="/CSR/WorkOrder/toList.php?token=<?php echo $_SESSION["token"]?>">工作单列表</a></li>
  <li><a href="/CSR/WorkOrder/toAddList.php?token=<?php echo $_SESSION["token"]?>">新增工作单</a></li>  <?php if($_SESSION['qx']>=4){ ?>
  <li role="separator" class="divider"></li>
  <li><a href="/CSR/WorkOrder/toReturn.php?token=<?php echo $_SESSION["token"]?>">退单操作</a></li>
  <?php if($_SESSION['qx']>=8){ ?>
  <li><a href="/CSR/WorkOrder/toManage.php?token=<?php echo $_SESSION["token"]?>">管理所有工作单</a></li>
  <?php } } ?>

</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 采购单管理
<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
  <li><a href="/CSR/PurchaseOrder/toList.php?token=<?php echo $_SESSION["token"]?>">采购单列表</a></li>
</ul>
</li>
        
<?php if($_SESSION['qx']==10){ ?>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
<span class="glyphicon glyphicon glyphicon-cog" aria-hidden="true"></span> 系统后台管理
<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<!--网站正式发布前一定要删除此句！-->
  <li><a href="/phpmyadmin/db_structure.php?server=1&db=u680304543_csr&token=5b5c94781dc19a5f498bfdbeda37daab" target="_blank">本地数据库后台</a></li>
  <li><a href="http://cpanel.hostinger.com.hk" target="_blank">服务器管理中心</a></li>
  <li><a href="http://sql17.hostinger.com.hk/phpmyadmin/index.php?db=u680304543_csr" target="_blank">PhpMyAdmin</a></li>
</ul>
</li>
<?php } ?>
</ul>


<!--Role and Username-->
    <ul class="nav navbar-nav navbar-right">
    <li>您好，<font color="blue"><?php echo $_SESSION['truename']; ?></font>
    <br>角色：<font color="red"><?php echo $_SESSION['role']; ?></font></li>
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img style="width:18px;border-radius:9px;" src="/img/user.png"></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><b><?php echo($_SESSION['adminname']); ?></b></a></li>
            <li class="divider"></li>
            <li><a href="/CSR/Personal/toPersonalInfo.php">个人信息</a></li>
            <li><a href="/CSR/Personal/toModifyPW.php">修改密码</a></li>
            <li class="divider"></li>
            <li><a href="/CSR/logout.php">退出登录</a></li>
          </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
