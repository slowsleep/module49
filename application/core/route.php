<?php
class Route
{
	public static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		$routes = isset($_GET['page']) ? $_GET['page'] : '';

		// получаем имя контроллера и действия из url
		if (!empty($routes)) {
			$routes = explode('/', $routes);

			if (count($routes) == 1) {
				$controller_name = $routes[0];
			} else if (count($routes) == 2) {
				$controller_name = $routes[0];
				$action_name = $routes[1];
			}
		}

		// добавляем префиксы
		$model_name = 'model_' . $controller_name;
		$controller_name = 'controller_' . $controller_name;
		$action_name = 'action_' . $action_name;
		// подцепляем файл с классом модели (файла модели может и не быть)
		$model_file = strtolower($model_name) . '.php';
		$model_path = "application/models/" . $model_file;

		if (file_exists($model_path)) {
			include "application/models/" . $model_file;
		}
		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name) . '.php';
		$controller_path = "application/controllers/" . $controller_file;

		if (file_exists($controller_path)) {
			include "application/controllers/" . $controller_file;
		} else {
			self::ErrorPage404();
			return;
		}

		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;

		if (method_exists($controller, $action)) {
			// вызываем действие контроллера
			if (file_exists($model_path)) {
				$model_data = new $model_name();
				$controller->$action($model_data->get_data());
			} else {
				$controller->$action();
			}
		} else {
			self::ErrorPage404();
			return;
		}
	}
	public static function ErrorPage404()
	{
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 Not Found');

		$view = new View();
		$view->generate('404_view.php', 'layout/layout_view.php', 'Страница не найдена');

		exit();
	}
}
