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
<style>
body li { list-style: none; }
tr td ul{float:left;}
</style>
<script type="text/javascript">
(function($){
    $.extend(true, $.trumbowyg, {
        langs: {
            en: {
                base64: "Image as base64",
                file:   "File",
                errFileReaderNotSupported: "FileReader is not supported by your browser."
            },
            fr: {
                base64: "Image en base64",
                file:   "Fichier"
            },
			zh_cn:{
				base64: "本地上传",
                file:   "文件"
			}
        },

        opts: {
            btnsDef: {
                base64: {
                    isSupported: function(){
                        if(typeof FileReader === "undefined"){
                            console.err('[Trumbowyg - Plugin base64] FileReader is not supported by your browser.');
                            return false;
                        }
                        return true;
                    },
                    func: function(params, tbw){
                        var file,
                            $modal = tbw.openModalInsert(
                            // Title
                            tbw.lang['base64'],

                            // Fields
                            {
                                file: {
                                    type: 'file',
                                    required: true
                                },
                                alt: {
                                    label: 'description'
                                }
                            },
							
                            // Callback
                            function(values, fields){
                                var data = new FormData(),
                                fReader  = new FileReader();
				
                                fReader.onloadend = function () {
									$.ajax({
									   type: "POST",
									   url: "/weidu/admin.php/Plate/images",
									   data: {"img":fReader.result},
									   dataType: "json",
									   success: function(result){
											if(result.message == 0){
												tbw.execCommand('insertImage', "/weidu/"+result.content);
												$(['img[src="', result.content, '"]:not([alt])'].join(''), tbw.$box).attr('alt', values['alt']);
												tbw.closeModal();
											}	
									   }
									});
                                }									
								
                                fReader.readAsDataURL(file);
								<!-- alert(fReader.result); -->
								// var img = file;
								
                            }
                        );

                        $('input[type=file]').on('change', function(e){
                            file = e.target.files[0];
                        });
                    }
                }
            }
        }
    });
})(jQuery);

</script>
	<div class="bs-example1" data-example-id="contextual-table">	
	<form action="/weidu/admin.php/Plate/<?php echo ($action); ?>" enctype="multipart/form-data" method="post">
	<table class="table">
	  <thead>	  
		<tr>
			<?php if(($action) == "add"): ?><h3>添加板块</h3><?php endif; ?>
			<?php if(($action) == "update"): ?><h3>修改板块</h3><?php endif; ?>
		</tr>
	  </thead>
	  <tbody>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">板块名称</span>
            <input type="text" class="form-control" name="plate_name" placeholder="请输入板块名称" value="<?php echo ($plate_one["plate_name"]); ?>">
          </div>
		</tr>
		<tr>
		  <div class="input-group">
            <span class="input-group-addon">上一级板块</span>
            <select class="form-control" name="parent_id">
			  <?php if(is_array($plate_list)): foreach($plate_list as $key=>$plate): if(($plate[plate_id]) == $plate_one[parent_id]): ?><option value="<?php echo ($plate[plate_id]); ?>"><?php echo ($plate[plate_name]); ?></option><?php endif; endforeach; endif; ?>
			  <option value="0">顶级分类</option>	
			  <?php if(is_array($plate_list)): foreach($plate_list as $key=>$plate): ?><option value="<?php echo ($plate[plate_id]); ?>"><?php $__FOR_START_25813__=0;$__FOR_END_25813__=$plate['level'];for($i=$__FOR_START_25813__;$i < $__FOR_END_25813__;$i+=1){ ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php } echo ($plate[plate_name]); ?></option><?php endforeach; endif; ?>			  
			</select>
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">介绍详情</span>
            <textarea class="form-control" name="introduce" rows="5"><?php echo ($plate_one[introduce]); ?></textarea>
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">排序</span>
            <input type="text" class="form-control" name="sort_order" placeholder="请输入排序" value="<?php echo ($plate_one["sort_order"]); ?>">
          </div>
		</tr>		
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">文章详情</span>
            <div onmousedown="show_element(event)" style="clear:both" id="customized-buttonpane" class="editor" ><?php echo htmlspecialchars_decode($plate_one['customized-buttonpane']);?></div>
          </div>
		</tr>		
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">是否属于详情页</span>            
          </div>
		  <div class="radio">
				<label>
					<input type="radio" name="is_show" value="0" <?php if(($plate_one[is_show]) == "0"): ?>checked<?php endif; ?> <?php if(($plate_one[is_show]) == ""): ?>checked<?php endif; ?>>是
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="is_show" value="1" <?php if(($plate_one[is_show]) == "1"): ?>checked<?php endif; ?>>否
				</label>
			</div>
		</tr>
		<tr id="banner">
		  <span class="input-group-addon">banner图</span>
		  <td>
		  <?php if(is_array($images)): foreach($images as $key=>$image): ?><div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="/weidu/<?php echo ($image["img_url"]); ?>">
					<div class="caption">
						<p>文字介绍：<?php echo ($image["img_introduce"]); ?></p>
						<p>排序：<?php echo ($image["img_desc"]); ?></p>
						<p>
							<a id="<?php echo ($image["img_id"]); ?>" class="btn btn-default" role="button">
								删除
							</a> 
						</p>
					</div>
				</div>
			</div><?php endforeach; endif; ?>
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
		  <input type="hidden" name="plate_id" value="<?php echo ($plate_one["plate_id"]); ?>"/>
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
		   url: "/weidu/admin.php/Plate/delete_img",
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