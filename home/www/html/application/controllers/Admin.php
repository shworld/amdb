<?php 

class Admin extends CI_Controller{
	public function __construct(){	
		parent::__construct();
		$this->load->helper('url');

		
	}
	public function index(){
		$this->load->view('admin/index');
	}

	public function serverArea(){
		$this->load->view('admin/serverArea');
	}

	public function serverReport(){
		$this->load->view('admin/serverReport');
	}

	public function serverMonitor(){
		$this->load->view('admin/serverMonitor');
	}

	public function menu(){
		$this->load->view('admin/menu');
	}
	

}


?>