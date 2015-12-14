<?php
class pageController extends Controller{
	protected $title  = '';	  

	public function index(){
		$this->title = 'home';
		$device = $this->detect();
		$this->view('page/index', ['title' => $this->title, 'device' => $device]);		
	}
	public function contact(){
		$this->title = 'Contact';
		$this->view('contact', ['title' => $this->title]);			
	}
}