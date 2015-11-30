<?php
class pageController extends Controller{
	protected $title  = '';	  

	public function index(){
		$this->title = 'home';
		$device = $this->detect();
		echo $device;
		$this->view('page/index', ['title' => $this->title]);
	}
}