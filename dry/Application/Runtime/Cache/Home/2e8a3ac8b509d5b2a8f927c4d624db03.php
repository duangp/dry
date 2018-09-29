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
<script type="text/javascript" src="/weidu3/Public/home/js/qrcode2.js" ></script>
<script type="text/javascript" src="/weidu3/Public/home/js/qrcode.min.js" ></script>
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
	<!-- 模态框（Modal） -->
	<div class="" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body img_ceng">
					<img src="/weidu3/Public/home/img/code_bg.png" width="100%" height="">
					<!-- <div class="logo_img">
						<img src="/weidu3/<?php echo ($company["logo"]); ?>" width="60%" height="">
					</div> -->
					<div class="code_3" id="qrcode">
						<!-- <img src="/weidu3/Public/home/img/code.png" width="" height=""> -->
					</div>
					<a href='<?php echo ($url); ?>'>点击授权登陆</a>
				</div>
				<!-- <div class="code_zi">
					<h2><?php echo ($member["member_phone"]); ?></h2>					
					<h2 style="color:#f79527;line-height:40px;">您有一份信用卡<br>
					完美账单等待领取</h2>
				</div> -->
				
				<div class="modal-footer"></div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	<script>
	if(<?php echo $url != NULL; ?>)
	{	
		var qrcode = new QRCode(document.getElementById("qrcode"), {
			width : 200,
			height : 200
		});
		var url = "<?php echo $url;?>";
		qrcode.makeCode(url);
	}
    </script>
<link href="/weidu3/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/weidu3/Public/home/js/metisMenu.min.js"></script>
<script src="/weidu3/Public/home/js/custom.js"></script>
</body>
</html>