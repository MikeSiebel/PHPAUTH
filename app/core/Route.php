<?php

namespace App\core;

class Route{
    public static function start()
    {
        $controllerClassname = 'home';
        $model = null;
        $actionName = 'index';
        $payload = [];
        
        //*$routes = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
        $routes = explode('/', $_SERVER['REQUEST_URI']);
      
       //var_dump($_SERVER['REQUEST_URI']);
       //echo '<br>';
       //var_dump($routes);
       //echo '$routes<br>';
       //var_dump($routes[1]);
       //echo '$routes[1]<br>';
       //echo '<br>';
       //die();


        if(!empty($routes[1]))
        { 
            //var_dump($routes[1]);
            //echo '$routes[1]<br>';
            $controllerClassname = $routes[1];
            //var_dump($controllerClassname);
            //echo '$controllerClassname<br>';
        }else{
            $controllerClassname = 'home';

        }
        //var_dump($controllerClassname);
        //echo '$controllerClassname<br>';
       
        if(!empty($routes[2]))
        {
            $actionName = $routes[2];
            //var_dump($actionName);
            //echo '$actionName<br>';
        }
        //var_dump($actionName);
        //echo '$actionName<br>';
        //die();
        $controllerName = CONTROLLER_NAMESPACE . ucfirst($controllerClassname);
        //var_dump(CONTROLLER_NAMESPACE);
        //echo 'CONTROLLER_NAMESPACE<br>';
        //var_dump($controllerName);
        //echo '$controllerName<br>';
        //$modelName = $actionName;
        $modelName = $controllerName;
        //var_dump($modelName);
        //echo '$modelName<br>';
        //die();   
        $modelFile = strtolower($controllerName) . '.php';
        //var_dump($modelFile);
        //echo '$modelFile<br>';
        //die();
        //var_dump(MODEL);
        //echo 'MODEL<br>';
        //**$modelPath = MODEL . $controllerClassname;
        $modelPath = MODEL . $modelFile;
        //var_dump($modelPath);
        //echo '$modelPath<br>';
        //die();

        if(file_exists($modelPath))
        {
           include_once MODEL . $modelFile;
            $model = new $modelName;
            //var_dump($model);
            //echo '$model<br>';
           //die();
        }
        $controllerFile = ucfirst(strtolower($controllerClassname)) . '.php';
        //var_dump($controllerFile);
        //echo '$controllerFile<br>';
        $controllerPath = CONTROLLER . $controllerFile;
        //var_dump($controllerPath);
        //echo '$controllerPath<br>';
        //die();
        if(file_exists($controllerPath))
        {
            include_once CONTROLLER . $controllerFile;
        }
        else
        {
            Route::ErrorPage404();
        }

        $controller = new $controllerName($model);
        //var_dump($controller);
        //echo '$controller<br>';
        //die();
        $action = $actionName;
        if(method_exists($controller, $action))
        {
            $controller->$action($payload);
        }
        else
        {
            Route::ErrorPage404();
        }
    }
    public static function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'. $host .'error');

    }
}