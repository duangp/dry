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
		
<link rel="stylesheet" type="text/css" href="/weidu/Public/admin/assets/design/css/trumbowyg.css" />
<script type="text/javascript" src="/weidu/Public/admin/assets/trumbowyg.js"></script>

<div class="bs-example1" data-example-id="contextual-table">	
	<form action="/weidu/admin.php/Goods/<?php echo ($action); ?>" enctype="multipart/form-data" method="post">
	<table class="table">
	  <thead>	  
		<tr>
			<?php if(($action) == "add"): ?><h3>添加商品</h3><?php endif; ?>
			<?php if(($action) == "update"): ?><h3>修改商品</h3><?php endif; ?>
		</tr>
	  </thead>
	  <tbody>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">商品名称</span>
            <input type="text" class="form-control" name="goods_name" placeholder="请输入商品名称" value="<?php echo ($goods_one["goods_name"]); ?>">
          </div>
		</tr>
		<!-- <tr>
		  <div class="input-group">
            <span class="input-group-addon">上一级板块</span>
            <select class="form-control" name="parent_id">
			  <?php if(is_array($plate_list)): foreach($plate_list as $key=>$plate): if(($plate[plate_id]) == $plate_one[parent_id]): ?><option value="<?php echo ($plate[plate_id]); ?>"><?php echo ($plate[plate_name]); ?></option><?php endif; endforeach; endif; ?>
			  <option value="0">顶级分类</option>	
			  <?php if(is_array($plate_list)): foreach($plate_list as $key=>$plate): ?><option value="<?php echo ($plate[plate_id]); ?>"><?php $__FOR_START_28770__=0;$__FOR_END_28770__=$plate['level'];for($i=$__FOR_START_28770__;$i < $__FOR_END_28770__;$i+=1){ ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php } echo ($plate[plate_name]); ?></option><?php endforeach; endif; ?>			  
			</select>
          </div>
		</tr> -->
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">价格</span>
            <input type="text" class="form-control" name="goods_price" placeholder="请输入商品价格" value="<?php echo ($goods_one["goods_price"]); ?>">
          </div>
		</tr>
		<tr id="banner">
		  <span class="input-group-addon">二维码</span>
		  <td>	
			<?php if(($goods_one['goods_img']) != ""): ?><div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="/weidu/<?php echo ($goods_one["goods_img"]); ?>">
				</div>
			</div><?php endif; ?>
		  </td>
		</tr>
		<tr class="col-sm-6 col-md-3">		  
		  <td>
		  <a class="add form-control">[+]添加图片</a>
		  <div class="form-group">
		  <input type="text" class="form-control" name="img_introduce[]" placeholder="请输入文字介绍">
		  <input type="text" class="form-control" name="img_desc[]" placeholder="请输入顺序">				  
		  <input type="file" class="form-control" name="img_url[]">
		  </div>				  
		  </td>
		</tr>		
		<tr>
		  <input type="hidden" name="action" value="<?php echo ($action); ?>"/>
		  <input type="hidden" name="goods_id" value="<?php echo ($goods_one["goods_id"]); ?>"/>
		  <td><button type="submit" class="btn btn-primary">提交</button></td>
		</tr>
	  </tbody>
	</table>
	</form>
	</div> 
	<script type="text/javascript">
	$('.add').click(function(){
		var html = '';	
		html += '<tr>';
		html += '<td>';
		html += '<a class="delete form-control">[-]取消</a>';
		html += '<div class="form-group"><input type="text" class="form-control" name="img_introduce[]" placeholder="请输入文字介绍"><input type="text" name="img_desc[]" class="form-control" placeholder="请输入顺序"><input type="file" class="form-control" name="img_url[]"></div>';
		html += '</td>';
		html += '</tr>';
		
		$(this).parent().append(html);
		$('.delete').click(function(){
			$(this).parent().parent().remove();
		})			
	})
	$(document).on("click",".caption a",function(){
		var id = $(this).attr("id");
		var plate_id = $('input[name="plate_id"]').val();
		$.ajax({
		   type: "POST",
		   url: "/weidu/admin.php/Goods/delete_img",
		   data: {"id":id,"plate_id":plate_id},
		   dataType: "json",
		   success: function(result){							
				if(result.message !== ''){
					alert(result.message);
				}
				if(result.img !== ''){
					var img = result.img;
					<!-- alert(img.length); -->
					var html = ''; 
					for(var i=0;i<img.length;i++){						
						html += '<div class="col-sm-6 col-md-3">';
						html += '<div class="thumbnail">';
						html += '<img src="/weidu/'+img[i].img_url+'">';
						html += '<div class="caption">';
						html += '<p>文字介绍：'+img[i].img_introduce+'</p>';
						html += '<p>排序：'+img[i].img_desc+'</p>';
						html += '<p>';
						html += '<a id="'+img[i].img_id+'" class="btn btn-default" role="button">删除</a>';
						html += '</p>';
						html += '</div>';
						html += '</div>';
						html += '</div>';
					}
					$("#banner td").html(html);
				}
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