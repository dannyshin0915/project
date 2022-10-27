<?php
	include "../db3.php";

	$userid = $_POST['userid'];
	$userpw = $_POST['userpw'];
	$cpu = $_POST['cpu'];
	$ram = $_POST['ram'];
	$disk = $_POST['disk'];
	$volume = $_POST['volume'];

$sql = mq("insert into cloud (id,pw,cpu,ram,disk,volume) values('".$userid."','".$userpw."','".$cpu."','".$ram."','".$disk."','".$volume."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('클라우드 등록이 완료되었습니다..');
location.href='/index2.php';</script>"
<meta http-equiv="refresh" content="0 url=/">
