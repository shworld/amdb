<?php 
class ServerHardware extends CI_Controller{
	function __construct(){
		set_time_limit(30);
		parent::__construct();
		$this->load->database();
		$this->load->model('Server_Hardware_model');
		$this->load->model('Server_Info_model');

	}


	//获取全部主机信息
	function get($id){
		$result=$this->Server_Hardware_model->get($id);
		echo json_encode($result);
	}

	function __pingServer($ip){
		$result=shell_exec("sudo /usr/bin/ansible $ip -m ping");
		if(strpos($result, 'pong')){
			return true;
		}else{
			return false;
		}
		

	}

	#重新获取所有主机信息
	#type=all获取所有
	#否则只获取状态为0的主机
	function reloadServerHardwareALL(){
		$ServerInfo=$this->Server_Info_model->getServerInfoAll();
		if($ServerInfo){
			foreach ($ServerInfo as $key => $server) {
				$id=$server['id'];
				$ip=$server['ip'];
				self::reloadServerHardware($id,$ip);
			}
		}
	}

	//通过shell_exec获取主机硬件信息,正则匹配返回的结果插入到数据库,稳定性未知
	function reloadServerHardware($id_=null,$ip_=null){
		$postdata=$this->input->post();
		if($postdata){
			$id=$postdata['id'];
			$ip=$postdata['ip'];	
		}
		//如果有传参则最后引用传参值
		elseif($id_ && $ip_){
			$id=$id_;
			$ip=$ip_;
		}

		$result=false;
		//提前进行ping检测
		$ping=self::__pingServer($ip);
		if($ping){
			$hardwareinfo=array();
			$hardwaredata=array();
		//执行ansible
			$result=shell_exec("sudo /usr/bin/ansible-playbook /home/ansible/hardware.yml -e 'ip=$ip'");
		//判断返回结果是否正常
			if(strpos($result, 'ok=2')){
			//先分割自定义定界符
				preg_match('/({__amdb_delimited})(.*?)({__amdb_delimited})/si',$result,$amdb_result);
				if($amdb_result[0]){	
				//再分割自定义换行符
					$amdb_result_ary=explode('({__amdb_br})', $amdb_result[0]);
					if($amdb_result_ary){
						foreach ($amdb_result_ary as $key => $row) {
							if(strpos($row, '__amdb_delimited')==false){
							//重新加入到hardwareinfo数组
								array_push($hardwareinfo, $row);
							}
						}

						if($hardwareinfo){
						//CPU核心数
							$hardwaredata['cpu_core']=isset($hardwareinfo[0])?trim($hardwareinfo[0]):'n/a';
						//CPU数量
							$hardwaredata['cpu_qty'] =isset($hardwareinfo[1])?trim($hardwareinfo[1]):'n/a';
						//CPU型号
							$hardwaredata['cpu_model'] =isset($hardwareinfo[2])?trim($hardwareinfo[2]):'n/a';

						//组合系统版本信息
							$system_type=isset($hardwareinfo[3])?trim($hardwareinfo[3]):'n/a';
							$system_version=isset($hardwareinfo[4])?trim($hardwareinfo[4]):'n/a';
							$system_version=$system_type.$system_version;
							$hardwaredata['system_version'] =trim($system_version);

						//系统版内核本信息
							$hardwaredata['system_version_core']=isset($hardwareinfo[5])?trim($hardwareinfo[5]):'n/a';
						//物理内存
							$hardwaredata['memory_size'] =isset($hardwareinfo[6])?trim($hardwareinfo[6]):'n/a';
						//虚拟内存
							$hardwaredata['swap_size'] =isset($hardwareinfo[7])?trim($hardwareinfo[7]):'n/a';
						//运行时长
							$hardwaredata['running_time'] =isset($hardwareinfo[8])?trim($hardwareinfo[8]):'n/a';
						//内网地址
							$ip_public=isset($hardwareinfo[9])?trim($hardwareinfo[9]):'n/a';		
							$result=$this->Server_Hardware_model->set($id,$hardwaredata);	
							$data=array();
							if($result){
								$data['ip_ipv4']=$ip_public;
								$data['state']=1; //在线
								$result=$this->Server_Info_model->set($id,$data);
								$result=true;
							}else{
								$data['ip_ipv4']=$ip_public;
								$data['state']=3; //获取失败
								$result=$this->Server_Info_model->set($id,$data);
								$result=false;
							}
						}else{
							$result=false;
						}
					}
				}
			}
			
		}else{
			$data['state']=2;  //离线
			$result=$this->Server_Info_model->set($id,$data);
			$result=false;
		}
		echo json_encode($result);
	}
}

?>