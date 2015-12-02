<?php
class pageController extends Controller{
	protected $title  = '';	  

	public function index($data = []){
		$this->title = 'home';
		$device = $this->detect();
		$this->view('page/index');
		$data['title'] = $this->title;
		
	}
}