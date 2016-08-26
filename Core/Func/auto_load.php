<?php
	
	function __autoload($name){
		
		include_once(ROOT.DS.'Core'.DS.'Control'.DS.$name.'.php');

	}

?>