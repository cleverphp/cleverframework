<?php

	//you should pay attention to include module only once,but you can use module many times.
	//THIS FRAMEWORK DESIGN MAINLY REFERENCE PYTHON MODULE CLASS

	define('DS',DIRECTORY_SEPARATOR);

	define('ROOT',$_SERVER['DOCUMENT_ROOT']);

	define('APP','App');

	define('CTRL',ROOT.DS.APP.DS.'Control'.DS);

	define('SMARTY',ROOT.DS.'Core'.DS.'libs'.DS);

	$config = include('Core/Config/config.php');

	$db = include('Core/Model/db.php');

	$template = include('Core/View/template.php');

	$view = $template->smarty();
	
	$ctrl = include('Core/Control/Control.php');

	$ini = include('Core/Config/ini.php');

	$ini->run();