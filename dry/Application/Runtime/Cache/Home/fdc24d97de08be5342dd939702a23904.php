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
<link href="/weidu4/Public/home/css/style.css" rel='stylesheet' type='text/css' />
<link href="/weidu4/Public/home/css/style2.css" rel='stylesheet' type='text/css' />
<link href="/weidu4/Public/home/css/font-awesome.css" rel="stylesheet"> 
<link href="/weidu4/Public/home/css/jsmodern-1.1.1.min.css" rel="stylesheet" >
<link href="/weidu4/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script src="/weidu4/Public/home/js/jquery.min.js"></script>
<script src="/weidu4/Public/home/js/bootstrap.min.js"></script>
<script src="/weidu4/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/weidu4/Public/home/js/jquery-2.1.1.js"></script>
<script src="/weidu4/Public/home/js/jsmodern-1.1.1.min.js"></script>
<script src="/weidu4/Public/home/js/move-top.js" type="text/javascript" ></script>
<script src="/weidu4/Public/home/js/easing.js" type="text/javascript" ></script>
<script type="text/javascript" src="/weidu4/Public/home/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/weidu4/Public/home/js/distpicker.data.js"></script>
<script type="text/javascript" src="/weidu4/Public/home/js/distpicker.js"></script>
<script type="text/javascript" src="/weidu4/Public/home/js/main.js"></script>
<script type="text/javascript" src="/weidu4/Public/home/js/qrcode.js" ></script>
<script type="text/javascript" src="/weidu4/Public/home/js/html2caven.js" integrity="shdsfaafa/342/42342/werfadf/GpGFF93hXpG5KkN"   crossorigin="anonymous"></script>

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
<style>
*{
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
}
</style>
<body>

