<?php
	error_reporting(E_ALL &~ E_NOTICE);
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$connDb="event_profile";
	$dblink = @mysql_connect($hostname, $username, $password);
	@mysql_select_db($connDb,$dblink) or die("Could not select database");
	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER_SET_CLIENT=utf8"); 
	mysql_query("SET CHARACTER_SET_RESULTS=utf8");
	putenv("TZ=Asia/Taipei");
?>