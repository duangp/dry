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
								<li>
                                    <a href="/admin.php/Member/buy">购买列表</a>
                                </li>
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
		
<link rel="stylesheet" type="text/css" href="/Public/admin/jqueryTreescroll/css/tree.css" />
<script type="text/javascript" src="/Public/admin/jqueryTreescroll/js/treescroll.min.js"></script>
<div class="col-md-12 graphs">
	<div class="xs">
  	<h3>会员列表</h3>
    <a href="form" class="btn btn-info">添加会员</a>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		<div class="panel-body no-padding">
			<table class="table table-striped">
				<thead>
					<tr class="warning">
						<th>手机账号</th>
						<th>会员名</th>
						<th>上一级</th>
						<th>上一级获得返现</th>
						<th>支付方式</th>
						<th>购买数量</th>
						<th>单价</th>
						<th>总价</th>
						<th>购买时间</th>
						<th>是否已经付款成功</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($buy_list)): foreach($buy_list as $key=>$buy): ?><tr>
						 <td><?php echo ($buy[member_phone]); ?></td>
						 <td><?php echo ($buy[member_name]); ?></td>
						 <td>
						 <?php if(is_array($member_list)): foreach($member_list as $key=>$member): if(($member["member_id"]) == $buy[parent_id]): echo ($member[member_phone]); ?><br>
						 <?php if(($member["member_name"]) != ""): echo ($member[member_name]); endif; endif; endforeach; endif; ?>
						 </td>
						 <td><?php echo ($buy[back_money]); ?></td>
						 <td>
						 <?php if(($buy["buy_mode"]) == "1"): ?>微信<?php endif; ?>
						 <?php if(($buy["buy_mode"]) == "2"): ?>支付宝<?php endif; ?>
						 </td>
						 <td><?php echo ($buy[goods_number]); ?></td>
						 <td><?php echo ($buy[goods_price]); ?></td>
						 <td><?php echo ($buy[total_price]); ?></td>
						 <td><?php echo date('Y-m-d H:i:s',$member['pay_time']);?></td>
						 <td>
						 <?php if(($buy["is_pay"]) == "0"): ?>未付款<?php endif; ?>
						 <?php if(($buy["is_pay"]) == "1"): ?>已付款<?php endif; ?>
						 </td>
						 <td>
						  <a href="/admin.php/Member/form/id/<?php echo ($member[member_id]); ?>">编辑</a>
						  <a href="/admin.php/Member/delete/id/<?php echo ($member[member_id]); ?>" onclick="if (!confirm('是否确认删除？')) return false;">删除</a>
						 </td>
					</tr><?php endforeach; endif; ?>
					
				</tbody>
			</table>
		</div>
		 <ul class="pagination">
			<?php echo ($page); ?>
		 </ul>
	</div>
  </div>
</div>

	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>