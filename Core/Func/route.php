<?php
	
	function req(){
		
		$req = array();

		$uri = $_SERVER['REQUEST_URI'];

		$count_len = count(explode('/',$uri));

		if($count_len == 2):
		
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
		elseif($count_len == 3):
			$route_uri = explode('/',$uri);

			$req['c'] = $route_uri[1];
			$req['a'] = explode('?',$route_uri[2]);

			$req['a'] = is_array($req['a']) ? $req['a'][0] : $req['a'];

			return $req;

		else:
			exit('Bad Request!');
		endif;
	
	}

?>