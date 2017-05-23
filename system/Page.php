<?php

class Page{
	public $controller;
	public $method;

	public function __construct($uri){
		$this->controller = (addslashes(explode('/', $uri)[1])) ? addslashes(explode('/', $uri)[1]) : 'index';
		$this->method = (addslashes(explode('/', $uri)[1])) ? addslashes(explode('/', $uri)[2]) : 'index';
	}

	public function getController(){
		return $this->controller;
	}

	public function getMethod(){
		return $this->method;
	}
}