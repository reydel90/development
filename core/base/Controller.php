<?php 
class Controller{
	protected $template = 'default',
			  $device   = 'desktop',
			  $view     = 'errors/404';		  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}
		/*
		require_once TEMPLATES . $this->template . DS . 'start.php';
		require_once VIEWS . $view . '.php';
		require_once TEMPLATES . $this->template . DS . 'end.php';
		*/
		if(file_exists(VIEWS . $view . '.php')){
			$this->view = VIEWS . $view . '.php';
		}	
		require_once self::template();
	}

	public function content(){
		require_once $this->view;
	}
	public function detect(){
		$detect = new Mobile_Detect;
		if($detect->isiOS()){
			$this->device = 'ios';
		}
		if($detect->isAndroidOS()){
			$this->device = 'android';
		}
		return $this->device;
	}

	public function template(){
		//require_once TEMPLATES . $this->template . DS;
		return TEMPLATES . $this->template . DS . $this->template . '.php';
	}
	public function template_public(){
		return ASSETS_URL . $this->template . '/';
	}
	public function blocks($name){
		return self::template() . 'blocks' . DS . $name . '.php';
	}
	public function assets($type, $name, $device){
		$device = self::detect();
		return self::template_public() . $type . '/' . $name . '.' . $device . '.' . $type;
	}
}