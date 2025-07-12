<?php
// Definisikan path dasar
define('BASE_PATH', dirname(__DIR__));

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' :
    'PegawaiController';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
// Sertakan file controller
$controllerPath = BASE_PATH . '/controllers/' . $controllerName . '.php';
if (file_exists($controllerPath)) {
    include_once $controllerPath;
    $controller = new $controllerName();
    // Panggil action
    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        die("Action not found.");
    }
} else {
    die("Controller not found.");
}
