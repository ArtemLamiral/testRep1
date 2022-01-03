<?php

//Настроить маршрутизацию на сайте
//Написать базовые программы
//Базовый стиль


class A{

	public $value = 1;
}

$a = new A;
$b = $a;

$b->value++;

echo $a->value;

$c = new A;
$d = &$c;

$d->value++;

echo $a->value."\n";

/*
require "src\PHP\autoloader.php";

use scr\PHP\Controller\IndexController;

$my_obj = new IndexController();  
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
	exit;
}

$controller_name = strtolower($routes[0]);
$controller_name = ucfirst($controller_name);
 
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
}*/


#var_dump($my_obj);

 
