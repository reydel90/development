<?php 
class Controller{
	protected $template = 'desktop';		  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}

		$detect = new Mobile_Detect;
		if($detect->isiOS()){
			$this->template = 'ios';
		}
		if($detect->isAndroidOS()){
			$this->template = 'android';
		}
		//require_once TEMPLATES . $this->template . DS . 'start.php';
		require_once VIEWS . $this->template . DS . $view . '.php';
		//require_once TEMPLATES . $this->template . DS . 'end.php';
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