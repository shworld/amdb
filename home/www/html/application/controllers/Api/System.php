<?php 
class System extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('System_model');
		$this->load->model('Server_Info_model');

	}

	//获取system信息,在线数,离线数,总数,运行状态
	function get(){
		$data=$this->Server_Info_model->getStates();	
		$this->System_model->set($data);
		$result=$this->System_model->get();
		echo json_encode($result);
	}





}


?>