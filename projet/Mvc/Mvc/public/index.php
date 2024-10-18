<?php

session_start(); // Démarrer la session

require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../core/Repository.php';

require_once '../app/controllers/TaskController.php';
require_once '../app/models/Task.php';
require_once '../app/repositories/TaskRepository.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url) {
    // Séparer les parties de l'URL
    $url = explode('/', $url);

    // Le premier segment correspond au contrôleur
    $controller = ucfirst($url[0]) . 'Controller';
    // Le deuxième segment correspond à l'action
    $action = isset($url[1]) ? $url[1] : 'index';
    // Le troisième segment correspond à l'ID ou autre paramètre
    $id = isset($url[2]) ? $url[2] : null;
} else {
    // Par défaut, charger le contrôleur TaskController et l'action index
    $controller = 'TaskController';
    $action = 'index';
    $id = null;
}

// Appeler le contrôleur et l'action
if (class_exists($controller) && method_exists($controller, $action)) {
    $controllerInstance = new $controller();
    $controllerInstance->$action($id);
} else {
    echo "Erreur 404 : Contrôleur ou action non trouvée.";
}
