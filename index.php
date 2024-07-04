<?php
include_once("./App/Autoloader.php");
use App\Controllers\NewsController;

$controller = new NewsController();
$urlParts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$controllerPath = $urlParts[0];

if ($controllerPath) {
    $file = $controllerPath;
} else {
    $file = 'main-page';
}

if (is_string($file)) {
    if (file_exists('views/' . $file . ".php") && $file !== "header" && $file !== "footer") {
        echo $controller->render($file, array("style" => "/style/".$file."/".$file.".css"));
    } else {
        echo $controller->render('404', array("style" => "/style/404.css"));
    }
} else {
    echo 'Error: не корректный путь';
}