<?php 
class Server_Report_model extends CI_Model{

	//获取主机信息
	function getServer_info(){
		$query=$this->db->get("server_info");
		if($query){
			return $query->result_array();
		}
		
	}

	//获取主机硬件信息
	function getServer_hardware(){
		$query=$this->db->get("server_hardware");
		if($query){
			return $query->result_array();
		}
		
	}



}


?>