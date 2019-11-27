<?php 
class Server_Info_model extends CI_Model{

	//获取所有主机信息
	function getALL($limit,$offset){
		$query=$this->db->order_by('id',"DESC")->limit($limit, $offset)->get("server_info");
		return $query->result();
	}

	//获取单个主机信息
	function get($id){
		$query=$this->db->where("id",$id)->get("server_info");
		return $query->result();
	}

	//获取主机信息总数
	function getCount(){
		$query=$this->db->count_all_results("server_info");
		return $query;
	}

	//设置单个主机信息
	function set($id,$data){	
		$this->db->where('id', $id);
		$query=$this->db->update('server_info',$data);
		return $query;
	}

	//插入单个主机信息
	function add($data){
		$ip_lan=$data['ip'];
		$query=$this->db->where("ip",$ip_lan)->get("server_info");
		if($query->result()){
			return false;
		}

		$query=$this->db->insert('server_info',$data);
		return $query;
	}


	//删除单个主机信息
	function del($id){	
		$this->db->where('id', $id);
		$query=$this->db->delete('server_info');
		return $query;
	}


	function getStates(){
		$query=$this->db->where('state',"1")->get("server_info");
		$online=$query->num_rows();

		$query=$this->db->where('state',"2")->get("server_info");
		$offline=$query->num_rows();

		$query=$this->db->where('state',"3")->get("server_info");
		$failure=$query->num_rows();

		$query=$this->db->get("server_info");
		$count=$query->num_rows();

		$data=array('online'=>$online,'offline'=>$offline,'failure'=>$failure,'total'=>$count);
		return $data;
	}



	function getServerInfoState0(){
		$query=$this->db->where('state',"0")->get("server_info");
		if($query){
			return $query->result_array();
		}
	}

	function getServerInfoAll(){
		$query=$this->db->get("server_info");
		if($query){
			return $query->result_array();
		}
	}




}


?>