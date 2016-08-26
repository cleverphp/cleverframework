<?php
	
	//reserve extends from Control,but could also do not like this as imulating python
	class index{

		public $view;

		public function __construct(){
			
			global $view;

			$this->view = $view;
		
		}

		public function index(){

			$this->view->assign('hello','hello world');

			$this->view->display('index.tpl');
		
		}

	}

	return new index;

?>