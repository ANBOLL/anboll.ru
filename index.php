<?php
include_once("./App/Autoloader.php");
require_once __DIR__.'/views/auth/boot.php';
use App\Controllers\NewsController;

$controller = new NewsController();
$urlParts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$controllerPath = $urlParts[0];

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($controllerPath) {
    $file = $controllerPath;
} else {
    $file = 'main-page';
}

if (is_string($file)) {
    if (file_exists('views/' . $file . ".php") && $file !== "header" && $file !== "footer") {
        echo $controller->render($file, array("style" => "/style/".$file."/".$file.".css", "user" => $user));
    } else {
        echo $controller->render('404', array("style" => "/style/404.css"));
    }
} else {
    echo 'Error: не корректный путь';
}