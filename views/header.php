<?php
require_once __DIR__.'/auth/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <link type="image/x-icon" href="/public/images/site/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/style/config.css">
    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/footer.css">
    <script src="/script/header/script.js"></script>
    <script src="/script/footer/script.js"></script>
    <?php if(isset($data["style"])) {?>
    <link rel="stylesheet" href="<?=$data["style"] ? $data["style"] : ''?>">
    <?php } ?>
    <?php 
        $component_data = [
            "popup",
        ];
        $offset = $offset ?? true;
        $style_data = $style_data ?? [];
        $script_data = $script_data ?? [];
        $component_data = $component_data ?? [];

        if($style_data) {
            foreach ($style_data as $value_style) {
                echo "<link rel=\"stylesheet\" href=\"/style" . $value_style . "\">";
            }
        }
        if($script_data) {
            foreach ($script_data as $value_script) {
                echo "<script src=\"/script" . $value_script . "\"></script>";
            }
        }
        if($component_data) {
            foreach ($component_data as $value_component) {
                echo "<script src=\"/views/components/" . $value_component . "/" . $value_component . ".js" . "\"></script>";
                echo "<link rel=\"stylesheet\" href=\"/views/components/" . $value_component . "/" . $value_component . ".css" . "\">";
            }
        }
    ?>
    <title><?= $title_meta = $title_meta ?? "ANBOLL" ?></title>
</head>

<body>
    <header class="<?= $offset ? 'offset' : ''?>">
        <div class="header-wrapper">
            <div class="l-container">
                <div class="header-content">
                    <?php if ($_SERVER['REQUEST_URI'] != '/') {?>
                        <a href="/" class="logo-link"></a>
                    <?php } else {?>
                        <div href="/" class="logo"></div>
                    <?php } 
                    if ($user !== null) {?>
                        <a href="/profile/" title="Личный кабинет" class="profile user"></a>
                    <?php } else {?>
                        <div title="Вход" class="profile login"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <main>
    <?
    $id = "login-popup";
    $content = '
    <div class="h1">Войти</div>
    <?php flash() ?>
    <form class="form" id="login-form" method="post" action="/views/auth/do_login.php">
        <div class="input-label-container">
            <input type="text" class="form-input" name="username" placeholder="Логин" required>
        </div>
        <div class="input-label-container">
            <input type="password" class="form-input" name="password" placeholder="Пароль" required>
        </div>
        <div class="form-button">
            <button type="submit" class="c-button">Войти</button>
            <div class="register-btn c-button">Регистрация</div>
        </div>
    </form>
    '; 
    include("views/components/popup/popup.php"); ?>

    <?
    $id = "register-popup";
    $content = '
    <div class="h1">Регистрация</div>
    <?php flash(); ?>
    <form class="form" id="register-form" method="post" action="/views/auth/do_register.php">
        <div class="input-label-container">
            <input type="text" class="form-input" name="username" placeholder="Логин" required>
        </div>
        <div class="input-label-container">
            <input type="password" class="form-input" name="password" placeholder="Пароль" required>
        </div>
        <div class="form-button">
            <button type="submit" class="c-button">Регистрация</button>
            <div class="login-btn c-button">Войти</div>
        </div>
    </form>
    '; 
    include("views/components/popup/popup.php"); ?>