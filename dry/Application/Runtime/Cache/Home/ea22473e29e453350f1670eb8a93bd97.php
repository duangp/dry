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
	<!-- <div class="container">
	<div class="img_code">		
		<img src="/weidu3/Public/home/img/code_bg.png" width="100%" height="">
		<div class="logo_img">
			<img src="/weidu3/<?php echo ($company["logo"]); ?>" width="60%" height="">
		</div>
		<div class="code" id="qrcode">
			
		</div>	
	</div>
	</div> -->
	<!-- 模态框（Modal） -->
	<div class="" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- <div class="code_zi">
					<h2><?php echo ($member["member_phone"]); ?></h2>					
					<h2 style="color:#f79527;line-height:40px;">您有一份信用卡<br>
					完美账单等待领取</h2>
				</div> -->
				<!-- <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px">1分</span>钱</b></font><br/><br/> -->
				<div align="center">
					<button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
				</div>
				<div class="modal-footer"></div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	<script type="text/javascript">
	//获取共享地址
	function editAddress()
	{
		WeixinJSBridge.invoke(
			'editAddress',
			<?php echo $editAddress; ?>,
			function(res){
				var value1 = res.proviceFirstStageName;
				var value2 = res.addressCitySecondStageName;
				var value3 = res.addressCountiesThirdStageName;
				var value4 = res.addressDetailInfo;
				var tel = res.telNumber;
				
				alert(value1 + value2 + value3 + value4 + ":" + tel);
			}
		);
	}
	
	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', editAddress); 
		        document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
			editAddress();
		}
	};
	
	</script>
	<script type="text/javascript">
	//调用微信JS api 支付
	function jsApiCall()
	{
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',
			<?php echo $jsApiParameters; ?>,
			function(res){
				<!-- WeixinJSBridge.log(res.err_msg); -->
				<!-- alert(res.err_code+res.err_desc+res.err_msg); -->
				if(res.err_msg == "get_brand_wcpay_request:ok"){
					$.ajax({
					   type: "POST",
					   url: "/weidu3/index.php/Goods/jsapi_skr",
					   dataType: "json",
					   success: function(results){	
							alert(results.message);//弹出信息
							window.location.href = '/weidu3/index.php/member/index/id/'+results.id;
						
					   }
					});
				}else{
						alert("支付失败！");
				}
			}
		);
	}

	function callpay()
	{
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}
	}
	</script>
<link href="/weidu3/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/weidu3/Public/home/js/metisMenu.min.js"></script>
<script src="/weidu3/Public/home/js/custom.js"></script>
</body>
</html>