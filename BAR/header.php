<?php
session_start();

?>
<link rel="stylesheet" href="style.css">

<header> 
        <div class="header_nav"> 
            <div class="nav_left"> 
            <ul> 
                <li><a href=""><img src="images/menu.png" alt="">МЕНЮ</a></li> 
                <li><a href="index.php"><img src="images/hurt.png" alt="">О НАС</a></li> 
                <li><a href="catalog.php"><img src="images/cart.png" alt="">ТОВАРЫ</a></li> 
                <form action="reg.php"><li><a href="reg.php">ВОЙТИ</a></form></li> 
            </ul> 
            </div> 
 
            <div class="nav_right"> 
                <form action="auto.php"><img src="images/account.png" alt=""></form>
            </div> 
        </div> 
    </header> 
 
<!-- <header  content="width=device-width, initial-scale=1"> 
    <div class="header_nav"> 
            <div class="nav_left">
                <img src="images\Group 8192.png" alt="" class="logo">
                <h1>БарШик</h1>
                <div class="naw-menu">
                <ul>
                <li><a href="/">Главная</a></li> 
                <li><a href="/catalog.php">Каталог</a></li> 
                </ul>   
                    <a href="#footer">Контакты</a>
                    <?php if(isset($_SESSION["User_id"])){?>
                        <ul>
                        <li><a href="/personal-cab.php">Личный кабинет</a></li> 
                        <li><a href="/cart.php">Корзина</a></li> 
                        <li><a href="/logout.php">Выйти</a></li> 
                        </ul> 
                   <?php }else{ ?>
                    <a href="auto.php">Войти</a>
                    <?php } ?>
            </div>
        </div>
    </header> -->