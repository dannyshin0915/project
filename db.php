<?php

	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	$db = new mysqli("172.17.0.3","usersamadal","samadal","member"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>
