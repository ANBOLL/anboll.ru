<?php
session_start();
$title_meta = "Профиль" . $user["username"];
$style_data = [
    "/profile/style.css",
];
$script_data = [
    "/profile/script.js",
];
include_once("views/header.php");
?>
<div class="l-container">
    <?php if ($user) { ?>
        <h1>Привет, <?=htmlspecialchars($user['username'])?>! Я позже займусь личным кабинетом, кста, все профили буду удалены(когда я буду заливать финальные правки по ЛК), так что не удивляйся если вдруг не получится войти, пока это все тестовый режим</h1>
        <form class="mt-5" method="post" action="/views/auth/do_logout.php">
            <button type="submit" class="c-button">Выйти из личного кабинета</button>
        </form>
    <?php } ?>
</div>
<?php
include_once("views/footer.php");
?>