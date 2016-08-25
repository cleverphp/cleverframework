<?php
	
	function req(){
		
		$req = array();

		$uri = $_SERVER['REQUEST_URI'];
		
		$preg = "/c=([^&]*)/";

		preg_match_all($preg,$uri,$arr);

		if(count($arr[0]) == 0){
			
			$req['c'] = 'index';

		}else{

			$req['c'] = $arr[1][0];
		
		}

		$preg = "/a=([^&]*)/";

		preg_match_all($preg,$uri,$brr);

		if(count($brr[0]) == 0){
			
			$req['a'] = 'index';

		}else{

			$req['a'] = $brr[1][0];
		
		}

		return $req;
	
	}

	function res(){

	
	}

?>