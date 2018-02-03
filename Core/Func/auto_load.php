<?php
	
	function cleverAutoLoad($name){

		//优先加载核心类
		if(file_exists(ROOT.DS.'Core'.DS.'Control'.DS.$name.'.php')){
			@include_once(ROOT.DS.'Core'.DS.'Control'.DS.$name.'.php');
		}elseif(file_exists(ROOT.DS.APP.DS.'Control'.DS.$name.'.php')){
			@include_once(ROOT.DS.APP.DS.'Control'.DS.$name.'.php');
		}else{
			trigger_error("class ".$name." is not found in core and app control",E_USER_ERROR);
		}

	}

	spl_autoload_register('cleverAutoLoad');

?>