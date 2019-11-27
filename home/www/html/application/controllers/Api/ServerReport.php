<?php 
class ServerReport extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Server_Report_model');
	}


	function makeReport(){
		$server_info=$this->Server_Report_model->getServer_info();
		$server_hardware=$this->Server_Report_model->getServer_hardware();
		//总主机数
		$sever_count=count($server_info);

		//统计云类型
		$aliyun=0;
		$qcloud=0;
		$amazon=0;
		$ctyun=0;
		$others=0;
		foreach ($server_info as $key => $server) {
			switch ($server['source_type']) {
				case '阿里云':
				$aliyun++;
				break;
				case '腾讯云':
				$qcloud++;
				break;
				case '亚马逊':
				$amazon++;
				break;
				case '电信云':
				$ctyun++;
				break;
				default:
				$others++;
				break;
			}
		}

	
		$cpu_core_max=0;	   #取最大CPU核数
		$running_time_avg=0;   #总运行时间均值
		foreach ($server_hardware as $key => $server) {
			$running_time_avg+=$server['running_time'];
			$cpu_core=$server['cpu_core'];
			if($cpu_core_max<$cpu_core){
				$cpu_core_max=$cpu_core;
			}
		}
		$running_time_avg=intval(($running_time_avg/count($server_hardware))/60/60);


		$serverReport="当前服务器共有:{$sever_count}台\n
阿里云:有{$aliyun}台\n腾讯云:有{$qcloud}台\n亚马逊:有{$amazon}台\n电信云:有{$ctyun}台\n其他云:有{$others}台\n
CPU最小核心数为:1核\nCPU最大核心数为:{$cpu_core_max}核\n
系统平均启动时长为:{$running_time_avg}小时
		";

		echo json_encode($serverReport);
		
	}





}



?>