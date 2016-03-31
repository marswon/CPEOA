<html>
<body>
<form method="post">
<input type="text" name="username">
<input type="text" name="password">
<input type="submit">
</form>
</body>
</html>

<?php
	function random($len) {
   		$srcstr = "6K2D8U9B0L3S7W4Q";
   	 	mt_srand();
	   	$strs = "";
   		for ($i = 0; $i < $len; $i++) {
  	 	    $strs .= $srcstr[mt_rand(0, 15)];
  	 	}
   		return $strs;
	}
	
	if(!$_POST){
		die();
	}
	
	if(!isset($_POST["password"]) || !isset($_POST['username'])){
		die();
	}
	

	$flag=true;
	require_once("include/to_sql.php");
	$username=$_POST['username'];
	$md5pass=$_POST['password'];
	$query="select pw,truename,mdtime,salt from user where username='{$username}'";
	$result=mysqli_fetch_array(mysqli_query($conn,$query));
	if(!$result){die('0');}

	$pwd=$result['pw'];
	$truename=$result['truename'];
	$times=$result['mdtime'];
	$salt=$result['salt'];

	for($t=0; $t < $times; $t++){
	  $md5pass=md5($md5pass);
	  echo $md5pass."<br>";
	}

  $pass=md5($md5pass.$salt);
  echo "<br><br>加密后的密码".$md5pass."<br>密文".$salt."<br>次数".$times."<br>数据库密码".$pwd."<br>完成后密码".$pass."<br>";
	
	if($pass==$pwd){
		session_start();
		$_SESSION['logged']=true;
		$_SESSION['adminname']=$username;
		$_SESSION['truename']=$truename;
		$token=random(16).';';
		$_SESSION['token']=$token;
		die('1|'.$token);
	}
	
	die();
?>

