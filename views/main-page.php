<?php
session_start();
require_once __DIR__.'/auth/boot.php';
$code = "Index";
$title_meta = "ANBOLL";
$style_data = [
    "/main-page/style.css"
];
$component_data = [
    "popup",
];
$offset = false;
include_once("views/header.php");
?>
<div class="main-banner">
    <img src="/public/images/main-page/main-banner.webp" alt="">
    <div class="main-title l-container">
        Shoot for the Moon. Even if you miss, you'll lang among the stars
    </div>
</div>
<div class="l-container">
    <div class="temp-block">
        <div class="title-temp">Главная страница, когда то, тут будет чтото интересное...</div>
        <div class="homik-link">
            <a class="c-button" href="/homik/">Генератор ключа Hamster Kombat</a>
        </div>
    </div>
    
    <?
    $id = "login-popup";
    $content = '
    <div class="container">
        <div class="h1">Войти</div>
        <?php flash() ?>
        <form class="form" id="login-form" method="post" action="/views/auth/do_login.php">
            <div class="input-label-container">
                <input type="text" class="form-input" id="username" name="username" placeholder="Логин" required>
            </div>
            <div class="input-label-container">
                <input type="password" class="form-input" id="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="form-button">
                <button type="submit" class="c-button">Войти</button>
                <div class="register-btn c-button">Регистрация</div>
            </div>
        </form>
    </div>
    '; 
    include("views/components/popup/popup.php"); ?>

    <?
    $id = "register-popup";
    $content = '
    <div class="container">
        <div class="h1">Регистрация</div>
        <?php flash(); ?>
        <form class="form" id="register-form" method="post" action="/views/auth/do_register.php">
            <div class="input-label-container">
                <input type="text" class="form-input" id="username" name="username" placeholder="Логин" required>
            </div>
            <div class="input-label-container">
                <input type="password" class="form-input" id="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="form-button">
                <button type="submit" class="c-button">Регистрация</button>
                <div class="login-btn c-button">Войти</div>
            </div>
        </form>
    </div>
    '; 
    include("views/components/popup/popup.php"); ?>
</div>
<?php
include_once("views/footer.php");
?>