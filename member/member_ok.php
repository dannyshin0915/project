<?php
	include "../db2.php";
	include "../password.php";

	$userid = $_POST['userid'];
	$userpw = $_POST['userpw'];
	$username = $_POST['name'];
	$adress = $_POST['adress'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];

$sql = mq("insert into member (id,pw,name,adress,sex,email) values('".$userid."','".$userpw."','".$username."','".$adress."','".$sex."','".$email."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');
location.href='/index2.php';</script>"
<meta http-equiv="refresh" content="0 url=/">
