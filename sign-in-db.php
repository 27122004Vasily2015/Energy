<?php
    require "connect-db.php";
    $email = strip_tags(trim($_POST['login']));
    $pass = strip_tags(trim($_POST['pass']));

    $result = mysqli_fetch_assoc($result);

    if(empty($user)){
        if ($email == "admin"){
            session_start();

            $_SESSION["User_id"] = $user["User_id"];
    
            header('Location: admin/index.php');
        } else {
        session_start();

        $_SESSION["User_id"] = $user["User_id"];

        header('Location: account.php');}
    } 
?>