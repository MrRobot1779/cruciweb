<?php
require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/core/Database.php';
require_once __DIR__ . '/../app/core/View.php';

// Simple routing (can be expanded)
$controller = $_GET['controller'] ?? 'grid';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';
require_once __DIR__ . '/../app/controllers/' . $controllerName . '.php';

$controllerInstance = new $controllerName();
if (method_exists($controllerInstance, $action)) {
    $controllerInstance->$action();
} else {
    die("Action $action not found.");
}
