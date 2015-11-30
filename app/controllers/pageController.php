<?php
class pageController extends Controller{
	protected $title  = '';	  

	public function index(){
		$this->title = 'home';
		$this->view('page/index', ['title' => $this->title, 'device' = $this->detect()]);
	}
}