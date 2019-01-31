<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"E:\xiaochengxu_test\yinianji-xcx\mathtp5\public/../application/admin\view\math_nums\lst.html";i:1547434089;s:82:"E:\xiaochengxu_test\yinianji-xcx\mathtp5\application\admin\view\common\header.html";i:1547368840;s:80:"E:\xiaochengxu_test\yinianji-xcx\mathtp5\application\admin\view\common\left.html";i:1547369009;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
        <title>小学生数学测试小程序后台</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/adam-jansen.jpg">
                                 
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                          <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                          <!--/Login Area Dropdown-->
                        </li>
                      <!-- /Account Area -->
                      <!--Note: notice that setting div must start right after account area list.
                          no space must be between these elements-->
                      <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
               <ul class="nav sidebar-menu">
                    <!--Dashboard-->
          
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">题库</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('admin/MathNums/index'); ?>">
                                    <span class="menu-text">
                                        题库列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">题库管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加题库" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('admin/MathNums/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">题目</th>
                                <th class="text-center">选项A</th>
                                <th class="text-center">选项B</th>
                                <th class="text-center">选项C</th>
                                <th class="text-center">选项D</th>
                                <th class="text-center">答案</th>
                                <th class="text-center" width="10%;">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($mathInfos) || $mathInfos instanceof \think\Collection || $mathInfos instanceof \think\Paginator): $i = 0; $__LIST__ = $mathInfos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$math_vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td align="center"><?php echo $math_vo['id']; ?></td>
                                <td align="center"><?php echo $math_vo['content']; ?></td>
                                <td align="center"><?php echo $math_vo['result_a']; ?></td>
                                <td align="center"><?php echo $math_vo['result_b']; ?></td>
                                <td align="center"><?php echo $math_vo['result_c']; ?></td>
                                <td align="center"><?php echo $math_vo['result_d']; ?></td>
                                <td align="center"><?php echo $math_vo['true_select']; ?></td>
                                
                                <td align="center">
                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url("MathNums/del",array('id'=>$math_vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div>
                	                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
     <script src="/static/admin/js/jquery_002.js"></script>
    <script src="/static/admin/js/bootstrap.js"></script>
    <script src="/static/admin/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/js/beyond.js"></script>
    


</body></html>