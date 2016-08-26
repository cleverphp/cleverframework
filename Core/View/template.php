<?php
	
	require(SMARTY.'Smarty.class.php');

	class template{
		
		public $smarty;

		public function __construct(){
			
			$this->smarty = new Smarty;
	
			$this->smarty->setTemplateDir(ROOT.DS.APP.DS.'View'.DS);
		
		}

		public function smarty(){

			return $this->smarty;

		}
	
	}

	return new template;

?>