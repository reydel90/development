<?php 
class Controller{
	protected $template = 'default';		  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}

		$detect = new Mobile_Detect;
		if($detect->isiOS()){
			echo 'esto es iOS';
		}
		if($detect->isAndroidOS()){
			echo 'esto es Android';
		}
		require_once TEMPLATES . $this->template . DS . 'start.php';
		require_once VIEWS . $view . '.php';
		require_once TEMPLATES . $this->template . DS . 'end.php';
	}

	public function template(){
		return TEMPLATES . $this->template . DS;
	}
	public function template_public(){
		return ASSETS_URL . $this->template . '/';
	}
	public function blocks($name){
		return self::template() . 'blocks' . DS . $name . '.php';
	}
	public function assets($type, $name){
		return self::template_public() . $type . '/' . $name . '.' . $type;
	}
}