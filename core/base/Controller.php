<?php 
class Controller{
	protected $template = 'default/';		  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}

		require_once self::template() . 'start.php';
		require_once VIEWS . $view . '.php';
		require_once self::template() . 'end.php';
	}

	public function template(){
		return ASSETS_URL . $this->template;
	}
	public function blocks($name){
		echo self::template() . 'blocks/' . $name . '.php';
	}
	public function assets($type, $name){
		echo self::template() . 'assets/' . $type . '/' . $name . '.' . $type;
	}
}