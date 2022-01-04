<?php

namespace Controller;

class IndexController{
	
	public function __construct()
	{
		echo "Sheesh, obj was created!";
	}

	public function index()
	{
		$index_html = "<div> <h1> Hello,world </h1> </div>";

		return $index_html;
	}
}