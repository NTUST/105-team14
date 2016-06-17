<?php
include("connect.php");
session_start();
if ($_POST["sure"])
{
	if (mysql_fetch_array(mysql_query("SELECT * FROM `member` WHERE `user`='" . $_POST["user"] . "'")))
	{
		echo "<script>alert('The name has been used!');";
		echo "location.href='loginAndRegister.php?method=register';</script>";
	}
	else if ($_POST["user"] == "" || $_POST["password"] == "")
	{
		echo "<script>alert('Please write down your informations to apply!');";
		echo "location.href='loginAndRegister.php?method=register';</script>";
	}
	else
	{
		$sql = mysql_query("INSERT INTO `member` (`user`, `password`) VALUES('" . $_POST["user"] . "', '" . $_POST["password"] . "')");
		$_SESSION["login"] = "user";
		echo "<script>alert('Register successfully!');";
		echo "location.href='home.php';</script>";
	}
}
?>