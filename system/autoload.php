<?php

class Autoloader {
	private $loader;
    public function __construct() {
        $ts = spl_autoload_register(array($this, 'loader'));
    }
    private function loader($className) {
        $this->loader = ['controllers/' . $className . '.php', 
    				          'system/' . $className . '.php'];
        
        foreach ($this->loader as $value) {
        	if(file_exists($value)){
        		include $value;
        	}
        }
    }
}

new Autoloader();