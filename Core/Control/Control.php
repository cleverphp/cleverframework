<?php
	
	class Control{

		public $view;
		public $db;

		public function __construct(){
			
			global $view;

			global $db;

			$this->view = $view;

			$this->db = $db;
		
		}

	}

?>