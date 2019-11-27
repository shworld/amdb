<?php 
class ServerInfo extends CI_Controller{
	function __construct(){
		error_reporting(E_ALL);
		set_time_limit(30);
		parent::__construct();
		$this->load->database();
		$this->load->model('Server_Info_model');
		$this->load->model('Server_Hardware_model');

	}

	//获取全部主机信息
	function getAll($limit=0,$offset=0){
		$result=$this->Server_Info_model->getALL($limit,$offset);
		echo json_encode($result);
	}


	//获取单个主机信息
	function get($id){
		$result=$this->Server_Info_model->get($id);
		echo json_encode($result);
	}


	//获取主机信息总数
	function getCount(){
		$result=$this->Server_Info_model->getCount();
		echo json_encode($result);
	}


	//设置单个主机信息
	function set(){
		$data= $this->input->post();
		$id=$data['id'];
		unset($data['id']);
		if(!self::__ansible_host_yml($data)){
			return false;
		}
		$result=$this->Server_Info_model->set($id,$data);
		echo json_encode($result);
	}


	//插入单个主机信息
	function add(){
		$data= $this->input->post();
		if(!self::__ansible_host_yml($data)){
			return false;
		}
		$result=$this->Server_Info_model->add($data);
		if(!$result){
			return false;
		}
		echo json_encode($result);
	}


	//删除单个主机信息
	function del(){
		$data= $this->input->post();
		$id=$data['id'];
		if(!self::__ansible_host_yml($data,"absent")){
			return false;
		}
		$result=$this->Server_Info_model->del($id);
		$result=$this->Server_Hardware_model->del($id);
		echo json_encode($result);
	}

	



	//通过ansible-playbook更新host文件
	//apache的权限设定visudo
	//apache  ALL=(ALL)       NOPASSWD:/usr/bin/ansible,/usr/bin/ansible-playbook
	function __ansible_host_yml($data,$state="present"){
		$ip=$data['ip'];
		$servername=$data['name'];
		$username=$data['username'];
		$password=$data['password'];
		$result=shell_exec("sudo /usr/bin/ansible-playbook /home/ansible/host.yml -e 'ip=$ip servername=$servername username=$username password=$password state=$state'");
		if(strpos($result, 'ok=1')==false){
			$result=False;
		}else{
			$result=True;
		}
		return $result;
	}






}


?>