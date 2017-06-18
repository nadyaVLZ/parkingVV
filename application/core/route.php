<?php 

//Определение запрашиваемой страницы
class Route
{
	static function start()
	{
		$controller_name = 'Main';  // контроллер по умолчанию
		$action_name = 'index'; 	// действие по умолчанию
		$routes = explode('/', $_SERVER['REQUEST_URI']); // получение массива из строки по разделителям

		if (!empty($routes[1])) $controller_name = $routes[1]; 	// название контроллера
		
		if (!empty($routes[2])) $action_name = $routes[2];		// название действие

		$model_name = 'Model_'.$controller_name;  				
		$controller_name = 'Controller_'.$controller_name;		
		$action_name = 'action_'.$action_name;

		$model_file = strtolower($model_name).'.php';  
		$model_path = "application/models/".$model_file;			// путь к модели
		if(file_exists($model_path)) include $model_path;   		//подключение модели, если существует


		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;  // путь к контроллеру
		if(file_exists($controller_path)) include $controller_path;		// подключение к контроллеру, если существует
		else Route::ErrorPage404();										
		
		$controller = new $controller_name;
		$action = $action_name;
		if(method_exists($controller, $action)) {$controller->$action();}	// 	вызов действия		
		else Route::ErrorPage404();
	}

	static function ErrorPage404()
	{
        ?>

		<p> <img src="http://vchnews.ca/wp-content/uploads/2016/10/ThinkstockPhotos-604826510-1.jpg" width = "100%""> </p>
		<?
    }
}
