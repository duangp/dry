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
<link href="/Public/home/css/style.css" rel='stylesheet' type='text/css' />
<link href="/Public/home/css/style2.css" rel='stylesheet' type='text/css' />
<link href="/Public/home/css/font-awesome.css" rel="stylesheet"> 
<link href="/Public/home/css/jsmodern-1.1.1.min.css" rel="stylesheet" >
<link href="/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script src="/Public/home/js/jquery.min.js"></script>
<script src="/Public/home/js/bootstrap.min.js"></script>
<script src="/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/js/jquery-2.1.1.js"></script>
<script src="/Public/home/js/jsmodern-1.1.1.min.js"></script>
<script src="/Public/home/js/move-top.js" type="text/javascript" ></script>
<script src="/Public/home/js/easing.js" type="text/javascript" ></script>
<script type="text/javascript" src="/Public/home/js/jquery-2.1.4.js" ></script>
<script type="text/javascript" src="/Public/home/js/distpicker.data.js"></script>
<script type="text/javascript" src="/Public/home/js/distpicker.js"></script>
<script type="text/javascript" src="/Public/home/js/main.js"></script>
<script type="text/javascript" src="/Public/home/js/qrcode.js" ></script>
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="/<?php echo ($company["logo"]); ?>" width="80%" height=""></a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/index.php/Member/index"><i class="icon_style"><img src="/Public/home/img/icon_1.png" width="20" height="20"></i> 我的账号 </a>
                        </li>
                        <li>
                            <a href="/index.php/Member/level"><i class="icon_style"><img src="/Public/home/img/icon_2.png" width="20" height="20"></i> 我的下级 </a>
                            
                        </li>
                        <!-- <li class="active1">
                            <a href="/index.php/Member/menu"><i class="icon_style"><img src="/Public/home/img/icon_2.png" width="20" height="20"></i> 购买记录 </a>
                            
                        </li> -->
                        <li>
                            <a href="/index.php/Member/edit"><i class="icon_style"><img src="/Public/home/img/icon_3.png" width="20" height="20"></i> 修改信息 </a>
                           
                        </li>
                        <li>
                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($company["qq"]); ?>&site=qq&menu=yes"><i class="icon_style"><img src="/Public/home/img/icon_4.png" width="20" height="20"></i> 联系客服 </a>
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
			   <table class="table">
				 <thead>
					<tr>
					  <th>账号</th>
					  <th>上一级</th>
					  <th>单价</th>
					  <th>数量</th>
					  <th>总价</th>
					  <th>购买时间</th>
					  <th>是否已付款</th>
					</tr>
				  </thead>
				  <tbody>
					<?php if(is_array($buy_list)): foreach($buy_list as $key=>$buy): ?><tr>
					  <?php if(is_array($member_list)): foreach($member_list as $key=>$member): if(($member[member_id]) == $buy[member_id]): ?><th><?php echo ($member[member_phone]); ?></th><?php endif; endforeach; endif; ?>					  
					  <td>
					  <?php if(is_array($member_list)): foreach($member_list as $key=>$member): if(($member[member_id]) == $buy[parent_id]): echo ($member[member_phone]); endif; endforeach; endif; ?>
					  </td>					  
					  <td><?php echo ($buy[goods_price]); ?></td>
					  <td><?php echo ($buy[goods_number]); ?></td>
					  <td><?php echo ($buy[total_price]); ?></td>
					  <td><?php echo (date("Y.m.d",$buy[add_time])); ?></td>
					  <td>
					  <?php if(($buy[is_pay]) == "0"): ?><a href="/Goods/buy/id/<?php echo ($buy[buy_id]); ?>">未付款，完成付款</a><?php endif; ?>
					  <?php if(($buy[is_pay]) == "1"): ?>已付款<?php endif; ?>					  
					  </td>
					</tr><?php endforeach; endif; ?>
				  </tbody>
				</table>
			</div>    
		 </div>
		</div>
		</div>	
   </div>
    <script type="text/javascript">
	$("#destroy").click(function(){
		if (!confirm('是否退出？')){
			return false;
		} 

		$.ajax({
		   type: "POST",
		   url: "/index.php/Member/destroy",
		   dataType: "json",
		   success: function(result){
					alert(result.message);
					window.location.href = '';								
		   }
		});
	})	
   	</script>
    <!-- /#wrapper -->
<link href="/Public/home/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/home/js/metisMenu.min.js"></script>
<script src="/Public/home/js/custom.js"></script>
</body>
</html>