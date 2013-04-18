<link href="/guestbooktwo/aplication/css/bootstrap.css" rel="stylesheet"  type="text/css" >
<link href="/guestbooktwo/aplication/css/bootstrap.min.css" rel="stylesheet"  type="text/css" >
<link href="/guestbooktwo/aplication/css/style.css" rel="stylesheet"  type="text/css" >
<?php

class Route {

    static function start() {
        /** êîíòğîëëåğ ³ ä³¿ ïî çàìîâ÷óâàííş */
        $controllerName = 'Messages';
        $actionName = 'main';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // print_r($routes);
        /** îòğèìóºì ³ìÿ êîíòğîëëåğà */
        if (!empty($routes[2])) {
            $controllerName = $routes[2];
        }

        /** ïîëó÷àåì èìÿ åêøåíà */
        if (!empty($routes[3])) {
            $actionName = $routes[3];
        }
        /** äîáàâëÿºì ïğåô³êñè */
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

        /** ñòâîğşºì êîíòğîëëåğ */
        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            /** âèêëèêàºì ä³¿ êîíòğîëëåğà */
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
    }

}

//$obj = new Route();
//$obj    -> start();
