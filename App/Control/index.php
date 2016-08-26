<?php
	
	//reserve extends from Control,but could also do not like this as imulating python
	class index extends Control{
		
		//you must use this func to ini data
		public function __construct(){
			
			parent::__construct();
		
		}

		public function index(){

			$this->view->assign('hello','hello world');
			
			/**
			$sql = "select * from hello";

			$res = $this->db->query($sql);

			$this->view->assign('res',$res);

			**/

			$this->view->display('index.tpl');
		
		}

	}

	return new index;

?>