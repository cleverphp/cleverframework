<?php
	
	//reserve extends from Control,but could also do not like this as imulating python
	class index extends Control{
		
		//you must use this func to ini data
		public function __construct(){
			
			parent::__construct();
		
		}

		public function index(){

			$this->view->assign('hello','hello world');

			$this->view->display('index.tpl');
		
		}

	}

	return new index;

?>