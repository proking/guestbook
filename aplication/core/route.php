<link href="/guestbooktwo/aplication/css/bootstrap.css" rel="stylesheet"  type="text/css" >
<link href="/guestbooktwo/aplication/css/bootstrap.min.css" rel="stylesheet"  type="text/css" >
<link href="/guestbooktwo/aplication/css/style.css" rel="stylesheet"  type="text/css" >
<?php

class Route {

    static function start() {
        /** ���������� � 䳿 �� ������������ */
        $controllerName = 'Messages';
        $actionName = 'main';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // print_r($routes);
        /** ������� ��� ����������� */
        if (!empty($routes[2])) {
            $controllerName = $routes[2];
        }

        /** �������� ��� ������ */
        if (!empty($routes[3])) {
            $actionName = $routes[3];
        }
        /** ��������� �������� */
       // $modelName = 'Model_' . $controllerName;
        $controllerName = 'Controller_' . $controllerName;
        $actionName = 'action' . $actionName;
     
        $controllerFile = strtolower($controllerName) . '.php';
        $controllerPath = "aplication/controllers/" . $controllerFile;
        if (file_exists($controllerPath)) {
            include_once "aplication/controllers/" . $controllerFile;
        } else {
            Route::ErrorPage404();
        }

        /** �������� ���������� */
        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            /** �������� 䳿 ����������� */
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
    }

}

//$obj = new Route();
//$obj    -> start();
