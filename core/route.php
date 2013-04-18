 <?php

//echo spl_autoload_extensions();
class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'Main';
        $actionName = 'index';
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if ( !empty($routes[1]) )
        {	
            $controllerName = $routes[1];
        }
        
        // получаем имя экшена
        if ( !empty($routes[2]) )
        {
            $actionName = $routes[2];
        }

        // добавляем префиксы
        $modelName = 'Model'.$controllerName;
        $controllerName = 'Controller'.$controllerName;
        $actionName = 'action'.$actionName;

        // подцепляем файл с классом модели (файла модели может и не быть)

        $modelFile = strtolower($model_name).'.php';
        $modelPath = "application/models/".$modelFile;
        if(file_exists($modelPath))
        {
            include "application/models/".$modelFile;
        }

        // подцепляем файл с классом контроллера
        $controllerFile = strtolower($controller_name).'.php';
        $controllerPath = "application/controllers/".$controllerFile;
        if(file_exists($controllerPath))
        {
            include "application/controllers/".$controllerFile;
        }
        else
        {
            /*
            правильно было бы кинуть здесь исключение,
            но для упрощения сразу сделаем редирект на страницу 404
            */
            Route::ErrorPage404();
        }
        
        // создаем контроллер
        $controller = new $controllerName;
        $action = $action_name;
        
        if(method_exists($controller, $action))
        {
            // вызываем действие контроллера
            $controller->$action();
        }
        else
        {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    
    }
    
    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}