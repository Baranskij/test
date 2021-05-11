<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost", "root", "root")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");


mysqli_select_db($con, "registration_bd")
 or die("<p>Ошибка выбора базы данных!". mysql_error() . "</p>");

$sql_select = "SELECT * FROM users";
$result = mysqli_query($con, $sql_select);
$row = mysqli_fetch_array($result);



do
{
	printf("<p>Пользователь: " .$row['name'] . " " .$row['last_name'] ." " .$row['company_name'] ." " .$row['position'] ." </p> 
	<p><i>Контактные данные</i> " .$row['email'] .  " ".$row['facebook'] . "  " .$row['telephone1'] .  " ".$row['telephone2'] ."
     " .$row['telephone3'] .  "</p>");
}

while($row = mysqli_fetch_array($result));

?>
<a href="index.html">Добавить пользователя</a>
</body>
</html>