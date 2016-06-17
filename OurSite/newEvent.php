<?php
include("connect.php");
if ($_POST["sure"])
{
	if (!mysql_fetch_array(mysql_query("SELECT * FROM `active` WHERE `name`='" . $_POST["name"] . "'")))
	{
		$sql = mysql_query("INSERT INTO `active` (`name`, `introduction`, `date`, `time`, `place`, `amount`, `participate`, `link`, `host`, `tag`, `image`) VALUES ('"  . $_POST["name"] . "', '" . $_POST["introduction"] . "', '" . $_POST["date"] . "', '" . $_POST["time"] ."', '" . $_POST["place"] ."', '" . $_POST["amount"] ."', '" . $_POST["participate"] . "', '" . $_POST["link"] . "', '" . $_POST["host"] . "', '" . $_POST["tag"] . "', '" . $_FILES["image"]["name"] . "')");
	    move_uploaded_file($_FILES["image"]["tmp_name"], "images/event/" . $_FILES["image"]["name"]);
		echo "<script>alert('Success!');";
    	echo "location.href='home.php'</script>";
	}
	else
	{
		echo "<script>alert('Event is exist!');";
    	echo "location.href='eventEdit.php'</script>";
	}
}
?>