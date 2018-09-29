<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($company["company_name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<!-- <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> -->
<!-- Custom CSS -->
<link href="/dry/Public/home/css/style.css" rel='stylesheet' type='text/css' />
<link href="/dry/Public/home/css/style2.css" rel='stylesheet' type='text/css' />
<link href="/dry/Public/home/css/font-awesome.css" rel="stylesheet"> 
<link href="/dry/Public/home/css/jsmodern-1.1.1.min.css" rel="stylesheet" >
<link href="/dry/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="/dry/Public/home/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/dry/Public/home/js/distpicker.data.js"></script>
<script type="text/javascript" src="/dry/Public/home/js/distpicker.js"></script>
<script type="text/javascript" src="/dry/Public/home/js/main.js"></script>
<script type="text/javascript" src="/dry/Public/home/js/qrcode.js" ></script>
<script src="http://www.jq22.com/jquery/jquery-2.1.1.js"></script>
<script src="/dry/Public/home/js/jquery.min.js"></script>
<script src="/dry/Public/home/js/bootstrap.min.js"></script>
<script src="/dry/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/dry/Public/home/js/jquery-2.1.1.js"></script>
<script src="/dry/Public/home/js/jsmodern-1.1.1.min.js"></script>
<script src="/dry/Public/home/js/move-top.js" type="text/javascript" ></script>
<script src="/dry/Public/home/js/easing.js" type="text/javascript" ></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

</head>
<script type="text/javascript">
//关闭弹出层
function CloseDiv(show_div,bg_div)
{
document.getElementById(show_div).style.display='none';
document.getElementById(bg_div).style.display='none';
};

$(function(){
$("#distpicker").distpicker('destroy');
$("#distpicker").distpicker({
    province: '省份名',
    city: '城市名',
    district: '区名',
    autoSelect: true,
    placeholder: false
});
	$("#eprovinceName").val(data.provinceName);
	$("#eprovinceName").trigger("change");
	$("#ecityName").val(data.cityName);
	$("#ecityName").trigger("change");
	$("#edistrictName").val(data.districtName);
	$("#edetailAddress").val(data.detailAddress);
});
</script>
<body id="login">
	<div class="new_ceng">
	<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button> -->
						<div class="logo">
							<a class="navbar-brand" href="index.html"><img src="/dry/<?php echo ($company["logo"]); ?>" width="80%" height=""></a>
						</div>
					</div>
					<div class="people_right"><a data-toggle="modal" data-target="#myModal2" onclick="return false;">个人中心</a></div>
				</nav>
			</div>
		</div>
	</div>
	<!-- 模态框（Modal） -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>						
				</div>
				<div class="tixian_title"><h4>登录方式</h4></div>
				<div class="modal-body img_ceng">
					<a href="/dry/index.php/Goods/weixin_login"><img src="/dry/Public/home/img/wechat.png" width="" height=""></a>
					<a href="/dry/index.php/Goods/return_url"><img src="/dry/Public/home/img/zhifubao.png" width="" height=""></a>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	<!-- //banner -->
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="col-md-7 blog-left">
				<div class="blog-left-grid">
					<div id="myCarousel" class="carousel slide">
						<!-- 轮播（Carousel）指标 -->
						<!-- <ol class="carousel-indicators" style="border:5px solid red;">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
						</ol>  -->   
						<!-- 轮播（Carousel）项目 -->
						<div class="carousel-inner">
							<?php if(is_array($image_list)): $k = 0; $__LIST__ = $image_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($k % 2 );++$k;?><div class="item <?php if($k == 1): ?>active<?php endif; ?>">
								<img src="/dry/<?php echo ($image["img_url"]); ?>" alt="First slide" width="100%" height="">							
							</div><?php endforeach; endif; else: echo "" ;endif; ?>	
						</div>
						<ol class="carousel-indicators2">
							<?php if(is_array($image_list)): $k = 0; $__LIST__ = $image_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($k % 2 );++$k;?><li data-target="#myCarousel" data-slide-to="<?php echo ($k - 1); ?>" class="<?php if($k-1 == 0): ?>active<?php endif; ?>"><img src="/dry/<?php echo ($image["img_url"]); ?>" alt="First slide" width="" height=""></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ol> 
						<!-- 轮播（Carousel）导航 -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a> 
					</div> 
					<div class="clearfix"> </div>					
					<ul>
					</ul>
				</div>
				<!-- <div class="m2"> -->
					<!-- 注意：购买后2个工作日内代理商若没有给客户发码拨打400电话转客服投诉 -->
				<!-- </div> -->
			</div>
			<div class="col-md-5 blog-right">
				<h3><?php echo ($goods_one["goods_name"]); ?></h3>
				<form action="/dry/index.php/Goods/buy" enctype="multipart/form-data" method="post">
					<ul>
						<li class="check gray">价格：<span class="red">¥ <span class="price"><?php echo ($goods_one["goods_price"]); ?></span></span></li>
						<li class="check black">
							数量：<span class="btn down">-</span><span class="input_btn"><input type="text" name="goods_number" value="1"></span><span class="btn up">+</span>
						</li>						
						<!-- <li class="check gray">发放方式：联系推广员发放邀请码</li> -->
					</ul>					
					<div class="ckeck-bg">
						<div class="checkbox-form">
							<div class="check-right">
								<form>
									<!-- <input type="hidden" name="parent_id" value="<?php echo ($parent_id); ?>"> -->
									<input type="submit" value="立即购买">
								</form>
							</div>
						</div>
					</div>
					<div class="">
						<div class="check">	
							<span class="share">分享到：</span>
							<div class="box">								
								<div id="share-qrcode" title="二维码分享"></div> 
								<div id="share-douban" title="豆瓣分享"></div>
								<div id="share-qzone" title="QQ空间分享"></div>
								<div id="share-sina" title="新浪微博分享"></div>
								<div id="share-qq" title="QQ好友分享"></div>								
							</div>
						</div>
					</div>					
				</form>
			</div>
			<div class="clearfix"> </div>
			<div class="clearfix"> </div>
			<div class="grid_3 grid_5">
				<div class="alert alert-info" role="alert">
					<h4>商品详情</h4>
				</div>
				<div>
				<?php echo htmlspecialchars_decode($goods_one['customized-buttonpane']);?>
				<!-- <img src="/Public/Upload/images/cache/20180810754.png"> -->
				</div>
		</div>
	</div>
	</div>
	</div>

	<script type="text/javascript">
	$(".up").click(function(){
		var goods_number = $("input[name='goods_number']").val();
		goods_number ++;
		var id = 1;
		$.ajax({
			   type: "POST",
			   url: "/dry/index.php/Goods/update_cart",
			   data: {'goods_number':goods_number,'id':id},
			   dataType: "json",
			   success: function(result){											
					$(".price").html(result.total_price);
					$("input[name='goods_number']").attr("value",goods_number);
										
				  }
			});
	})			

	$(".down").click(function(){
		var goods_number = $("input[name='goods_number']").val();
		goods_number --;
		if(goods_number < 1){
			return false;
		}		
		var id = 2;
		$.ajax({
			   type: "POST",
			   url: "/dry/index.php/Goods/update_cart",
			   data: {'goods_number':goods_number,'id':id},
			   dataType: "json",
			   success: function(result){
					$(".price").html(result.total_price);
					$("input[name='goods_number']").attr("value",goods_number);
				  }
			});
	})

	$("input[name='goods_number']").change(function(){
		var goods_number = $(this).val();
		var id = 3;
		$.ajax({
		   type: "POST",
		   url: "/dry/index.php/Goods/update_cart",
		   data: {"goods_number":goods_number,"id":id},
		   dataType: "json",
		   success: function(result){		   
					$(".price").html(result.total_price);
					$("input[name='goods_number']").attr("value",goods_number);
			},
		   
		});
	
	})
	$("#login2 button[type='submit']").click(function(){
		var member_phone = $("#login2 input[name='member_phone']").val();
		var member_password = $("#login2 input[name='member_password']").val();
		if(member_phone == '' || member_password == ''){
			alert("请输入账号和密码");
			return false;
		}
		$.ajax({
		   type: "post",
		   url: "/dry/index.php/Goods/login",
		   data: {"member_phone":member_phone,"member_password":member_password},
		   dataType: "json",
		   success: function(results){	
				var error = results.error;		
				var message = results.message;		
				if(error == 1){
					alert(message);
					window.location.href= results.url;
				}
				if(error == 2){
					alert(message);
					//启用滚动条
					$("#MyDiv").hide();
					$("#fade").hide();
					$(".new_ceng").show();
					window.location.reload();
				}
				if(error == 0){
					alert(message);
					window.location.reload();
				}
		   }
		});
		return false;
	})
	$("#registe button[type='submit']").click(function(){
		var member_phone = $("#registe input[name='member_phone']").val();
		var member_password = $("#registe input[name='member_password']").val();
		<!-- var repeat_password = $("#registe input[name='repeat_password']").val(); -->
		<!-- var province5 = $("#registe select[name='province5'] option[selected]").text(); -->
		var province = $("#eprovinceName").val();
		var city = $("#ecityName").val();
		var district = $("#edistrictName").val();
			
		if(member_phone == ''){
			alert("请输入手机号");
			return false;
		}	
		if(member_password == ''){
			alert("请输入密码");
			return false;
		}
		
		$.ajax({
		   type: "post",
		   url: "/dry/index.php/Goods/register",
		   data: {"member_phone":member_phone,"member_password":member_password,"province":province,"city":city,"district":district},
		   dataType: "json",
		   success: function(result){	
				if(result.error == 0){
					alert(result.message);
					window.location.reload();
				}
				if(result.error == 1){
					alert(result.message);
				}
				if(result.error == 2){
					alert(result.message);
				}
		   }
		});
		return false;
	})
	</script>
	<script type="text/javascript">
		<!-- $(".new_ceng").css("display","none"); -->

		<!-- $(".new_ceng").hide(); -->		
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });		
		});
		
		//禁止滚动条
		<!-- if(<?php echo $_SEESION['member_id'] = NULL ;?>) -->
		<!-- { -->
			<!-- $(document.body).css({ -->
				<!-- "overflow-y": "hidden" -->
			<!-- }); -->
		<!-- } -->
		
		jsModern.share({
			qrcode: "#share-qrcode",
			douban: "#share-douban",
			qzone: "#share-qzone",
			sina: "#share-sina",
			qq: "#share-qq"
		});  
		$(".carousel-indicators2 li").click(function(){
			$(this).css("border","3px solid #fbe364");
			$(this).siblings().css("border","3px solid transparent");
		})

	</script>
<link href="/dry/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/dry/Public/home/js/metisMenu.min.js"></script>
<script src="/dry/Public/home/js/custom.js"></script>
</body>
</html>