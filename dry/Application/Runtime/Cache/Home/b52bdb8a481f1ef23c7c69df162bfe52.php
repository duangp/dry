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
<link href="/weidu3/Public/home/css/style.css" rel='stylesheet' type='text/css' />
<link href="/weidu3/Public/home/css/style2.css" rel='stylesheet' type='text/css' />
<link href="/weidu3/Public/home/css/font-awesome.css" rel="stylesheet"> 
<link href="/weidu3/Public/home/css/jsmodern-1.1.1.min.css" rel="stylesheet" >
<link href="/weidu3/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script src="/weidu3/Public/home/js/jquery.min.js"></script>
<script src="/weidu3/Public/home/js/bootstrap.min.js"></script>
<script src="/weidu3/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/weidu3/Public/home/js/jquery-2.1.1.js"></script>
<script src="/weidu3/Public/home/js/jsmodern-1.1.1.min.js"></script>
<script src="/weidu3/Public/home/js/move-top.js" type="text/javascript" ></script>
<script src="/weidu3/Public/home/js/easing.js" type="text/javascript" ></script>
<script type="text/javascript" src="/weidu3/Public/home/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/weidu3/Public/home/js/distpicker.data.js"></script>
<script type="text/javascript" src="/weidu3/Public/home/js/distpicker.js"></script>
<script type="text/javascript" src="/weidu3/Public/home/js/main.js"></script>
<script type="text/javascript" src="/weidu3/Public/home/js/qrcode.js" ></script>
<!-- <script src="http://www.jq22.com/jquery/jquery-2.1.1.js"></script> -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

</head>
<body>
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
							<a class="navbar-brand" href="index.html"><img src="/weidu3/<?php echo ($company["logo"]); ?>" width="80%" height=""></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="alert alert-info" role="alert">
					<h4>确认订单</h4>
				</div>
				<div>
				<div class="alert alert-success" role="alert">
					<strong>填写信息</strong>
				</div>
				<form action="/weidu3/index.php/Goods/pay" enctype="multipart/form-data" method="post">
				<div class="menber_list">				
					<div class="form-group">
						<label for="name">姓名</label>
						<input type="text" class="form-control" name="member_name" value="" placeholder="请输入姓名">
					</div>
					<div class="form-group">
						<label for="name">手机号</label>
						<input type="text" class="form-control" name="member_phone" value="" placeholder="请输入手机号">
					</div>
					<div class="form-group" data-toggle="distpicker">
					  <label for="name">地址</label>
					  <select id="eprovinceName" class="form-control" data-province="--请选择--" name="provinceName"></select>
					  <select id="ecityName" class="form-control" data-city="--请选择--" name="cityName"></select>
					  <select id="edistrictName" class="form-control" data-district="--请选择--" name="districtName"></select>
					  <input type="text" class="form-control" name="member_address" value="" placeholder="请输入详细地址">
					</div>					
				</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="grid_3 grid_5">
				<div class="alert alert-warning" role="alert">
					<strong>订单信息</strong>
				</div>
			</div>
			<div class="col-md-5 blog-left">
				<div class="blog-left-grid query">					
					<a href="/weidu3/index.php">
					<?php if(is_array($images)): $k = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($k % 2 );++$k; if($k == 1): ?><img src="/weidu3/<?php echo ($image["img_url"]); ?>" alt="" width="100%" class="img-responsive" /><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</a>							
				</div>
				<!-- <div class="m2"> -->
					<!-- 注意：购买后2个工作日内代理商若没有给客户发码拨打400电话转客服投诉 -->
				<!-- </div> -->
			</div>

			<div class="col-md-5 blog-right">
				<h3><?php echo ($goods["goods_name"]); ?></h3>
				<div class="in-form">
					<ul>
						<li class="check">价格：<?php echo ($goods["goods_price"]); ?> 元</li>
						<li class="check">
							数量：<span class=""><?php echo ($goods_number); ?></span>
						</li>						
						<li class="check">支付方式：
							<label><input type="radio" name="pay_mode" value="1" checked> 微信</label>
							<label><input type="radio" name="pay_mode" value="2"> 支付宝</label>
						</li>
						<li class="check">
							共计：<span class="red">¥ <?php echo ($total_price); ?></span> 元
						</li>
					</ul>					
					<div class="ckeck-bg">
						<div class="checkbox-form">
							<div class="check-left">
								<input type="hidden" name="cart_id" value="<?php echo ($cart["cart_id"]); ?>">
								<input type="submit" value="立即支付">
							</div>
						</div>
					</div>				
				</div>
			</div>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //blog -->

<link href="/weidu3/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/weidu3/Public/home/js/metisMenu.min.js"></script>
<script src="/weidu3/Public/home/js/custom.js"></script>
</body>
</html>