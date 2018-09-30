<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($company["company_name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" type="text/css" href="/dry/dry/Public/admin/themes/css/bootstrap.min.css" />	
 <link rel="stylesheet" type="text/css" href="/dry/dry/Public/admin/themes/css/style.css" />	
 <link rel="stylesheet" type="text/css" href="/dry/dry/Public/admin/themes/css/lines.css" />	
 <link rel="stylesheet" type="text/css" href="/dry/dry/Public/admin/themes/css/font-awesome.css" />	
 <link rel="stylesheet" type="text/css" href="/dry/dry/Public/admin/themes/css/custom.css" />	

<!-- jQuery -->
<script type="text/javascript" src="/dry/dry/Public/admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="/dry/dry/Public/admin/themes/js/metisMenu.min.js"></script>
<script type="text/javascript" src="/dry/dry/Public/admin/themes/js/custom.js"></script>
<script type="text/javascript" src="/dry/dry/Public/admin/themes/js/d3.v3.js"></script>
<script type="text/javascript" src="/dry/dry/Public/admin/themes/js/rickshaw.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- <div class="navbar-header">
                <a class="navbar-brand"><?php echo ($company["company_name"]); ?></a>
				<a href="/dry/dry/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div> -->
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-left">
			    <li class="dropdown">
	        		<a href="/dry/dry/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/dry/dry/<?php echo ($company["logo"]); ?>"></a>	        		
	      		</li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/dry/dry/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
				<li style="line-height:52px;">|</li>
			    <li class="dropdown">
	        		<a href="/dry/dry/admin.php/Index/destroy" class="dropdown-toggle" style="font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出登入</a>		
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
                                    <a href="/dry/dry/admin.php/Company/index">公司信息</a>
                                </li>
								<!-- <li>
                                    <a href="/dry/dry/admin.php/Images/index">首页轮播图</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>板块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/dry/dry/admin.php/Plate/index">板块管理</a>
                                </li>
								<li>
                                    <a href="/dry/dry/admin.php/Recruit/index">招聘信息</a>
                                </li>
								<li>
                                    <a href="/dry/dry/admin.php/Message/index">留言信息</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="/dry/dry/admin.php/Goods/index"><i class="fa fa-indent nav_icon"></i>商品列表<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/dry/dry/admin.php/Manager/index"><i class="fa fa-envelope nav_icon"></i>管理员列表<span class="fa arrow"></span></a>                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>会员列表<span class="fa arrow"></span></a>  
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="/dry/dry/admin.php/Member/index">会员列表</a>
                                </li>
								<!-- <li>
                                    <a href="/dry/dry/admin.php/Member/buy">购买列表</a>
                                </li> -->
								<li>
                                    <a href="/dry/dry/admin.php/Member/put">提现列表</a>
                                </li>
                            </ul>							
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>月报表列表<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="/dry/dry/admin.php/plateyield/index">极板产量月报表</a>
                                </li>
								<!-- <li>
                                    <a href="/dry/dry/admin.php/Member/buy">购买列表</a>
                                </li> -->
								<li>
                                    <a href="/dry/dry/admin.php/platescraprate/index">极板涂片报废率月报表</a>
                                </li>
                                <li>
                                    <a href="/dry/dry/admin.php/drybatteryoutput/index">干电池产量月报表</a>
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
		
    <link rel="stylesheet" type="text/css" href="/dry/dry/Public/admin/jqueryTreescroll/css/tree.css" />
    <script type="text/javascript" src="/dry/dry/Public/admin/jqueryTreescroll/js/treescroll.min.js"></script>
    <!-- <script type="text/javascript" src="/dry/dry/Public/admin/login/js/jquery-1.8.2.min.js"></script> -->
    <div class="col-md-12 graphs">
<table>
    <tr>
        <td>年</td>
        <td>月</td>
        <td>DUF</td>
    </tr>
    <form action="/dry/dry/admin.php/Drybatteryoutput/add" enctype="multipart/form-data" method="post">
            <tr>
                <td><input type="text" name="dbo_year"></td>
                <td><input type="text" name="dbo_month"></td>
                <td><input type="text" name="duf"></td>
            </tr>
        <input type="submit" name="提交">
    </form>
</table>
</div>

	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/dry/dry/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>