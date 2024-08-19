<?php
session_start();
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
    <? include("views/components/popup/popup.php"); ?>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-6">
                <?php if ($user) { ?>
                <h1>Welcome back, <?=htmlspecialchars($user['username'])?>!</h1>
                <form class="mt-5" method="post" action="/views/auth/do_logout.php">
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
                <?php } else { ?>
                <h1 class="mb-5">Registration</h1>
                <?php flash(); ?>
                <form method="post" action="/views/auth/do_register.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <a class="btn btn-outline-primary" href="/views/auth/login.php">Login</a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once("views/footer.php");
?>