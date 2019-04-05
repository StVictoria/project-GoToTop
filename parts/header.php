<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/config.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:300,400" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_logo_line">
                <div class="logo"></div>
                <div class="logo_text">go to<p class="colortext">top</p></div>
            </div>
            <div class="header_main_menu">
                <a href="/" style="color: #02bcef;">Главная</a>
                <a href="#" class="our_news">Новости</a>
                <a href="#" class="about_us">О компании</a>
                <a href="#" class="contacts">Контакты</a>
            </div>
            <div class="burger">
                <div></div>
            </div>
        </div>
    </div>