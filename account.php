<?php
    include "connect-db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Привет! <?=$_COOKIE["email"]?></h1> 
	<a href="exit.php">Что бы выйти нажмите по ссылке.</a>

</body>
</html>