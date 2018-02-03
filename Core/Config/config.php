<?php
class config{

	public function db(){

		return [
			
			'host'=>'localhost',
			'dbname'=>'test',
			'user'=>'test',
			'psd'=>'test',
			'persistent'=>true
		
		];
	
	}
	
	public function core_dir(){

		return [
			'Config',
			'Control',
			'Func',
			'Model',
			'View',
			'Public'
		];
	
	}

	public function site(){

		return [



		];

	}

}

return new config;

?>

