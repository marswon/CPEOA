<?php

if($_POST){
$NAME=md5($_POST['truename']);
$ID=md5($_POST['id']);
$_SESSION['N']=$_POST['truename'];
$_SESSION['I']=$_POST['id'];
$RANDOM=mt_rand(mt_rand(16888,38888),mt_rand(52888,88888));
$TOTAL=strtoupper(md5($NAME.$ID.$RANDOM));


$Random1=substr($TOTAL,mt_rand(0,4),3);

$Random21=substr($TOTAL,mt_rand(7,9),2);
$Random22=substr($TOTAL,mt_rand(11,13),3);
$Random2=$Random22.$Random21;

$Random3=substr($TOTAL,mt_rand(16,19),3);

$Random41=substr($TOTAL,mt_rand(22,24),2);
$Random42=substr($TOTAL,mt_rand(26,28),3);
$Random4=$Random42.$Random41;


$LAST=$Random2.$Random4.$Random1.$Random3;

echo 'TRUENAME: '.$_POST['truename'].'<br>';
echo 'Work-ID: '.$_POST['id'].'<br><br>';
echo 'MD5 of truename: '.$NAME.'<br>';
echo 'MD5 of ID: '.$ID.'<br>' ;
echo 'Random Math(length:5): '.$RANDOM.'<br>' ;
echo 'All-Code(length:32): '.$TOTAL.'<br><br>' ;
echo 'RandomKey-1(length:3): '.$Random1.'<br>'; 
echo 'RandomKey-2(length:5): '.$Random2.'<br>'; 
echo 'RandomKey-3(length:3): '.$Random3.'<br>'; 
echo 'RandomKey-4(length:5): '.$Random4.'<br><br>';
echo 'CPEOA-KEY(length:16): '.$LAST;
}

?>
<html>
<meta charset="utf-8">
<body>
<form method="post">
<input name="truename" value=<?PHP echo $_SESSION['N'];?>> 
<input name="id" value=<?PHP echo $_SESSION['I'];?>>
<input name="post" type="submit">
</form>
</body>
</html>