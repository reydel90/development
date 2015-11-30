<?php
class pageController extends Controller{
	protected $title  = '';	  

	public function index(){
		echo Controller::detect();
		$this->title = 'home';
		$this->view('page/index', ['title' => $this->title]);
	}
}