<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="/weidu4/<?php echo ($company["logo"]); ?>" width="80%" height=""></a>
                <div class="open_button navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <img src="/weidu4/Public/home/img/button1.png" width="50%">
                </div>
				<!-- <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><img src="/weidu4/Public/home/img/button1.png" width="100%"></button> -->
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="active1">
                            <a href="/weidu4/index.php/Member/index"><i class="icon_style"><img src="/weidu4/Public/home/img/icon_1.png" width="20" height="20"></i> 我的账号 </a>
                        </li>
                        <li>
                            <a href="/weidu4/index.php/Member/level"><i class="icon_style"><img src="/weidu4/Public/home/img/icon_2.png" width="20" height="20"></i> 我的下级 </a>
                            
                        </li>
                        <!-- <li>
                            <a href="/weidu4/index.php/Member/menu"><i class="icon_style"><img src="/weidu4/Public/home/img/icon_2.png" width="20" height="20"></i> 购买记录 </a>
                            
                        </li> -->
                        <li>
                            <a href="/weidu4/index.php/Member/edit"><i class="icon_style"><img src="/weidu4/Public/home/img/icon_3.png" width="20" height="20"></i> 个人资料 </a>
                           
                        </li>
                        <!-- <li>
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($company["qq"]); ?>&site=qq&menu=yes"><i class="icon_style"><img src="/weidu4/Public/home/img/icon_4.png" width="20" height="20"></i> 联系客服 </a>
						</li>  -->
						<li>
							<a target="_blank" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo ($company["qq"]); ?>&version=1&src_type=web&web_src=lvlingseeds.com"><i class="icon_style"><img src="/weidu4/Public/home/img/icon/qq_on.png" width="20" height="20"></i> QQ客服 </a>
						</li>
						<li>
							<a target="_blank" href="tel:400-867-5559"><i class="icon_style"><img src="/weidu4/Public/home/img/icon_4.png" width="20" height="20"></i> 电话客服 </a>
						</li>						
                        <li>
                            <a id="destroy"><i class="icon_style"></i> 退出 </a>
                        </li>  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>		
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <div class="panel-body1">
		   <ul>
		   <li>
		   <span class="people">你好 <?php echo ($member["member_name"]); ?></span> 
		   <span class="code_1"><a data-toggle="modal" data-target="#myModal" id="http://<?php echo ($company["link"]); ?>/Goods/index/code/<?php echo md5(time()); ?>_<?php echo ($member["member_id"]); ?>"><img src="/weidu4/Public/home/img/code.png" width="35" height="35" alt="我的推广码" style="vertical-align:middle"></a></span></li>
		   <li>账号：<?php echo ($member["member_phone"]); ?>  <span class="back">返利金额：<span class="money"><?php echo ($member["member_money"]); ?></span> 元 <a class="money_img" data-toggle="modal" data-target="#myModal2"> <img src="/weidu4/Public/home/img/back.png" width="50" height=""></a> </span></li>
		   <li><img src="/weidu4/Public/home/img/icon_4.png" width="" height=""> <a href="/weidu4/index.php/Member/edit">编辑个人资料 &gt;</a></li>
		   </ul>
		   </div>
		 </div>
		</div>
      </div>   
		<!-- <div id="fade" class="black_overlay"> -->
		<!-- </div> -->
		<!-- <div id="MyDiv" class="white_content"> -->
				<!-- <div class="modal-header"> -->
					<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="CloseDiv('MyDiv','fade')"> -->
						<!-- &times; -->
					<!-- </button>						 -->
				<!-- </div>					 -->
				<!-- <div class="qrcodeCanvas" style="width: 100%;margin: 0 auto;height: 50rem;"> -->
					<!-- <img class="imgCode" src="code_bg.png" style="display: none;width: 10rem;height:10rem;"/> -->
					<!-- <div id="qrcodeCanvas"></div> -->
				<!-- </div>		    -->
		<!-- </div> -->

		<!-- 模态框（Modal） -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>						
					</div>-->
					<div id="qrcodeCanvas" class="can" style="text-align:center;" data-index='demo'></div>
					<!-- <div><input type="button" value="保存" onclick="save()"/>
					<button>下载</button><button>分享</button></div> -->
					<!---->
					
				</div>
				
				<a href="" id="down" >				
				   <button style='padding:10px;background:white;border-radius: 6px;width:120px'>点击下载</button>
				 </a>
				
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
					<div class="tixian_title"><h4>提现方式</h4></div>
					<div class="modal-body img_ceng">
						<!-- <a href=""><img src="/weidu4/Public/home/img/wechat.png" width="" height=""></a> -->
						<a href="/weidu4/index.php/Member/aliLogin"><img src="/weidu4/Public/home/img/zhifubao.png" width="" height=""></a>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal -->
		</div>

   </div>
    <script type="text/javascript">	
	
	
	
	$(".code_1 a").click(function(){
		var url = $(this).attr("id");
		//参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
		var qr = qrcode(10, 'H');
		qr.addData(url);
		qr.make();
		var img_url = $(qr.createImgTag()).attr("src");
		
		drawAndShareImage();
		function drawAndShareImage(){
			var canvas = document.createElement("canvas");
			canvas.width = 300;
			canvas.height = 549;
			var context = canvas.getContext("2d");

			context.rect(0 , 0 , canvas.width , canvas.height);
			context.fillStyle = "#fff";
			context.fill();

			var myImage = new Image();
			myImage.src = "/weidu4/Public/home/img/share.png";    //背景图片  你自己本地的图片或者在线图片
			myImage.crossOrigin = 'Anonymous';

			myImage.onload = function(){
				context.drawImage(myImage , 0 , 0 , 300 , 549);

				<!-- context.font = "60px Courier New"; -->
				<!-- context.fillText("我是文字",350,450); -->

				var myImage2 = new Image();
				myImage2.src = img_url;   //你自己本地的图片或者在线图片
				myImage2.crossOrigin = 'Anonymous';
				
				myImage2.onload = function(){
					context.drawImage(myImage2 , 100 , 297 , 100 , 100);
					var base64 = canvas.toDataURL("image/png");  //"image/png" 这里注意一下
					var img = document.getElementById('avatar');
					console.log(base64);
					// document.getElementById('avatar').src = base64;
					<!-- img.setAttribute('src' , base64); -->
					document.getElementById('qrcodeCanvas').innerHTML='<img src="'+base64+'">';
					
					var a = document.getElementById('qrcodeCanvas');
					a.dataset.index = base64;
					console.log('图片路径：' + a.dataset.index)//demo
					<!-- $(".sss").attr("src",base64); -->
					
					var url = $("#qrcodeCanvas").data("index");//注意，这里不用加 data-
		           // console.log('得到的图片的地址： '+ url);
					
					
					 html2canvas($(".can"), {
					 
						onrendered: function (canvas) {
						
						   // var url1 = canvas.toDataURL();
							
							//console.log('cavens的地址： '+ url1);
					
							var link = $("#down");
							link.attr("href", url);
							link.attr("download", (new Date()).getTime() + "_异常信息.png");
							// document.getElementById("down").click();
						},useCORS:true});
					
					
				}
			}
		}
		 
		
	})
	
	<!-- function save() { -->
		<!-- window.open(document.querySelector('img').src); -->
	<!-- } -->

	$(".open_button").click(function(){
		<!-- $(".sidebar").toggle(); -->
		if($(this).find('img').attr("src")=="/weidu4/Public/home/img/button1.png")
		{
			$(this).find('img').attr("src","/weidu4/Public/home/img/button2.png");
		}
		else
		{
			$(this).find('img').attr("src","/weidu4/Public/home/img/button1.png");
		}
	})
	$("#destroy").click(function(){
		if (!confirm('是否退出？')){
			return false;
		} 

		$.ajax({
		   type: "POST",
		   url: "/weidu4/index.php/Member/destroy",
		   dataType: "json",
		   success: function(result){
				alert(result.message);
				window.location.href = '/weidu4/Goods/index';								
		   }
		});
	})	
   	</script>
	<script type="text/javascript">
	//弹出隐藏层
	function ShowDiv(show_div,bg_div){
		document.getElementById(show_div).style.display='block';
		document.getElementById(bg_div).style.display='block' ;
		var bgdiv = document.getElementById(bg_div);
		bgdiv.style.width = document.body.scrollWidth;
		// bgdiv.style.height = $(document).height();
		$("#"+bg_div).height($(document).height());

		//生成画布
		hecheng();
		function hecheng(){
			draw(function(){
				document.getElementById('qrcodeCanvas').innerHTML='<img src="'+base64[0]+'">';
			})
		}

		var base64=[];
		function draw(fn) {  
			var url = $(".code_1 a").attr("id");
			var qr = qrcode(10, 'H');
			qr.addData(url);
			qr.make();
			var img_url = $(qr.createImgTag()).attr("src");		
			var imgArr = ['/weidu4/Public/home/img/code_bg_2.png',img_url];
			<!-- console.log(imgArr); -->
			var c = document.createElement('canvas'),
			ctx = c.getContext('2d'),
			len = imgArr.length;
			c.width = $(".qrcodeCanvas").width();
			c.height = $(".qrcodeCanvas").height();
			console.log(c.width,c.height);
			ctx.rect(0,0,c.width,c.height);
			ctx.fillStyle='#ccc';
			ctx.fill();
			function drawing(n) {
				if (n<len) {
					var img = new Image;
					img.src = imgArr[n];
					img.onload = function() {
						if (n==1) {
							var codeW = $(".imgCode").width(), codeH = $(".imgCode").height();
							<!-- console.log(codeW); -->
							ctx.drawImage(img,80,300,codeW,codeH);
							drawing(n+1);
						} else {
							ctx.drawImage(img,0,0,c.width,c.height);
							drawing(n+1);
						}
					}
				} else {
					base64.push(c.toDataURL("image/jpeg",0.8));
					fn();
				}
			}
			drawing(0);
		}
	};
	//关闭弹出层
	function CloseDiv(show_div,bg_div)
	{
	document.getElementById(show_div).style.display='none';
	document.getElementById(bg_div).style.display='none';
	};
	</script>
   	<script type="text/javascript">
	<!-- $(".code_1 a").click(function(){ -->
		<!-- var url = $(this).attr("id"); -->
		<!-- //参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H' -->
		<!-- var qr = qrcode(10, 'H'); -->
		<!-- qr.addData(url); -->
		<!-- qr.make(); -->
		<!-- var img_url = $(qr.createImgTag()).attr("src"); -->
		<!-- var wording=document.createElement('p'); -->
		<!-- wording.innerHTML = "微信支付"; -->
		<!-- var code=document.createElement('DIV'); -->
		<!-- code.innerHTML = qr.createImgTag(); -->
		<!-- var element=document.getElementById("qrcode"); -->
		<!-- element.appendChild(wording); -->
		<!-- element.appendChild(code);		 -->
	<!-- }) -->
	$(".modal-header button").click(function(){
		$("#qrcode div").remove();
	})
    </script>
    <!-- /#wrapper -->
<link href="/weidu4/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/weidu4/Public/home/js/metisMenu.min.js"></script>
<script src="/weidu4/Public/home/js/custom.js"></script>
</body>
</html>