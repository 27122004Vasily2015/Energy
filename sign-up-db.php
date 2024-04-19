<?php 
session_start();
require "connect-db.php";
$email =strip_tags(trim($_POST['login'])); 
$pass =strip_tags(trim($_POST['pass'])); 

if(mb_strlen($email) < 5 || mb_strlen($email) > 100){
	echo "Недопустимая длина логина";
	exit();
}


$result1 = mysqli_query($con,"SELECT * FROM `Users` WHERE `Email` = '$email'");
$user1 = mysqli_fetch_assoc($result1); 
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}else {
	$queryUser= mysqli_query($conn, "SELECT * FROM `Users` WHERE `Email`='$email' and `Password`='$pass'");
	$queryUser = mysqli_fetch_array($queryUser);
	$idUser = $queryUser["User_id"];
	setcookie('User_id',$idUser, time()+3600, "/");

    mysqli_query($con,"INSERT INTO `Users` (`Email`, `Password`,`Bonus_points`)VALUES('$email', '$pass', '0')");

	$_SESSION["User_id"] = mysqli_insert_id($con);

    header('Location: account.php');
}
