<?php 
class System_model extends CI_Model{

	//获取system信息,在线数,离线数,总数,运行状态
	function get(){
		$query=$this->db->get("system");
		return $query->result();
	}

	function set($data){
		$query=$this->db->where("id",1)->update("system",$data);
		return $query;
	}

}


?>