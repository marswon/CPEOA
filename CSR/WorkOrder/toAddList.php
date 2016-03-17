<?php
$flag=true;//SQL连接认证
require_once("../include/to_sql.php");
require_once("../include/isLoggedIn.php");
if($_POST){
  $applyID=$_POST['id'];
  $applyDEP=$_POST['dep'];
  $applyHUMAN=$_POST['human'];
  $applyCONTACT=$_POST['contact'];
  $applyPHONE=$_POST['phone'];
  $applyCONTENT=$_POST['content'];
  $applySTATUS=$_POST['status'];
  $applyTIME=$_POST['time'];
  $query="INSERT workorder(odid,oddep,odhuman,contact,phone,odcontent,status,odtime) VALUES('{$applyID}','{$applyDEP}','{$applyHUMAN}','{$applyCONTACT}','{$applyPHONE}','{$applyCONTENT}','{$applySTATUS}','{$applyTIME}')";
  $result=mysqli_query($conn,$query);
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

<!--Boot Date JS-->
<link rel="stylesheet" type="text/css" media="all" href="../css/daterangepicker-bs3.css" />
<script type="text/javascript" src="../js/moment.js"></script>
<script type="text/javascript" src="../js/daterangepicker.js"></script>
</head>

<body style="font-family:Microsoft YaHei">
<?php include("../include/shownav.php"); ?>

<h1 class="h1 text-center">新增一个工作单</h1>
<div class="row col-md-10 col-md-offset-1">
<hr>
<h1 class="h3 text-center">基本资料</h1>
<form method="post">
<div class="form-group">
  <label for="inputodid"><font color="blue"><h4>工作单编号</h4></font></label>
  <input type="text" name="id" class="form-control" placeholder="就算是一张单也有自己的“身份证”，请好好地填写哦~">
</div>
<label for="inputoddep"><font color="green"><h4>交单部门</h4></font></label>
<select class="form-control" name="dep">
  <option>中厨</option>
  <option>点心</option>
  <option>西餐</option>
  <option>中餐</option>
  <option>前台</option>
  <option disabled>---------</option>
  <option>康体中心</option>
  <option>礼宾部</option>
  <option>管家部</option>
</select>
<div class="form-group">
  <label for="inputcontact"><font color="green"><h4>联系人</h4></font></label>
  <input type="text" name="contact" class="form-control" placeholder="额……这张单应该找谁……">
</div>
<div class="form-group">
  <label for="inputphone"><font color="green"><h4>联系人电话</h4></font></label>
  <input type="number" name="phone" class="form-control" placeholder="叮铃铃~上班时不要打扰他人哦！">
</div>
<br>
<h4>开单日期：</h4>
<div class="well">
<fieldset>
<div class="control-group">
<div class="controls">
<div class="input-append date" name="datetimepicker" data-date="2012-02-12" data-date-format="yyyy-mm-dd">
<input type="text" style="width: 200px" name="time" id="time" class="form-control" value="<?php echo date('Y-m-d'); ?>">
</div>
</div>
</div>
</fieldset>
<script type="text/javascript">
$(document).ready(function() {
  $('#time').daterangepicker({
   singleDatePicker: true
  },
function(start, end, label) {
  console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>
</div>
 
<div class="form-group">
  <label for="inputodhuman"><font color="green"><h4>接单值工</h4></font></label>
  <input type="text" name="human" class="form-control" placeholder="这是谁接手的工作单？快来认领！">
</div>
</div>
<div class="row col-md-10 col-md-offset-1">
<hr>
<h3 class="h3 text-center">详细资料</h3>
<div class="form-group">
  <label for="inputodcontent"><font color="red"><h4>工作单内容</h4></font></label>
  <textarea class="form-control" cols="50" rows="6" name="content" placeholder="尽情地把所有文字都详细地写上吧！但记住不要超过300字哦！"></textarea> 
</div>
<label for="inputstatus"><font color="brown"><h4>工作单状态</h4></font></label>  
<input type="text" name="status" class="form-control" value="待派单" readonly="readonly">
<div class="row">
<hr>
<input type="submit" class="btn btn-primary" style="width:100%" name="add">
</form>
<div class="row">
<hr>
<?php include("../include/showbanner.php"); ?>
</div>
<div class="row">
<hr>
</div>
</div>  
</body>
</html>