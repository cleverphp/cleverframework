<?php
class ini{

	public function run(){

		$this->registerAutoLoad();
		$this->set(); //set route
		$this->mysql();
		$this->start();
	
	}

	private function registerAutoLoad(){

		spl_autoload_register(function($class){

			$name = ucfirst(strtolower($class));
			//优先加载核心类
			if(file_exists(ROOT.DS.'Core'.DS.'Control'.DS.$name.'.php')){
				@include_once(ROOT.DS.'Core'.DS.'Control'.DS.$name.'.php');
			}elseif(file_exists(ROOT.DS.APP.DS.'Control'.DS.$name.'.php')){
				@include_once(ROOT.DS.APP.DS.'Control'.DS.$name.'.php');
			}elseif(file_exists(ROOT.DS.'Core'.DS.'ExtLib'.DS.$name.'.php')){ //加载第三方类
				@include_once(ROOT.DS.'Core'.DS.'ExtLib'.DS.$name.'.php');
			}else{
				trigger_error("class ".$name." is not found in core control,app control,ExtLib",E_USER_ERROR);
			}

		});

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
		
		$ctrl = include_once(CTRL.$req['c'].'.php');

		call_user_func(array($ctrl,$req['a']));
	
	}

}

return new ini;

?>

