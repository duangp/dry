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
				<a href="/weidu/admin.php     /Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
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
                                    <a href="/weidu/admin.php    /Company/index">公司信息</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php    /Images/index">首页轮播图</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>板块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/weidu/admin.php    /Plate/index">板块管理</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php    /Recruit/index">招聘信息</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php    /Message/index">留言信息</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/weidu/admin.php    /Manager/index"><i class="fa fa-envelope nav_icon"></i>管理员列表<span class="fa arrow"></span></a>                           
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
  	<h3>用户留言</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>姓名</th>
		  <th>联系方式</th>
		  <th>留言内容</th>
		  <th>留言时间</th>
		  <th>操作</th>
        </tr>
      </thead>
      <tbody>	  
        <?php if(is_array($message_list)): foreach($message_list as $key=>$message): ?><tr>
			  <td><?php echo ($message[message_name]); ?></td>
			  <td><?php echo ($message[message_phone]); ?></td>
			  <td><?php echo ($message[message_content]); ?></td>
			  <td><?php echo date('Y-m-d H:i:s',$message['add_time']);?></td>
			  <td>
			  <a href="/weidu/admin.php    /Message/delete/id/<?php echo ($message[message_id]); ?>" onclick="if (!confirm('是否确认删除？')) return false;">删除</a>
			  </td>
			</tr><?php endforeach; endif; ?>
      </tbody>
    </table>
   </div>
 </div>
 <ul class="pagination">
	<?php echo ($page); ?>
 </ul>
</div>

	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/weidu/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>