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
            <div class="navbar-header">
                <a class="navbar-brand"><?php echo ($company["company_name"]); ?></a>
				<a href="/weidu/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div>
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
			    <li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/weidu/<?php echo ($company["logo"]); ?>"></a>	        		
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
								<li>
                                    <a href="/weidu/admin.php/Member/buy">购买列表</a>
                                </li>
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
		
<div class="col-md-12 graphs">
	<div class="xs">
  	 <h3>板块管理</h3>
	 <a href="form" class="btn btn-info">添加板块</a>
	 <div class=" panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
		    <div class="row">
            <div class="col-md-12">
                <div class="panel-group table-responsive" role="tablist">
					<?php if(is_array($plate_list)): foreach($plate_list as $k=>$plate): ?><div class="panel panel-primary leftMenu">						
                        <!-- 利用data-target指定要折叠的分组列表 -->						
                        <div class="panel-heading" id="collapseListGroupHeading<?php echo ($k); ?>" data-toggle="collapse" data-target="#collapseListGroup<?php echo ($k); ?>" role="tab" >
                            <h4 class="panel-title">
                                <?php echo ($plate[name]); ?>
								<span class="badge">
								<a href="/weidu/admin.php/Plate/form/id/<?php echo ($plate[id]); ?>">编辑</a>
							    <a href="/weidu/admin.php/Plate/delete/id/<?php echo ($plate[id]); ?>" onclick="if (!confirm('是否确认删除？')) return false;">删除</a>
								</span>
                                
                        </div>
						
                        <!-- .panel-collapse和.collapse标明折叠元素 .in表示要显示出来 -->
                        <div style="font-size:14px;" id="collapseListGroup<?php echo ($k); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading<?php echo ($k); ?>">
                            <ul class="list-group">
							<?php if(is_array($plate["child"])): foreach($plate["child"] as $key=>$child): ?><li class="list-group-item">
                                <!-- 利用data-target指定URL -->                               
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($child[name]); ?>
									<span class="pull-right">
									<a href="/weidu/admin.php/Plate/form/id/<?php echo ($child[id]); ?>">编辑</a>
									<a href="/weidu/admin.php/Plate/delete/id/<?php echo ($child[id]); ?>" onclick="if (!confirm('是否确认删除？')) return false;">删除</a>
									</span>
                              </li>
							  <?php if(is_array($child["child"])): foreach($child["child"] as $key=>$childer): ?><li class="list-group-item">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($childer[name]); ?>
									<span class="pull-right">
									<a href="/weidu/admin.php/Plate/form/id/<?php echo ($childer[id]); ?>">编辑</a>
									<a href="/weidu/admin.php/Plate/delete/id/<?php echo ($childer[id]); ?>" onclick="if (!confirm('是否确认删除？')) return false;">删除</a>
									</span>				
                              </li>	
							  <?php foreach($childer['child'] as $k => $v){?>
							  <li class="list-group-item">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v[name]; ?>
									<span class="pull-right">
									<a href="/weidu/admin.php/Plate/form/id/<?php echo $v[id]; ?>">编辑</a>
									<a href="/weidu/admin.php/Plate/delete/id/<?php echo $v[id]; ?>" onclick="if (!confirm('是否确认删除？')) return false;">删除</a>
									</span>				
                              </li>	
							  <?php } endforeach; endif; endforeach; endif; ?>
                            </ul>
                        </div>
                    </div><!--panel end--><?php endforeach; endif; ?> 
                </div>
            </div>         
        </div> 
	</div>
  </div>
</div>
<script>
$(function(){
	$(".panel-heading").click(function(e){
		/*切换折叠指示图标*/
		$(this).find("span").toggleClass("glyphicon-chevron-down");
		$(this).find("span").toggleClass("glyphicon-chevron-up");
	});
});
</script>

	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/weidu/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>