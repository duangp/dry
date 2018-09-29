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
				<a class="navbar-brand" href="index.html"><img src="/weidu3/<?php echo ($company["logo"]); ?>" width="80%" height=""></a>
                <div class="open_button navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <img src="/weidu3/Public/home/img/button1.png" width="50%">
                </div>
				<!-- <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><img src="/weidu3/Public/home/img/button1.png" width="100%"></button> -->
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/weidu3/index.php/Member/index"><i class="icon_style"><img src="/weidu3/Public/home/img/icon_1.png" width="20" height="20"></i> 我的账号 </a>
                        </li>
                        <li class="active1">
                            <a href="/weidu3/index.php/Member/level"><i class="icon_style"><img src="/weidu3/Public/home/img/icon_2.png" width="20" height="20"></i> 我的下级 </a>
                            
                        </li>
                        <!-- <li>
                            <a href="/weidu3/index.php/Member/menu"><i class="icon_style"><img src="/weidu3/Public/home/img/icon_2.png" width="20" height="20"></i> 购买记录 </a>
                            
                        </li> -->
                        <li>
                            <a href="/weidu3/index.php/Member/edit"><i class="icon_style"><img src="/weidu3/Public/home/img/icon_3.png" width="20" height="20"></i> 申请代理 </a>
                           
                        </li>
                        <li>
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($company["qq"]); ?>&site=qq&menu=yes"><i class="icon_style"><img src="/weidu3/Public/home/img/icon_4.png" width="20" height="20"></i> 联系客服 </a>
						</li>
						<li>
							<a target="_blank" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo ($company["qq"]); ?>&version=1&src_type=web&web_src=lvlingseeds.com"><i class="icon_style"><img src="/weidu3/Public/home/img/icon/qq_on.png" width="20" height="20"></i> 手机客服 </a>
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
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
					<div class="panel-heading">
						<h2>下级列表</h2>
						<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
					</div>
					<div class="panel-body no-padding" style="display: block;">
						<table class="table table-striped">
							<thead>
								<tr class="warning">
									<th>会员名</th>
									<th>手机号</th>
									<th>上一级</th>
									<th>购买时间</th>
								</tr>
							</thead>
							<tbody>	
								<?php if(is_array($member_level)): foreach($member_level as $key=>$member): ?><tr>
									<td>
									<?php $__FOR_START_153175001__=0;$__FOR_END_153175001__=$member['level'];for($i=$__FOR_START_153175001__;$i < $__FOR_END_153175001__;$i+=1){ ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php } echo ($member[member_name]); ?>									
									</td>
									<td><?php echo ($member[member_phone]); ?></td>							
									<td>
									<?php if(is_array($member_list)): foreach($member_list as $key=>$member_l): if(($member_l["member_id"]) == $member[parent_id]): echo ($member_l[member_name]); endif; endforeach; endif; ?>
									</td>							
									<td><?php echo (date("Y.m.d",$member[add_time])); ?></td>
								</tr><?php endforeach; endif; ?>								
							</tbody>
						</table>
					</div>
				</div>    
			 </div>
			</div>
		</div>		
   </div>
    <script type="text/javascript">
	$(".open_button").click(function(){
		<!-- $(".sidebar").toggle(); -->
		if($(this).find('img').attr("src")=="/weidu3/Public/home/img/button1.png")
		{
			$(this).find('img').attr("src","/weidu3/Public/home/img/button2.png");
		}
		else
		{
			$(this).find('img').attr("src","/weidu3/Public/home/img/button1.png");
		}
	})
	$("#destroy").click(function(){
		if (!confirm('是否退出？')){
			return false;
		} 

		$.ajax({
		   type: "POST",
		   url: "/weidu3/index.php/Member/destroy",
		   dataType: "json",
		   success: function(result){
				alert(result.message);
				window.location.href = '/weidu3/Goods/index';								
		   }
		});
	})	
   	</script>
    <!-- /#wrapper -->
<link href="/weidu3/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/weidu3/Public/home/js/metisMenu.min.js"></script>
<script src="/weidu3/Public/home/js/custom.js"></script>
</body>
</html>