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
	<form action="/admin.php/Member/<?php echo ($action); ?>" enctype="multipart/form-data" method="post">
	<table class="table">
	  <thead>	  
		<tr>
			<?php if(($action) == "add"): ?><h3>添加会员</h3><?php endif; ?>
			<?php if(($action) == "update"): ?><h3>修改会员信息</h3><?php endif; ?>
		</tr>
	  </thead>
	  <tbody>
		<!-- <tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">会员账号</span>
            <input type="text" class="form-control" name="member_phone" placeholder="请输入手机号" value="<?php echo ($member_one["member_phone"]); ?>">
          </div>
		</tr> -->
		<!-- <tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">会员名</span>
            <input type="text" class="form-control" name="member_name" placeholder="请输入会员名称" value="<?php echo ($member_one["member_name"]); ?>">
          </div>
		</tr> -->
		<!-- <tr>
		  <div class="input-group">
            <span class="input-group-addon">上一级</span>
            <select class="form-control" name="parent_id">
			  <?php if(is_array($member_list)): foreach($member_list as $key=>$member): if(($member[member_id]) == $member_one[parent_id]): ?><option value="<?php echo ($member[member_id]); ?>"><?php echo ($member[parent_id]); ?></option><?php endif; endforeach; endif; ?>
			  <option value="0">顶级</option>	
			  <?php if(is_array($member_list)): foreach($member_list as $key=>$member): ?><option value="<?php echo ($member[member_id]); ?>"><?php $__FOR_START_21444__=0;$__FOR_END_21444__=$member['level'];for($i=$__FOR_START_21444__;$i < $__FOR_END_21444__;$i+=1){ ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php } echo ($member[member_phone]); ?></option><?php endforeach; endif; ?>			  
			</select>
          </div>
		</tr> -->
		<!-- <tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">会员密码</span>
            <input type="password" class="form-control" name="member_password" placeholder="请输入会员密码" value="<?php echo ($member_one["member_password"]); ?>">
          </div>
		</tr> -->
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">是否是代理</span>            
          </div>
		  <div class="radio">
				<label>
					<input type="radio" name="is_open" value="0" <?php if(($member_one[is_open]) == "0"): ?>checked<?php endif; ?> <?php if(($member_one[is_open]) == ""): ?>checked<?php endif; ?>>否
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="is_open" value="1" <?php if(($member_one[is_open]) == "1"): ?>checked<?php endif; ?>>是
				</label>
			</div>
		</tr>
		<!-- <tr class="col-sm-6 col-md-3">		  
		  <div class="input-group">
            <span class="input-group-addon">二维码</span>            
          </div>
		  <td>
		  <div class="form-group">
		  <img src="/<?php echo ($member_one["code_img"]); ?>" width="" height="">
		  </div>				  
		  </td>
		</tr> -->		
		<tr>
		  <input type="hidden" name="action" value="<?php echo ($action); ?>"/>
		  <input type="hidden" name="member_id" value="<?php echo ($member_one["member_id"]); ?>"/>
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