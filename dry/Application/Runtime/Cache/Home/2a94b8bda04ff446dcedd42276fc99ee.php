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
<link href="/weidu/Public/home/css/style.css" rel='stylesheet' type='text/css' />
<link href="/weidu/Public/home/css/style2.css" rel='stylesheet' type='text/css' />
<link href="/weidu/Public/home/css/font-awesome.css" rel="stylesheet"> 
<link href="/weidu/Public/home/css/jsmodern-1.1.1.min.css" rel="stylesheet" >
<link href="/weidu/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script src="/weidu/Public/home/js/jquery.min.js"></script>
<script src="/weidu/Public/home/js/bootstrap.min.js"></script>
<script src="/weidu/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/weidu/Public/home/js/jquery-2.1.1.js"></script>
<script src="/weidu/Public/home/js/jsmodern-1.1.1.min.js"></script>
<script src="/weidu/Public/home/js/move-top.js" type="text/javascript" ></script>
<script src="/weidu/Public/home/js/easing.js" type="text/javascript" ></script>
<script type="text/javascript" src="/weidu/Public/home/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/weidu/Public/home/js/distpicker.data.js"></script>
<script type="text/javascript" src="/weidu/Public/home/js/distpicker.js"></script>
<script type="text/javascript" src="/weidu/Public/home/js/main.js"></script>
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
<div class="login_img">
	<div class="container">
			<div class="col-md-7 blog-left">
				<div class="blog-left-grid left-grid">
					<h3><a href=""><img src="/weidu/Public/home/img/logo.png" width="200" height=""></a></h3>
					<div class="heng"></div>					
					<ul>
						<li>信息技术服务为主导  立足于高科技领域前沿</li>
						<li>√  信用卡推广</li>
						<li>√  完美账单</li>
						<li>√  智能提额</li>
						<li>√  创新营销</li>
					</ul>
				</div>
			</div>
			<div class="col-md-5 blog-right right_style_list">
				<div class="right_style">
				<ul id="myTab" class="nav nav-tabs">
					<li class="active">
						<a href="#login2" data-toggle="tab">登录</a>
					</li>
					<li>
						<a href="#registe" data-toggle="tab">注册</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="login2">
						<p>
						<form role="form">
							<div class="form-group">
								<label for="name">手机号</label>
								<input type="text" class="form-control" name="member_phone" value="" placeholder="请输入手机号">
							</div>
							<div class="form-group">
								<label for="name">密码</label>
								<input type="password" class="form-control" name="member_password" value="" placeholder="请输入密码">
							</div>
							<div class="form-group">
							<button type="submit" class="form-control btn btn-default twitter">登录</button>	
							</div>
						</form>
						</p>
					</div>
					<div class="tab-pane fade" id="registe">
						<p>
						
							<div class="form-group">
								<label for="name">手机号</label>
								<input type="text" class="form-control" name="member_phone" value="" placeholder="请输入手机号">
							</div>
							<div class="form-group">
								<label for="name">密码</label>
								<input type="password" class="form-control" name="member_password" value="" placeholder="请输入密码">
							</div>
							<!-- <div class="form-group">
								<label for="name">确认密码</label>
								<input type="password" class="form-control" name="repeat_password" value="" placeholder="请再次输入密码">
							</div> -->
							<div class="form-group" data-toggle="distpicker">
							  <label for="name">地址</label>
							  <select id="eprovinceName" class="form-control" data-province="--请选择--" name="provinceName"></select>
							  <select id="ecityName" class="form-control" data-city="--请选择--" name="cityName"></select>
							  <select id="edistrictName" class="form-control" data-district="--请选择--" name="districtName"></select>
							</div>
							<div class="form-group">
							<button type="submit" class="form-control btn btn-default facebook">注册</button>
							</div>						
						</p>
					</div>
				</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	
</div>

<!-- //banner -->
<script type="text/javascript">
	$("#login button[type='submit']").click(function(){
		var member_phone = $("#login input[name='member_phone']").val();
		var member_password = $("#login input[name='member_password']").val();
		if(member_phone == '' || member_password == ''){
			alert("请输入账号和密码");
			return false;
		}
		$.ajax({
		   type: "post",
		   url: "/weidu/index.php/Index/login",
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
					$("#MyDiv").hide();
					$("#fade").hide();
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
		   url: "/weidu/index.php/Index/register",
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
<link href="/weidu/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/weidu/Public/home/js/metisMenu.min.js"></script>
<script src="/weidu/Public/home/js/custom.js"></script>
</body>
</html>