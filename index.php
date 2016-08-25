<?php

	define('ROOT',$_SERVER['DOCUMENT_ROOT']);

	define('DS',DIRECTORY_SEPARATOR);

	define('APP','App');

	define('CTRL',ROOT.DS.APP.DS.'Control'.DS);

	$config = include('Core/Config/config.php');

	$db = include('Core/Model/db.php');

	$ctrl = include('Core/Control/Control.php');

	$ini = include('Core/Config/ini.php');

	$ini->run();