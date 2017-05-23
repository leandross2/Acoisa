<?php



class Home extends Controller{

	public function __contruct(){
		
	}public function index(){
		$data['ts1'] = "veio!@@@";
		$data['ts2'] = "veio2!";
		$this->view('home', $data);
		//echo $this->ts;
	}
}