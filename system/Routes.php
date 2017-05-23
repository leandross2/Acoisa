<?php

class Routes{	

	public $uri;

	public function __construct($uri){
		//pega o tamanho da uri
		$sizeUri = strlen($uri);
		//echo $sizeUri;

		//verifica se o ultimo caracter da uri é /
		if($_SERVER['REQUEST_URI'][$sizeUri-1] === '/' && $sizeUri > 1 ){
			$uri = substr_replace($_SERVER['REQUEST_URI'],'',-1); // remove a barra no final da uri
		}
		$uri = explode('/', $uri);
		 if(empty($uri[1]) && empty($uri[2])){
		 	$this->uri = array('', DEFAULT_CONTROLLER, DEFAULT_METHOD);

		 }
		 elseif (!empty($uri[1]) && !isset($uri[2])) {
			$this->uri = array('', $uri[1], DEFAULT_METHOD);		 	
		 }
		 else{
		 	$this->uri = $uri;	
		 }
		
	}

}