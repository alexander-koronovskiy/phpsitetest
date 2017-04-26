<?php

class Router
{
	//массив, хранящий маршруты
	private $routes;
	
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php'; //путь к правилам
		$this -> routes = include($routesPath);
	}
	
	
	//функция получения URI адреса
	/**	
	* Returns request string
	* @return string
	*/
	private function getURI(){
		if (!empty($_SERVER['REQUEST_URI']))
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	
	
	//принимает уравление от фронт-контроллера
	public function run()
	{
		/*
		print_r($this->routes);
		echo 'Class Router, method run';
		*/
		
		//получение строки запроса
		$uri = $this -> getURI();
		//echo $uri;
		
		//проверка наличия запроса в routes.php (правилах) с помощью перебора в цикле
		foreach ($this -> routes as $uriPattern => $path){
			//echo "<br>$uriPattern -> $path";
			//сравнение $uriPattern и $uri
			if (preg_match("~$uriPattern~", $uri)){
				//определить, какой контроллер и action обрабатывают запрос
				
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				
				$segments = explode('/', $internalRoute);
				
				//правило наименования файла
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
				
				$actionName = 'action'.ucfirst(array_shift($segments));
				
				$parameters = $segments;
				
				//подключение файла класса-контроллера
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				
				if (file_exists($controllerFile)){
					include_once($controllerFile);
				}
				//создание объекта класса контроллера - вызов метода
				
				$controllerObject = new $controllerName;
				
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				
				//$result = $controllerObject -> $actionName();
				
				if ($result != null){
					break;
				}
				
			}
		}
	}
}

?>