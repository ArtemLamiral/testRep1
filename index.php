<?php

class Pasha{
	private bool $soset_chlen = true;

	public $val;

	public function __construct(){
		$this->val = 2;
	}

	public function print(): void
	{
		echo $this->val;
	}
}


$myObj = new Pasha();

echo json_encode($myObj);


/*
require "src\PHP\autoloader.php";

use Controller\IndexController;

$my_obj = new IndexController();  
*//*
use App\Controllers as Controllers;


$request = $_SERVER['REQUEST_URI'];

$routes = explode('/',$request);
$routes = array_slice($routes, 1);

//Index
if(count($routes) == 1)
{	
	$index_path = "src/View/index.php";

	if(file_exists($index_path))
	{
		require($index_path);
	}
	else
	{

	}
}

$controller_name = strtolower($routes[0]);
$controller_name = ucfirst($controller_name);

$controller_name = "Controllers\\".$controller_name."Controller";

require_once "src\PHP\autoloader.php";
Autoloader::register();

echo $controller_name;

$controller = new $controller_name();

/*
$action_name = strtolower($routes[1]);

$controller_path = "src/PHP/Controller/".$controller_name.".php";
$action_path = "src/".$controller_name;

echo $controller_path;

if(file_exists($controller_path))
{
	require($controller_path);
	$controller = new $controller_name();

	$controller->$action_name();

}else
{
	echo "404 PAGE NOT FOUND";
}

#var_dump($my_obj);

 
*/