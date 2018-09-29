<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($company["company_name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
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
            <!-- <div class="navbar-header">
                <a class="navbar-brand"><?php echo ($company["company_name"]); ?></a>
				<a href="/weidu/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div> -->
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-left">
			    <li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/weidu/<?php echo ($company["logo"]); ?>"></a>	        		
	      		</li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
				<li style="line-height:52px;">|</li>
			    <li class="dropdown">
	        		<a href="/weidu/admin.php/Index/destroy" class="dropdown-toggle" style="font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出登入</a>		
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
								<!-- <li>
                                    <a href="/weidu/admin.php/Images/index">首页轮播图</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
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
                        </li> -->
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
								<!-- <li>
                                    <a href="/weidu/admin.php/Member/buy">购买列表</a>
                                </li> -->
								<li>
                                    <a href="/weidu/admin.php/Member/put">提现列表</a>
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
		
<link rel="stylesheet" type="text/css" href="/weidu/Public/admin/jqueryTreescroll/css/tree.css" />
<script type="text/javascript" src="/weidu/Public/admin/jqueryTreescroll/js/treescroll.min.js"></script>
<!-- <script type="text/javascript" src="/weidu/Public/admin/login/js/jquery-1.8.2.min.js"></script> -->
<div class="col-md-12 graphs">
	<div class="xs">
  	<h3>会员列表</h3>
    <!-- <a href="form" class="btn btn-info">添加会员</a> -->
	<!-- <form role="form">
	  <div class="form-group">
		<label for="name">会员搜索</label>
		<select class="form-control" name="member_id">
		<option>请选择</option>
		<?php if(is_array($member_all)): foreach($member_all as $key=>$member): ?><option value="<?php echo ($member["member_id"]); ?>"><?php echo ($member["member_name"]); ?></option><?php endforeach; endif; ?> 
		</select>
	  </div>
	</form> -->
	<div>
		<form class="bs-example bs-example-form" role="form">
			<div class="row">
				<div class="col-lg-2">
					<div class="input-group">
						<input type="text" class="form-control" name="search" value="" placeholder="请输入手机号">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">搜索</button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<!-- <div class="row">
				<div class="col-lg-2">
					<div class="input-group">
						<input type="text" class="form-control" name="" value="" placeholder="请输入会员名">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">搜索</button>
						</span>
					</div>
				</div>
			</div> -->
		</form>
	</div>
	<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		<div class="panel-body no-padding">
			<table class="table table-striped">
				<thead>
					<tr class="warning">
						<th>手机账号</th>
						<th>操作</th>
					</tr>
				</thead>
			</table>			
			<div class="list">
			<?php echo ($member_list); ?>
			</div>
		</div>

	</div>
  
  </div>
</div>
<script type="text/javascript">
$("button").on('click keydown',function(){
	var search = $("input[name='search']").val();
	$.ajax({
	   type: "POST",
	   url: "/weidu/admin.php/Member/search",
	   data: {'search':search},
	   dataType: "json",
	   success: function(results){	
			var list = results.list;
			$(".list").html(list);								
		  }
	});
})
</script>

	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/weidu/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>