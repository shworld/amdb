## amdb
amdb硬件获取系统

### 系统说明
###### 通过本系统，你可以批量导入任何Linux的主机登录信息，且无需在被侦测主机安装任何脚本软件
###### 即可远程获取主机系统版本CPU型号内存大小运行时间等信息，并周期性检测主机的在线数/离线数

* 使用PHP+MYSQL+VUE+LAYER+ANSIBLE实现
* 本系统目前测试学习阶段,更多功能日后再完善
* 部署疑问 by AWE www.wx256.com
* 默认数据库用户名密码root/amdb

### 部署方式

* docker镜像下载 (amdb_docer.7z) ← 推荐
* 源代码独立部署  (需部署系统环境)
* ↓↓部署教程在下面↓↓↓
****


![images](https://github.com/shworld/amdb/blob/master/screen/amdb_screen1.png)
![images](https://github.com/shworld/amdb/blob/master/screen/amdb_screen2.png)
![images](https://github.com/shworld/amdb/blob/master/screen/amdb_screen3.png)
![images](https://github.com/shworld/amdb/blob/master/screen/amdb_screen4.png)

#### docker部署教程
* 下载amdb_docker.7z
* https://pan.baidu.com/s/1xMt7CS_lByhB5WjIBzDGlg
* fh9l

* 安装7z解压软件以及docker
  * yum install -y p7zip
  * yum install -y docker

* 解压下载好的amdb_docker.7z
  * 7za x amdb_docker.7z -o/home
  
* 启动docker并设置开机启动
  * systemctl start docker 
  * systemctl enable docker

* 导入解压好的景象文件amdb.tar
  * docker load -i /home/amdb.tar 
  
* 运行docker容器
  * docker run -it -p 8090:80 -p 33306:3306 --restart=always --privileged=true --name amdb  amdb:v1.0 /usr/sbin/init
  * 其中8090为访问宿主机的http端口,33306为mysql端口,可以自行修改
  
* 修改配置文件
  * docker ps                       
  * docker exec -it 容器ID /bin/bash  
  * vi /home/www/html/application/config/config.php 
  * $config['base_url'] = 'http://你的站点URL:8090'; 

* 大功告成[http://你的站点URL]

****
#### 源代码部署教程
* 环境php5.6 + MySQL5.7 + Ansible(python2.7.5)
* 项目中/home里面的资料,复制到主机/home下
* 配置httpd.conf
  * <Directory "/home/www/html">

* 导入/home下的3个sql脚本

* ansible.cfg关闭连接认证
  * host_key_checking = False

* visudo设置apache执行权限
  * apache  ALL=(ALL)       NOPASSWD:/usr/bin/ansible,/usr/bin/ansible-playbook

* 编辑站点url路径
  * vi /home/www/html/application/config/config.php 
  * $config['base_url'] = 'http://你的站点URL'; 
  
* 大功告成[http://你的站点URL]

