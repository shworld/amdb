<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMDB控制台</title>
    <link rel="icon" href="<?=base_url('public')?>/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=base_url('public')?>/images/favicon.ico" type="image/x-icon"/>
    <!-- Styles -->
    <link href="<?=base_url('public')?>/css/themify-icons.css" rel="stylesheet">
    <link href="<?=base_url('public')?>/css/sidebar.css" rel="stylesheet">
    <link href="<?=base_url('public')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('public')?>/layui/css/layui.css" rel="stylesheet" media="all">
    <link href="<?=base_url('public')?>/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="<?php echo base_url('admin')?>">
                        <span>AMDB控制台</span><br>
                        <span style="font-size: 12px;color:#ccc">by AWE</span>

                    </a></div>
                    <li class="label">主菜单</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i>资产管理<!-- <span class="badge badge-primary">0</span> --> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url('admin')?>">主机清单列表</a></li>
                        </ul>
                    </li>

                    <li class="label">其他菜单</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>资产统计<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url('admin/serverReport')?>">文字报告</a></li>
                        </ul>
                    </li>       
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">


                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">AWE
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">登录时间</span>
                                        <p class="user-info-mail">2019</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                           <li>
                                            <a href="#">
                                                <i class="ti-user"></i>
                                                <span>欢迎使用本系统</span>
                                            </a>
                                        </li>                                          
                                        <li>
                                            <a href="#">
                                                <i class="ti-email"></i>
                                                <span>admin@wx256.com</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap" id="amdb">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>您好! <span>欢迎使用AMDB资产管理系统</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">资产管理</a></li>
                                    <li class="breadcrumb-item active">主机清单列表</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-plus color-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">在线主机</div>
                                    <div class="stat-digit" >{{system.online}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-minus color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">离线主机</div>
                                    <div class="stat-digit">{{system.offline}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link color-warning border-warning"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">获取失败</div>
                                    <div class="stat-digit">{{system.failure}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="card">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid3 color-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">总主机数</div>
                                <div class="stat-digit">{{system.total}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 



            <div class="row">                   
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title pr">
                            <h4>主机清单列表</h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                            <button type="submit" class="layui-btn layui-btn-primary" v-on:click="showServerInfoAdd()">添加主机</button>
                            <button type="submit" class="layui-btn layui-btn-primary" v-on:click="showServerInfoAddRows()">批量添加</button>
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th>序号</th>
                                        <th>IP</th>
                                        <th>内网地址</th>
                                        <th>显示名称</th>
                                        <th>平台类型</th>
                                        <th>账户密码</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                                           
                                    <tr v-for="(item,key) in server_info.list">
                                        <th>{{page.offset+key+1}}</th>
                                        <td>{{item.ip}}</td>
                                        <td class="color-default">{{item.ip_ipv4}}</td>
                                        <td id="table-servername">
                                            <span v-if="item.state==0" class="badge badge-secondary" v-on:mouseenter="showServerHardwareInfo($event,item.id)" v-on:mouseout="closeServerHardwareInfo($event,item.id)">{{item.name}}</span>
                                            <span v-else class="badge badge-primary" v-on:mouseenter="showServerHardwareInfo($event,item.id)" v-on:mouseout="closeServerHardwareInfo($event,item.id)">{{item.name}}</span></td>

                                            <td>{{item.source_type}}</td>
                                            <td>{{item.username}}/******</td>
                                            <td v-if="item.state==0"><span class="badge badge-secondary">获取中</span></td>
                                            <td v-else-if="item.state==1"><span class="badge badge-success">在线</span></td>
                                            <td v-else-if="item.state==2"><span class="badge badge-danger">离线</span></td>
                                            <td v-else-if="item.state==3"><span class="badge badge-warning">获取失败</span></td>
                                            <td>  
                                             <button type="submit" class="layui-btn layui-btn-sm layui-btn-normal" v-on:click="reloadHardwareInfo(item.id,item.ip)">刷新</button>
                                             <button type="submit" class="layui-btn layui-btn-sm" v-on:click="showServerInfoEditor($event,item.id)">修改</button>

                                             <button type="submit"  class="layui-btn layui-btn-sm layui-btn-danger" v-on:click="deleteServerInfo($event,item.id,item.name,item.ip)">删除</button>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>                                                                
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>    


     <div class="row" style="visibility: hidden;">
        <div class="col-lg-12">
           <div class="card">
           </div>
           <div class="card">
           </div>
           <div class="card">
           </div>
           <div class="card">
           </div>
           <div class="card">
           </div>
           <div class="card">
           </div>
           <div class="card">
           </div>
       </div>

       <!-- /# column -->

       <div class="row">
        <div class="col-lg-12">
            <div class="footer">
                <p>Copyright &copy; 2019.Company name All rights reserved.<a target="_blank" href="http://www.wx256.com/">by AWE</a></p>
            </div>
        </div>
    </div>
</div>

<!-- scripit init-->
<script src="<?=base_url('public')?>/js/jquery.min.js"></script>
<script src="<?=base_url('public')?>/js/jquery.nanoscroller.min.js"></script>
<script src="<?=base_url('public')?>/js/sidebar.js"></script>
<script src="<?=base_url('public')?>/js/pace.min.js"></script>
<!-- sidebar -->
<script src="<?=base_url('public')?>/js/bootstrap.min.js"></script>
<script src="<?=base_url('public')?>/js/scripts.js"></script>

<!-- custom scripit -->
<script src="<?=base_url('public')?>/js/polyfill.min.js"></script>
<script src="<?=base_url('public')?>/js/vue.js"></script>
<script src="<?=base_url('public')?>/js/axios.js"></script>
<script src="<?=base_url('public')?>/layui/layui.all.js"></script>
<script src="<?=base_url('public')?>/js/clipboard.min.js"></script>

<script type="text/javascript">

    var g_page={"offset":0,"limit":5}

    //初始化vue
    var vm = new Vue({
      el: "#amdb",
      data:{
        page:g_page,
            system:{              //system表结构字段
                online:0,        //在线数量
                offline:0,       //离线数量
                failure:0,       //获取失败
                total:0,         //主机总数

            },
            server_info:{         //server_info表结构字段
                id:0,
                list:'',          //返回请求列表
                hardware_info:'系统信息获取中'  //选中的主机ID
            }, 

        },filters:{
        //转换业务监控状态显示文本
        stateInfo:function(val){
            switch(val){
                case '0':
                return '未配置'
                break;
                case '1':
                return '正常'
                break;
                case '2':
                return '停止'
                break;
            }

        }
    },
    mounted:function(){
        let that=this
        //首次进入获取system信息,在线数,离线数,总数,运行状态
        SystemGet()
        function SystemGet(){
           axios
           .get('<?=base_url('Api/System/get')?>')
           .then(function(response){
            that.system=response.data[0]
        })
       }

       function ReloadServerHardware(){
        axios
        .get('<?=base_url('Api/ServerHardware/reloadServerHardwareAll/1')?>')
    }


    //每1秒更新一次系统状态
    this.timer = setInterval(function() {
        SystemGet()}, 3000);   
    this.ServerInfoGetAll()    

     //每30秒重新获取一次硬件信息
     this.timer = setInterval(function() {
        ReloadServerHardware()}, 90000);  
     this.ServerInfoGetAll()   

 },
 // 在Vue实例销毁前，清除我们的定时器
 beforeDestroy:function() {
    if (this.timer) {
      clearInterval(this.timer); 
  }
},
methods:{
    //获取所有主机列表
    ServerInfoGetAll:function(){
        let that=this
        axios
        .get('<?=base_url('Api/ServerInfo/getAll/')?>'+this.page.limit+'/'+this.page.offset)
        .then(function(response){
            console.log(response.data)
            that.server_info.list=response.data

        })
    },
    //鼠标移动到显示名称时,显示硬件详细信息
    showServerHardwareInfo:function(event,itemID){
        let that=this
        let ele=event.currentTarget
        let server_info_id=itemID
        let system_hardware_info
        if(this.server_info.id!=server_info_id || this.server_info.hardware_info=='系统信息获取中'){     //如果是新id则进行新的请求
            this.server_info.id=server_info_id
            axios
            .get('<?=base_url('Api/ServerHardware/get/')?>'+server_info_id)
            .then(function(response){
              system_hardware_info=response.data[0]
              if(!system_hardware_info){
                system_hardware_info='系统信息获取中'
            }else{
              system_hardware_info='<div class="server_hardware_info"><div style="float:left">系统版本<br>内核版本<br>CPU型号<br>CPU数量<br>CPU内核数<br>物理内存<br>虚拟内存<br>系统运行时间</div>'+
              '<div style="float:right;text-align:right">'+system_hardware_info.system_version+'<br>'+system_hardware_info.system_version_core+'<br>'+system_hardware_info.cpu_model+'<br>'+system_hardware_info.cpu_qty+'<br>'+system_hardware_info.cpu_core+'<br>'+(system_hardware_info.memory_size/1024).toFixed(2)+'GB<br>'+(system_hardware_info.swap_size/1024).toFixed(2)+'GB<br>'+(system_hardware_info.running_time/60/60).toFixed(1)+'小时</div></div>'
          }

          color='#6c757d'
          that.server_info.hardware_info=system_hardware_info
          layer.tips(system_hardware_info,$(ele), {
              tips: [1, '#3595CC'],
              area: ['360px'],
              time: 0
          });
      })

        }else{   //否则引用上一次请求的硬件信息
            layer.tips(that.server_info.hardware_info,$(ele), {
              tips: [1, '#3595CC'],
              area: ['360px'],
              time: 10000
          });
        }

    },
    //显示主机信息编辑窗口
    showServerInfoEditor:function(event,itemID){
        let that=this
        let ele=event.currentTarget
        let server_info_id=itemID
        let id,name,source_type,username,password=''
        axios
        .get('<?=base_url("Api/ServerInfo/get/")?>'+server_info_id)
        .then(function(response){
            id=response.data[0].id
            ip=response.data[0].ip
            name=response.data[0].name
            source_type=response.data[0].source_type
            username=response.data[0].username
            password=response.data[0].password

            //定义平台类型(下拉选择)
            let source_type_list=['阿里云','腾讯云','亚马逊','电信云','其他平台']
            let source_type_option,option_name=''
            for(i=0;i<source_type_list.length;i++){
                option_name=source_type_list[i];
                if(source_type==option_name)
                {
                   source_type_option+=`<option selected value="`+option_name+`">`+option_name+`</option>`;
               }else{
                   source_type_option+=`<option value="`+option_name+`">`+option_name+`</option>`;
               }


           }

         //页面层模板
         tpl_html=`   
         <form class="layui-form" style="margin-top:10px">

         <input type="hidden" name="id" value="`+id+`">
         <input type="hidden" name="ip" value="`+ip+`">

         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">显示名称</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="amdb server" class="layui-input" required value="`+name+`">
         </div>
         </div>


         <div class="layui-form-item">
         <div class="layui-inline">
         <label class="layui-form-label" style="width:100px;margin-right:10px">平台类型</label>
         <div class="layui-input-inline">
         <select name="source_type" required>`
         +source_type_option+
         `
         </select>
         </div>
         </div>
         </div>


         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">登录账号</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="username" lay-verify="required" autocomplete="off" placeholder="root" class="layui-input" required value="`+username+`">
         </div>
         </div


         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">登录密码</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="password" lay-verify="required" autocomplete="off" placeholder="123456" class="layui-input" required value="`+password+`">
         </div>


         <div class="layui-form-item">
         <div class="layui-input-block">
         <button type="submit" lay-filter='update' class="layui-btn" lay-submit="" lay-filter="demo1">保存修改</button>
         <button type="reset" class="layui-btn layui-btn-primary" type="reset">重置</button>
         </div>
         </div>


         <script>
         layui.form.render()
         </\script>
         `

         //输出页面层
         var layer_form_html=layer.open({
          type: 1,
          shadeClose: true,
          closeBtn: 1,
          title:'修改主机信息',
          skin: 'layui-layer-rim', //加上边框
          area: ['380px', '420px'], //宽高
          content: tpl_html
      });
     })
    },
    //显示主机信息添加窗口
    showServerInfoAdd:function(){
      let source_type_list=['阿里云','腾讯云','亚马逊','电信云','其他平台']
      let source_type_option,option_name=''
      for(i=0;i<source_type_list.length;i++){
        option_name=source_type_list[i];
        if(i==0){
           source_type_option+=`<option selected value="`+option_name+`">`+option_name+`</option>`;
       }else{
        source_type_option+=`<option value="`+option_name+`">`+option_name+`</option>`;
    }
}


         //页面层模板
         tpl_html=`   
         <form class="layui-form" style="margin-top:10px">

         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">主机地址</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="ip" lay-verify="required" autocomplete="off" placeholder="192.168.1.10" class="layui-input" value="">
         </div>
         </div>

         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">显示名称</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="amdb server" class="layui-input" value="">
         </div>
         </div>


         <div class="layui-form-item">
         <div class="layui-inline">
         <label class="layui-form-label" style="width:100px;margin-right:10px">平台类型</label>
         <div class="layui-input-inline">
         <select name="source_type"  lay-verify="required">
         `
         +source_type_option+
         `
         </select>
         </div>
         </div>
         </div>


         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">登录账号</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="username" lay-verify="required" autocomplete="off" placeholder="root" class="layui-input" value="">
         </div>
         </div


         <div class="layui-form-item">
         <label class="layui-form-label" style="width:100px">登录密码</label>
         <div class="layui-input-block" style="width:150px">
         <input type="text" name="password" lay-verify="required" autocomplete="off" placeholder="123456" class="layui-input" value="">
         </div>


         <div class="layui-form-item">
         <div class="layui-input-block">
         <button type="submit" lay-filter='insert' class="layui-btn" lay-submit="" lay-filter="demo1">添加主机</button>
         <button type="reset" class="layui-btn layui-btn-primary" type="reset">重置</button>
         </div>
         </div>


         <script>
         layui.form.render()
         </\script>
         `

         //输出页面层 
         var layer_form_html=layer.open({
          type: 1,
          shadeClose: true,
          closeBtn: 1,
          title:'添加主机信息',
          skin: 'layui-layer-rim', //加上边框
          area: ['380px', '460px'], //宽高
          content: tpl_html
      });  
     },
      //显示主机信息添加窗口
      showServerInfoAddRows  :function(){
          let source_type_list=['阿里云','腾讯云','亚马逊','电信云','其他平台']
          let source_type_option,option_name=''
          for(i=0;i<source_type_list.length;i++){
            option_name=source_type_list[i];
            if(i==0){
               source_type_option+=`<option selected value="`+option_name+`">`+option_name+`</option>`;
           }else{
            source_type_option+=`<option value="`+option_name+`">`+option_name+`</option>`;
        }
    }


         //页面层模板
         tpl_html=`   
         <form class="layui-form" style="margin-top:10px">

         <div class="layui-form-item layui-form-text">
         <label class="layui-form-label" style="width:90px">主机信息</label>
         <div class="layui-input-block">
         <textarea name="serverInfoRows" style="width:90%;height:220px;resize:none" placeholder="批量导入格式:IP/显示名称/平台类型/登录账号/登录密码\n一行一个,例:\n192.168.1.10/amdb1/阿里云/root/123456\n192.168.1.11/amdb2/腾讯云/root/123456\n192.168.1.12/amdb3/亚马逊云/root/123456\n192.168.1.13/amdb4/电信云/root/123456\n192.168.1.14/amdb5/其他平台/root/123456" class="layui-textarea"  lay-verify="required" ></textarea>
         </div>
         </div>

         <div class="layui-form-item">
         <div class="layui-input-block">
         <button type="submit" lay-filter='insertRows' class="layui-btn" lay-submit="" lay-filter="demo1">批量添加</button>
         <button type="reset" class="layui-btn layui-btn-primary" type="reset">重置</button>
         </div>
         </div>

         <div class="layui-progress" lay-showPercent="true" lay-filter="serverInfoRows">
         <div class="layui-progress-bar layui-bg-red" lay-percent=""></div>
         </div>

         <script>
         layui.form.render()
         layui.element.render('div','serverInfoRows');
         </\script>
         `

         //输出页面层
         var layer_form_html=layer.open({
          type: 1,
          shadeClose: true,
          closeBtn: 1,
          title:'批量添加主机信息',
          skin: 'layui-layer-rim', //加上边框
          area: ['550px', '380px'], //宽高
          content: tpl_html
      });  
     },
     updateServerInfo:function(data){
        let that=this;
        let postdata=new URLSearchParams()
        postdata.append('id',data.field.id)
        postdata.append('ip',data.field.ip)
        postdata.append('name',data.field.name)
        postdata.append('source_type',data.field.source_type)
        postdata.append('username',data.field.username)
        postdata.append('password',data.field.password)
        axios
        .post('<?=base_url("Api/ServerInfo/set")?>',postdata)
        .then(function(response){
            if(response.data==true){
                   that.ServerInfoGetAll()    //重新获取所有主机列表
                   msg="修改成功"
               }else{
                msg="修改失败"
            } 

            layer.msg(msg);
        })
        .catch(function(err){
         msg="修改失败"
         layer.msg(msg);

     })
        layer.closeAll('page'); 
    },
    addServerInfo:function(data){
        let that=this;
        let postdata=new URLSearchParams()
        postdata.append('id',data.field.id)
        postdata.append('ip',data.field.ip)
        postdata.append('ip_ipv4','获取中')
        postdata.append('name',data.field.name)
        postdata.append('source_type',data.field.source_type)
        postdata.append('username',data.field.username)
        postdata.append('password',data.field.password)
        postdata.append('state',"0")
        axios
        .post('<?=base_url("Api/ServerInfo/add")?>',postdata)
        .then(function(response){
            console.log(response.data)
            if(response.data==true){
         that.ServerInfoGetAll()    //重新获取所有主机列表
         msg="添加成功"
     }else{
        msg="添加失败，请检查IP是否重复"
    } 

    layer.msg(msg);
})
        .catch(function(err){
         msg="添加失败"
         layer.msg(msg);

     })
        layer.closeAll('page'); 

    },  
    addServerInfoRows:function(data){
        serverInfoRows=data.field.serverInfoRows
        //第一次进行导入格式检测
        spiltSeverInfo=serverInfoRows.split('\n')
        length1=spiltSeverInfo.length
        if(length1>0){
         for(i=0;i<length1;i++){
            serverInfoRow=spiltSeverInfo[i]
            if(serverInfoRow){
             serverInfoRow=serverInfoRow.split("/")
             length2=serverInfoRow.length
             if(length2!=5){
              layer.msg('导入信息有误');
              return
          }
          for(j=0;j<length2;j++){
            serverField=serverInfoRow[j]
            if(!serverField){
             layer.msg('导入信息有误');
             return
         }
     }
 }
 else
 {
    layer.msg('导入信息有误');
    return
}
}

     //第二次开始正式导入数据
     spiltSeverInfo=serverInfoRows.split('\n')
     let counter=1;
     let progress=1;
     let that=this;
     for(i=0;i<length1;i++){
        serverInfoRow=spiltSeverInfo[i]
        serverInfoRow=serverInfoRow.split("/")
        ip=serverInfoRow[0]
        name=serverInfoRow[1]
        source_type=serverInfoRow[2]
        username=serverInfoRow[3]
        password=serverInfoRow[4]  
        //组合请求数据
        let postdata=new URLSearchParams()
        postdata.append('ip',ip)
        postdata.append('ip_ipv4','获取中')
        postdata.append('name',name)
        postdata.append('source_type',source_type)
        postdata.append('username',username)
        postdata.append('password',password)
        postdata.append('state',"0")
        //发送请求
        setTimeout(function() {
            axios
            .post('<?=base_url("Api/ServerInfo/add")?>',postdata)
            .then(function(response){
                if(response.data==true){
                    if(counter==length1){
                      that.ServerInfoGetAll()   
                      layer.msg('添加成功');
                      layer.closeAll('page'); 
                  } 
              }else{
                layer.msg('添加失败');
                layer.closeAll('page'); 
                return
            }
            progress=Math.round(100-(100/counter))
            layui.element.progress('serverInfoRows',progress+'%');
            counter++

        }).catch(function(err){
         msg="添加失败"
         layer.msg(msg);
         layer.closeAll('page'); 
         return
     })
},i*100) //设置延迟100ms防止插入顺序颠倒
    }     
}

},
deleteServerInfo:function(event,itemID,itemName,itemip){
    let that=this
    let ele=event.currentTarget
    let postdata=new URLSearchParams()
    postdata.append('id',itemID)
    postdata.append('ip',itemip)
    postdata.append('name','required')
    postdata.append('username','required')
    postdata.append('password','required')

    layer.confirm('确定要删除: '+itemName+' 吗?', 
        function(){                       //buttnon1
           axios
           .post('<?=base_url("Api/ServerInfo/del")?>',postdata)
           .then(function(response){
            if(response.data==true){
              that.ServerInfoGetAll() //重新获取所有主机列表
              msg="删除成功"
          }else{
            msg="删除失败"
        } 
        layer.close(layer.index)      //关闭询问提示框   
        layer.msg(msg)   
    })
           .catch(function(err){
            msg="删除失败"
            layer.msg(msg);
        })
       }, 
       function(){                        //buttnon2

       })
},
reloadHardwareInfo:function(itemID,itemip){
    let that=this
    let ele=event.currentTarget
    let postdata=new URLSearchParams()
    postdata.append('id',itemID)
    postdata.append('ip',itemip)
    axios
    .post('<?=base_url("Api/ServerHardware/reloadServerHardware")?>',postdata)
    .then(function(response){
        if(response.data==true){
            that.ServerInfoGetAll()      //重新获取所有主机列表
            layer.close(layer.index)      //关闭询问提示框   
            layer.msg("刷新成功")   
        }else{
            that.ServerInfoGetAll()      //重新获取所有主机列表
            layer.close(layer.index)      //关闭询问提示框   
            layer.msg("刷新失败") 
        } 
    })
    .catch(function(err){
        msg="刷新失败"
        layer.msg(msg);
    })

},


    //鼠标离开时,关闭tips提示
    closeServerHardwareInfo:function(){
     layer.closeAll();
 }
},
})

    //初始化layui
    layui.use(['layer', 'form','upload'], function(){
    var layer = layui.layer  //layer组件
    ,form = layui.form       //form组件
    ,laypage=layui.laypage   //分页组件
    ,element=layui.element 

    form.render();           //渲染form组件



    //修改单个主机
    form.on('submit(update)',function(data){      //拦截form提交跳转
        vm.updateServerInfo(data)                 
        return false;
    })

     //添加单个主机
    form.on('submit(insert)',function(data){      //拦截form提交跳转
        vm.addServerInfo(data)                    
        return false;
    })

     //批量添加主机
    form.on('submit(insertRows)',function(data){  //拦截form提交跳转
        vm.addServerInfoRows(data)                
        return false;
    })

    //laypage分页配置
    getCount=ServerInfoGetCount()             //取得总行数
    console.log(getCount)
    laypage.render({                          
        elem:'laypage'                        //绑定元素
        ,count:getCount                       //总数设置
        ,limit:vm.page.limit                      //显示数量
        ,jump:function(obj,first){
            offset=((obj.curr-1)*obj.limit)
            Vue.set(g_page,'offset',offset)
            vm.ServerInfoGetAll()

        }
    })

    //总行数请求
    function ServerInfoGetCount(){
        let count
        $.ajax({
            url:"<?=base_url('Api/ServerInfo/getCount')?>",
            type:'get',
            async: false,
            dataType:"json",
            success:function(data){
               count= data;
           }
       });
        return count
    }

})


</script>



</body>
</html>
