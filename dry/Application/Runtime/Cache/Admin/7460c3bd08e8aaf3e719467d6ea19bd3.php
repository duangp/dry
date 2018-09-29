<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($company["company_name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" type="text/css" href="/dianchi/Public/admin/themes/css/bootstrap.min.css" />	
 <link rel="stylesheet" type="text/css" href="/dianchi/Public/admin/themes/css/style.css" />	
 <link rel="stylesheet" type="text/css" href="/dianchi/Public/admin/themes/css/lines.css" />	
 <link rel="stylesheet" type="text/css" href="/dianchi/Public/admin/themes/css/font-awesome.css" />	
 <link rel="stylesheet" type="text/css" href="/dianchi/Public/admin/themes/css/custom.css" />	

<!-- jQuery -->
<script type="text/javascript" src="/dianchi/Public/admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="/dianchi/Public/admin/themes/js/metisMenu.min.js"></script>
<script type="text/javascript" src="/dianchi/Public/admin/themes/js/custom.js"></script>
<script type="text/javascript" src="/dianchi/Public/admin/themes/js/d3.v3.js"></script>
<script type="text/javascript" src="/dianchi/Public/admin/themes/js/rickshaw.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- <div class="navbar-header">
                <a class="navbar-brand"><?php echo ($company["company_name"]); ?></a>
				<a href="/dianchi/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div> -->
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-left">
			    <li class="dropdown">
	        		<a href="/dianchi/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/dianchi/<?php echo ($company["logo"]); ?>"></a>	        		
	      		</li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/dianchi/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
				<li style="line-height:52px;">|</li>
			    <li class="dropdown">
	        		<a href="/dianchi/admin.php/Index/destroy" class="dropdown-toggle" style="font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出登入</a>		
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
                                    <a href="/dianchi/admin.php/Company/index">公司信息</a>
                                </li>
								<!-- <li>
                                    <a href="/dianchi/admin.php/Images/index">首页轮播图</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>板块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/dianchi/admin.php/Plate/index">板块管理</a>
                                </li>
								<li>
                                    <a href="/dianchi/admin.php/Recruit/index">招聘信息</a>
                                </li>
								<li>
                                    <a href="/dianchi/admin.php/Message/index">留言信息</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="/dianchi/admin.php/Goods/index"><i class="fa fa-indent nav_icon"></i>商品列表<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/dianchi/admin.php/Manager/index"><i class="fa fa-envelope nav_icon"></i>管理员列表<span class="fa arrow"></span></a>                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>会员列表<span class="fa arrow"></span></a>  
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="/dianchi/admin.php/Member/index">会员列表</a>
                                </li>
								<!-- <li>
                                    <a href="/dianchi/admin.php/Member/buy">购买列表</a>
                                </li> -->
								<li>
                                    <a href="/dianchi/admin.php/Member/put">提现列表</a>
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
		
<link rel="stylesheet" type="text/css" href="/dianchi/Public/admin/assets/design/css/trumbowyg.css" />
<script type="text/javascript" src="/dianchi/Public/admin/assets/trumbowyg.js"></script>
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
									   url: "/dianchi/admin.php/Goods/images",
									   data: {"img":fReader.result},
									   dataType: "json",
									   success: function(result){
											if(result.message == 0){
												tbw.execCommand('insertImage', "/dianchi/"+result.content);
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
	<form action="/dianchi/admin.php/Goods/update" enctype="multipart/form-data" method="post">
	<table class="table">
	  <thead>	  
		<tr>
			<h3>商品信息</h3><a href="/dianchi/index.php/<?php echo ($goods["url"]); ?>" target="_blank">点击查看</a>
		</tr>
	  </thead>
	  <tbody>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">商品名称</span>
            <input type="text" class="form-control" name="goods_name" placeholder="请输入商品名称" value="<?php echo ($goods["goods_name"]); ?>">
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">价格</span>
            <input type="text" class="form-control" name="goods_price" placeholder="请输入商品价格" value="<?php echo ($goods["goods_price"]); ?>">
          </div>
		</tr>
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">商品详情</span>
           <div onmousedown="show_element(event)" style="clear:both" id="customized-buttonpane" class="editor" ><?php echo htmlspecialchars_decode($goods['customized-buttonpane']);?></div>
          </div>
		</tr>	
		<!-- <tr id="banner">
		  <span class="input-group-addon">二维码</span>
			<?php if(($goods['goods_img']) != ""): ?><div class="col-sm-6 col-md-3">
				<div class="thumbnail code">
					<img src="/dianchi/<?php echo ($goods["goods_img"]); ?>">
				</div>
			</div><?php endif; ?>
			<div class="produce"><a>重新生成</a></div>
		</tr> -->
		<tr class="info">
		  <div class="input-group">
            <span class="input-group-addon">二维码</span>
            <div class="code"><img src="/dianchi/<?php echo ($goods["goods_img"]); ?>"></div>
			<div class="produce"><a>重新生成</a></div>
          </div>
		</tr>
		<tr id="banner">
		  <span class="input-group-addon">商品图</span>
		  <td>
		  <?php if(is_array($images_list)): foreach($images_list as $key=>$image): ?><div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="/dianchi/<?php echo ($image["img_url"]); ?>">
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
		  <input type="hidden" name="goods_id" value="<?php echo ($goods["goods_id"]); ?>"/>
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
		var goods_id = $('input[name="goods_id"]').val();
		$.ajax({
		   type: "POST",
		   url: "/dianchi/admin.php/Goods/delete_img",
		   data: {"id":id,"goods_id":goods_id},
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
						html += '<img src="/dianchi/'+img[i].img_url+'">';
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
	$(".produce a").click(function(){
		var goods_id = $('input[name="goods_id"]').val();
		<!-- alert(goods_id); -->
		$.ajax({
		   type: "POST",
		   url: "/dianchi/admin.php/Goods/produce",
		   data: {"goods_id":goods_id},
		   dataType: "json",
		   success: function(data){							
				if(data.message == 0){
					alert(data.content);
					var code = data.code;
					var html = ''; 						
					html += '<img src="/dianchi/'+code+'">';
					
					$(".code").html(html);
				}
				if(data.message == 1){
					alert(data.content);
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
	<script type="text/javascript" src="/dianchi/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>