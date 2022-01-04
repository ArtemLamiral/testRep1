<?php


//Реализовать с помощью исключений

class Autoloader{

	public static function register()
	{
		spl_autoload_register(function($class){

			$file = __DIR__."\\".$class.'.php';

			echo $file;

			if(file_exists($file))
			{	
				require_once $file;

				return true;
			}else{
			}
			return false;
		});
	}
}

