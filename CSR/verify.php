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
	$username=mysqli_real_escape_string($conn,$username);
	$p=$_POST['password'];
	$query="select pw,truename from user where username='{$username}'";
	$result=mysqli_fetch_array(mysqli_query($conn,$query));
	if(!$result){die('0');}
	$pwd=$result['pw'];
	$truename=$result['truename'];
	if($p=md5($pwd)){
		session_start();
		$_SESSION['logged']=true;
		$_SESSION['adminname']=$username;
		$_SESSION['truename']=$truename;
		$token=random(16).';';
		$_SESSION['token']=$token;
		die('1|'.$token);
	}
	die('0');//<br>Y:'.md5($all)."<br>S:".$pwd."<br>salt:".$salt);
?>