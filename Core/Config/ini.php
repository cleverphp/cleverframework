<?php
class ini{

	public function run(){

		$this->check();
		$this->set();
		$this->mysql();
		$this->start();
	
	}

	private function check(){

		if(!defined('APP') || !is_dir(ROOT.DS.APP)):
			exit('You need define your app path first');
		endif;

		global $config;

		$dir = $config->core_dir();

		foreach($dir as $v):

			if(!is_dir(ROOT.DS.APP.DS.$v)):

				mkdir(ROOT.DS.APP.DS.$v);

			endif;
		
		endforeach;
	
	}

	private function set(){
		
		//auto include all funcs in core
		if(is_dir(ROOT.DS.'Core'.DS.'Func')):
			
			$fArr = @scandir(ROOT.DS.'Core'.DS.'Func');

			foreach($fArr as $v):
				
				if($v != '.' && $v != '..'):
						
					include_once(ROOT.DS.'Core'.DS.'Func'.DS.$v);
						
				endif;

			endforeach;

		endif;

		//auto include all funcs in app

		if(is_dir(ROOT.DS.APP.DS.'Func')):
			
			$fArr = @scandir(ROOT.DS.APP.DS.'Func');

			foreach($fArr as $v):
				
				if($v != '.' && $v != '..'):
						
					include_once(ROOT.DS.APP.DS.'Func'.DS.$v);
						
				endif;

			endforeach;

		endif;
	
	}

	public function mysql(){
	
		global $db;

		$db->connect();
	
	}

	public function start(){

	    $req = req();
		
		$ctrl = include_once(CTRL.$req['c']);

		$ctrl->$req['a']();
	
	}

}

return new ini;

?>

