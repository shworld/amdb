<?php 
class Server_Hardware_model extends CI_Model{

	//获取单个主机信息
	function get($id){
		$query=$this->db->where("serverinfo_id",$id)->get("server_hardware");
		return $query->result();
	}

	function set($id,$data){
		$query=$this->db->where("serverinfo_id",$id)->get("server_hardware");	

		if(!$query->result()){
			$data['serverinfo_id']=$id;
			$query=$this->db->insert('server_hardware',$data);
		}else{
			
			$this->db->where('serverinfo_id', $id);
			$query=$this->db->update('server_hardware',$data);
		}
		
		return $query;
	}


	//删除单个主机硬件信息
	function del($id){	
		$this->db->where('serverinfo_id', $id);
		$query=$this->db->delete('server_hardware');
		return $query;
	}




}


?>