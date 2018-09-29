<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
    
	<title>
	<?php if(($plate_one["plate_name"]) != ""): echo ($plate_one["plate_name"]); ?>
	<?php else: ?>
	<?php echo ($company["company_name"]); endif; ?>
	</title>
	
   <!--fonts-->
	<link rel="stylesheet" href="/Public/home/css/bootstrap.min.css" />
	<!--css-->
	<link rel="stylesheet" href="/Public/home/css/style.css" />
	
	<!--js-->
	<script type="text/javascript" src="/Public/home/js/jquery-2.1.4.js" ></script>
	<script type="text/javascript" src="/Public/home/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="/Public/home/js/qrcode.js" ></script>
</head>
<body>
	<center>
	</center>
    <div align="center" id="qrcode">
    </div>
    <div align="center">
        <!-- <p>订单号：<?php echo $url; ?></p> -->
    </div>
    <br>
    </div>
    <br>
	<script>
	if(<?php echo $url != NULL; ?>)
	{
		var url = "<?php echo $url;?>";
		//参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
		var qr = qrcode(10, 'H');
		qr.addData(url);
		qr.make();
		var wording=document.createElement('p');
		wording.innerHTML = "推广网站";
		var code=document.createElement('DIV');
		code.innerHTML = qr.createImgTag();
		var element=document.getElementById("qrcode");
		element.appendChild(wording);
		element.appendChild(code);
	}
	function Check()
	{
		var out_trade_no = "<?php echo $out_trade_no; ?>"; 
		<!-- var member_id = Think.session.member_id;  -->
		$.ajax({
		   type: "POST",
		   url: "/index.php/Goods/orderQuery",
		   data: {"out_trade_no":out_trade_no},
		   dataType: "json",
		   success: function(res){							
			if (res.message == 0)
	    	{
	    		alert(res.content);//弹出信息
				window.location.href = '/member/index/id/'+res.member_id;
	    	}					
			if (res.message == 5)
	    	{
	    		alert(res.content);//弹出信息
				window.location.href = '/member/index/id/'+res.member_id;
	    	}
		   }
		});
	}
	window.setInterval("Check()",3000);
    </script>
<link href="/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/home/js/metisMenu.min.js"></script>
<script src="/Public/home/js/custom.js"></script>
</body>
</html>