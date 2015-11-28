<?php 
class Controller{
	protected $template  = 'default',
			  $starpage  = 'start.php',
			  $endpage   = 'end.php',
			  $routeView = '';

			  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}
		$this->routeView = TEMPLATES . $this->template . DS;
		require_once $this->routeView . $this->starpage;
		require_once VIEWS . $view . '.php';
		require_once $this->routeView . $this->endpage;
	}

	public function template(){
		return TEMPLATES . $this->template . DS;
	}
	public function template_assets(){
		return TEMPLATE_ASSETS . $this->template . '/assets/';
	}
}