<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($company["company_name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" type="text/css" href="/Public/admin/themes/css/bootstrap.min.css" />	
 <link rel="stylesheet" type="text/css" href="/Public/admin/themes/css/style.css" />	
 <link rel="stylesheet" type="text/css" href="/Public/admin/themes/css/lines.css" />	
 <link rel="stylesheet" type="text/css" href="/Public/admin/themes/css/font-awesome.css" />	
 <link rel="stylesheet" type="text/css" href="/Public/admin/themes/css/custom.css" />	

<!-- jQuery -->
<script type="text/javascript" src="/Public/admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/themes/js/metisMenu.min.js"></script>
<script type="text/javascript" src="/Public/admin/themes/js/custom.js"></script>
<script type="text/javascript" src="/Public/admin/themes/js/d3.v3.js"></script>
<script type="text/javascript" src="/Public/admin/themes/js/rickshaw.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand"><?php echo ($company["company_name"]); ?></a>
				<a href="/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div>
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
			    <li class="dropdown">
	        		<a href="/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/<?php echo ($company["logo"]); ?>"></a>	        		
	      		</li>
			</ul>
			<!-- 左侧菜单栏 -->
            
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""><i class="fa fa-laptop nav_icon"></i>网站信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">								
								<li>
                                    <a href="/admin.php/Company/index">公司信息</a>
                                </li>
								<!-- <li>
                                    <a href="/admin.php/Images/index">首页轮播图</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>板块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/Plate/index">板块管理</a>
                                </li>
								<li>
                                    <a href="/admin.php/Recruit/index">招聘信息</a>
                                </li>
								<li>
                                    <a href="/admin.php/Message/index">留言信息</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="/admin.php/Goods/index"><i class="fa fa-indent nav_icon"></i>商品列表<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/admin.php/Manager/index"><i class="fa fa-envelope nav_icon"></i>管理员列表<span class="fa arrow"></span></a>                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>会员列表<span class="fa arrow"></span></a>  
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/Member/index">会员列表</a>
                                </li>
								<!-- <li>
                                    <a href="/admin.php/Member/buy">购买列表</a>
                                </li> -->
								<li>
                                    <a href="/admin.php/Member/put">提现列表</a>
                                </li>
                            </ul>							
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
			
            <!-- /.navbar-static-side -->
        </nav>
		
        <div id="page-wrapper">
		<!-- 中间编辑栏 -->
		
	<div class="bs-example1" data-example-id="contextual-table">	
	<form action="/admin.php/Manager/<?php echo ($action); ?>" enctype="multipart/form-data" method="post">
	<table class="table">
	  <thead>	  
		<tr>
		  <?php if(($action) == "add"): ?><h3>添加管理员</h3><?php endif; ?>
		  <?php if(($action) == "update"): ?><h3>修改管理员</h3><?php endif; ?>
		</tr>
	  </thead>
	  <tbody>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">账号名</span>
            <input type="text" class="form-control" name="username" placeholder="请输入账号名" value="<?php echo ($manager_one["username"]); ?>">
          </div>
		</tr>
		<tr>
		  <div class="input-group">
            <span class="input-group-addon">密码</span>
            <input type="password" class="form-control" name="password" placeholder="请输入密码" value="<?php echo ($manager_one["password"]); ?>">
          </div>
		</tr>
		<tr>
		  <div class="input-group">
            <span class="input-group-addon">部门</span>
			<input type="text" class="form-control" name="level" placeholder="请输入部门" value="<?php echo ($manager_one["level"]); ?>">
		  </div>
		</tr>		
		<tr>
		  <input type="hidden" name="action" value="<?php echo ($action); ?>"/>
		  <input type="hidden" name="user_id" value="<?php echo ($manager_one["user_id"]); ?>"/>
		  <td><button type="submit" class="btn btn-primary">提交</button></td>
		</tr>
	  </tbody>
	</table>
	</form>
	</div>


	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>