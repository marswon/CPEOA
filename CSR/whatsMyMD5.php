<?php
if($_POST){
$p=$_POST['pw'];
ECHO $p;

//MD5加密的次数
$times=mt_rand(mt_rand(10,20),mt_rand(40,50));
for ($i=0; $i < $times; $i++) { 
	$p=md5($p);
	echo $p."<br>";
}

//取随机SALT值
//1. 设定SALT总值
$ALLsalt="1A2S3D4F5G6HJ8K9QWERTYUPZXCVBNM";
//2. 随机抽取位数，并抽取对应字符，循环6次。
for ($s=0; $s < 6; $s++) { 
	$RDsalt=mt_rand(0,30);
	$salt=$salt.$ALLsalt{$RDsalt};
}

//最后将加密值和SALT结合
$pass=md5($p.$salt);
echo "times: ".$times."<br>";
echo "pass: ".$p."<br>";
echo "salt: ".$salt."<br>";
echo "indb: ".$pass."<br>";
}
?>
<br>
<form method="post">
<input type="text" name="pw">
<input type="submit">
</form>
