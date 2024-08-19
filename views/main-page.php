<?php
session_start();
$code = "Index";
$title_meta = "ANBOLL";
$style_data = [
    "/main-page/style.css"
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
</div>
<?php
include_once("views/footer.php");
?>