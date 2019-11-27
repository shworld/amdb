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
                                    <li class="breadcrumb-item"><a href="#">资产统计</a></li>
                                    <li class="breadcrumb-item active">文字报告</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">                   
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title pr">         
                                <button type="submit" class="layui-btn layui-btn-info" v-on:click="makeReport()">点击生成</button>
                                <button type="submit" id="cp" class="layui-btn layui-btn-primary" v-on:click="copy()" >点击复制</button>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <h4 class="card-title">服务器资产文字报告</h4>
                            <textarea id="serverReport" style="width:90%;height:600px;resize:none" placeholder="" class="layui-textarea"  lay-verify="required" v-model="textarea"></textarea>
                        </div>
                    </div>
                </div>
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
          window.onload = function()//文本获取焦点
          {
            document.getElementById('serverReport').focus();
        }

        var vm =new Vue({
            el:"#amdb",
            data:{
                textarea:''
            },
            methods:{
                makeReport:function(){
                    let that=this;
                    axios
                    .get("<?=base_url('Api/ServerReport/makeReport')?>")
                    .then(function(response){
                        that.textarea=response.data
                        layer.msg("生成成功",{time:1000})
                    })
                },
                copy:function(){
                    let that=this;
                    var clipboard = new ClipboardJS("#cp", {
                        text: function () {
                            layer.msg("复制成功",{time:1000})
                            return that.textarea;
                        }
                    });
                }
            }

        })

//layui实例
layui.use(['layer'], function(){
    var layer = layui.layer  //layer组件
})

</script>
</body>
</html>
