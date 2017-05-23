<?php

/**
* Controller
*/
class Controller
{
	private $main  ;
	private $header;
	private $footer;
	

	public function __construct()
	{
		$this->main    ;
		$this->header  ;
		$this->footer  ;
	}

	public function view($view, $var = NULL)
	{	
		$local = 'views/' . $view .'.php';
		
		if(file_exists($local)){
			$this->template($local, $var);
		}
		
	}
	private function template($local, $var){

		if(is_array($var) && count($var) > 0){
			extract($var,  EXTR_PREFIX_ALL, 'view');
		}
		
		ob_clean();	
		$main = file_get_contents('views/' . FOLDER_THEME . '/main.php');
		//file_get_contents('views/' . FOLDER_THEME . '/header.php');
		//file_get_contents('views/' . FOLDER_THEME . '/footer.php');
	
		$page = ob_get_clean();

		echo ($main);
		//echo $this->main;


		// $header = $this->header;
		// $footer = $this->footer;
		// $view = file_get_contents($local);

		// $main = $this->main;
		// $main = str_replace('{header}', $header, $main);
		// $main = str_replace('{footer}', $footer, $main);
		// $main = str_replace('{main}', $view, $main);


		//echo $main;
	}
}