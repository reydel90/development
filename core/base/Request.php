<?php 
class Request{
	protected 
		$controller = 'pageController',
		$method     = 'index',
		$params     = [];

	public function __construct(){
		$url = Url::parse();


		$url[0] = $url[0] . 'Controller';
		if(file_exists(CONTROLLERS . $url[0] . '.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}
		require_once CONTROLLERS . $this->controller . '.php';
		$this->controller = new $this->controller;

		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);

	}
}
