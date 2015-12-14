<?php
class pageController extends Controller{
	protected $title  = '',
			  $device = $this->detect();	  

	public function index(){
		$this->title = 'home';
		//$device = $this->detect();
		$this->view('page/index', ['title' => $this->title, 'device' => $this->$device]);		
	}
	public function contact(){
		$this->title = 'Contact';
		$this->view('contact', ['title' => $this->title, 'device' => $this->$device]);
	}
}