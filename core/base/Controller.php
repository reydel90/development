<?php 
class Controller{
	protected $template = 'default',
			  $device   = 'desktop',
			  $view     = 'errors/404',
			  $data		= [];	  
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
			
			$this->data = $data;
		}	
		//self::content($this->view, $this->data);
		self::template();
	}

	public function data(){
		return $this->data;

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
		self::data();
		require_once TEMPLATES . $this->template . DS . 'main.php';
	}
	public function template_public(){
		return ASSETS_URL . $this->template . '/';
	}
	public function blocks($name){
		require_once TEMPLATES . $this->template . DS . 'blocks' . DS . $name . '.php';
	}
	public function assets($type, $name, $device){
		$device = self::detect();
		return self::template_public() . $type . '/' . $name . '.' . $device . '.' . $type;
	}
}