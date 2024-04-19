<?php 
require "connect-db.php";

$UserId = $_COOKIE['User_id'];
$newEmail = trim($_POST['login']);
$newPass = trim($_POST['password']);

$changeUser = mysqli_query( $conn , "UPDATE `Users` SET `Email`='$newEmail',`Password`='$newPass'  WHERE `User_id`= $UserId");

if($changeUser){
    echo "<script>
    alert(\"Данные успешно изменены\");
    location.href='account.php';
    </script>";
}
?>