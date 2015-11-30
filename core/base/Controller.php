<?php 
class Controller{
	protected $template = 'default',
			  $device   = 'desktop';		  
	public function view($view, $data = []){
		$url = Url::parse();
		if(empty($url[0])){
			unset($url[0]);
		}
		require_once TEMPLATES . $this->template . DS . 'start.php';
		require_once VIEWS . $view . '.php';
		require_once TEMPLATES . $this->template . DS . 'end.php';
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
		return TEMPLATES . $this->template . DS;
	}
	public function template_public(){
		return ASSETS_URL . $this->template . '/';
	}
	public function blocks($name, $device){
		$device = self::detect();
		return self::template() . 'blocks' . DS . $type . DS . $name . '.php';
	}
	public function assets($type, $name, $device){
		$device = self::detect();
		return self::template_public() . $type . '/' . $device . '/' . $name . '.' . $type;
	}
}