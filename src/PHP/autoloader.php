<?php

class Autoloader{

	public static function register()
	{
		spl_autoload_register(function($class){

			$file = __DIR__."\\".$class.'.php';

			if(file_exists($file))
			{	
				require_once $file;

				$my_obj = new Controller\IndexController();
				echo $my_obj->index();

				return true;
			}else{
			}
			return false;
		});
	}
}

Autoloader::register();