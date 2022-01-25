<?php

require_once 'database/thronesDB.php';
require_once 'autoload.php';
require_once 'views/layout/header.php';

if (isset($_GET['controller'])) {
    $controllerName = $_GET['controller'] . 'Controller';

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
            $action = $_GET['action'];
            $controller->$action();
        } else {
            echo 'Acción no encontrada';
        }
    } else {
        echo 'El controlador ' . $_GET['controller'] . ' no existe';
    }
} else {
    header('Location: index.php?controller=Titles&action=showAll');
}

require_once 'views/layout/footer.php';