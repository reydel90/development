<?php
class pageController extends Controller{
	protected $title  = '';	  

	public function index(){
		$this->title = 'home';
		$device = $this->detect();
		$this->view('page/index');
		$this->passData('title' => $this->title, 'device' => $device);
	}
}