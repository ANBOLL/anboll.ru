<?php
session_start();
$code = "Index";
include_once("views/header.php");
?>
<div class="l-container">
    <div class="Hero-block">
        <h1>Главная страница, когда то, тут будет чтото интересное...</h1>
    </div>
    <div class="homik-link">
        <a class="c-button" href="/homik/">Генератор ключа Hamster Kombat</a>
    </div>
</div>
<?php
include_once("views/footer.php");
?>