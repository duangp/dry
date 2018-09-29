<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>维度</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/bootstrap.min.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/style.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/lines.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/font-awesome.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/custom.css" />	

<!-- jQuery -->
<script type="text/javascript" src="/weidu/Public/admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/metisMenu.min.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/custom.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/d3.v3.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/rickshaw.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand">维度</a>
				<a href="/weidu/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div>
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
			    <li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/weidu/Public/admin/themes/images/logo.png"></a>	        		
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
                                    <a href="/weidu/admin.php/Company/index">公司信息</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php/Images/index">首页轮播图</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>板块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/weidu/admin.php/Plate/index">板块管理</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php/Recruit/index">招聘信息</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php/Message/index">留言信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/weidu/admin.php/Goods/index"><i class="fa fa-indent nav_icon"></i>商品列表<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/weidu/admin.php/Manager/index"><i class="fa fa-envelope nav_icon"></i>管理员列表<span class="fa arrow"></span></a>                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>会员列表<span class="fa arrow"></span></a>  
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="/weidu/admin.php/Member/index">会员列表</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php/Member/level">会员等级</a>
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
		
<link rel="stylesheet" type="text/css" href="/weidu/Public/admin/assets/design/css/trumbowyg.css" />
<script type="text/javascript" src="/weidu/Public/admin/assets/trumbowyg.js"></script>
<style>
body li { list-style: none; }
tr td ul{float:left;}
</style>
	<div class="bs-example1" data-example-id="contextual-table">	
	<form action="/weidu/admin.php/Recruit/<?php echo ($action); ?>" enctype="multipart/form-data" method="post">
	<table class="table">
	  <thead>	  
		<tr>
			<?php if(($action) == "add"): ?><h3>添加招聘</h3><?php endif; ?>
			<?php if(($action) == "update"): ?><h3>修改招聘</h3><?php endif; ?>
		</tr>
	  </thead>
	  <tbody>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">工作岗位</span>
            <input type="text" class="form-control" name="recruit_name" placeholder="请输入工作岗位" value="<?php echo ($recruit_one["recruit_name"]); ?>">
          </div>
		</tr>
		<tr>
		  <div class="input-group">
            <span class="input-group-addon">职位类别</span>
            <input type="text" class="form-control" name="job" placeholder="请输入职位类别" value="<?php echo ($recruit_one["job"]); ?>">
          </div>
		</tr>
		<tr>
		  <div class="input-group">
            <span class="input-group-addon">工作地点</span>
            <input type="text" class="form-control" name="place" placeholder="请输入工作地点" value="<?php echo ($recruit_one["place"]); ?>">
          </div>
		</tr>
		<tr>
		  <div class="input-group">
            <span class="input-group-addon">招聘人数</span>
            <input type="text" class="form-control" name="number" placeholder="请输入招聘人数" value="<?php echo ($recruit_one["number"]); ?>">
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">联系电话</span>
            <input type="text" class="form-control" name="phone" placeholder="请输入联系电话" value="<?php echo ($recruit_one["phone"]); ?>">
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">公司地址</span>
            <input type="text" class="form-control" name="address" placeholder="请输入公司地址" value="<?php echo ($recruit_one["address"]); ?>">
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">排序</span>
            <input type="text" class="form-control" name="recruit_order" placeholder="请输入排序" value="<?php echo ($recruit_one["recruit_order"]); ?>">
          </div>
		</tr>		
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">文章详情</span>
            <div onmousedown="show_element(event)" style="clear:both" id="customized-buttonpane" class="editor" ><?php echo htmlspecialchars_decode($recruit_one['customized-buttonpane']);?></div>
          </div>
		</tr>		
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">是否显示</span>            
          </div>
		  <div class="radio">
				<label>
					<input type="radio" name="is_show" value="0" <?php if(($recruit_one[is_show]) == "0"): ?>checked<?php endif; ?> <?php if(($recruit_one[is_show]) == ""): ?>checked<?php endif; ?>>是
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="is_show" value="1" <?php if(($recruit_one[is_show]) == "1"): ?>checked<?php endif; ?>>否
				</label>
			</div>
		</tr>		
		<tr>
		  <input type="hidden" name="action" value="<?php echo ($action); ?>"/>
		  <input type="hidden" name="recruit_id" value="<?php echo ($recruit_one["recruit_id"]); ?>"/>
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
	<script type="text/javascript" src="/weidu/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>