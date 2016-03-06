<?php
/*

发明者:Small Oyster Studio 小生蚝工作室
原理:
1.加密[姓名]和[工号]
2.从随机的两个数字范围内 获取 [随机五位数]
3.将三要素合并后 加密并转换为大写 成为[总码]
4.把[总码]平分成前后两部分 
5.从[总码]两部分中各随机抽取8位数字
6.将两个8位数字串 对调 前后顺序
7.得出 CPEOA-KEY激活码

*/
if($_POST){
$NAME=md5($_POST['truename']);
$ID=md5($_POST['id']);
$RANDOM=mt_rand(mt_rand(16888,28888),mt_rand(52888,88888));
$TOTAL=strtoupper(md5($NAME.$ID.$RANDOM));
$RandomTOTAL1=substr($TOTAL,mt_rand(1,8),8);
$RandomTOTAL2=substr($TOTAL,mt_rand(9,16),8);
$LAST=$RandomTOTAL2.$RandomTOTAL1;
echo 'MD5 of truename: '.$NAME.'<br>';
echo 'MD5 of ID: '.$ID.'<br>' ;
echo 'Random Math(length:5): '.$RANDOM.'<br>' ;
echo 'All-Code: '.$TOTAL.'<br>' ;
echo 'RandomKey-1(length:8): '.$RandomTOTAL1.'<br>'; 
echo 'RandomKey-2(length:8): '.$RandomTOTAL2.'<br>';
echo 'CPEOA-KEY(length:16): '.$LAST;
}

?>
<html>
<body>
<form method="post">
<input name="truename"> 
<input name="id">
<input name="post" type="submit">
</form>
</body>
</html>