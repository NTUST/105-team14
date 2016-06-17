<?php
include("connect.php");
session_start();
if ($_POST["sure"])
{
	if ($data = mysql_fetch_array(mysql_query("SELECT * FROM `member` WHERE `user`='" . $_POST["user"] . "'")))
	{
		if ($data["password"] == $_POST["password"])
		{
			$_SESSION["login"] = "user";
			echo "<script>alert('success!');";
			echo "location.href='home.php';</script>";
		}
		else
		{
			echo "<script>alert('Wrong password!');";
			echo "location.href='loginAndRegister.php?method=login&user=" . $_POST["user"] . "';</script>";
		}
	}
	else
	{
		echo "<script>alert('User is not exist!');";
		echo "location.href='loginAndRegister.php?method=login';</script>";
	}
}
?>