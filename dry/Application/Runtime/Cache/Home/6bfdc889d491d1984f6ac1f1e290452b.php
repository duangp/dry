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
	<link rel="stylesheet" href="/weidu/Public/home/css/bootstrap.min.css" />
	<!--css-->
	<link rel="stylesheet" href="/weidu/Public/home/css/style.css" />
	
	<!--js-->
	<script type="text/javascript" src="/weidu/Public/home/js/jquery-2.1.4.js" ></script>
</head>
<body>


<?php if(($plate_id) == "21"): ?><link rel="stylesheet" href="/weidu/Public/home/css/building.css" />
	<div id="building">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "21"): ?><div class="con_banner">		
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>			
			<div class="_banner-text ">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<div class="bu_describ">
			<?php if(is_array($plate_all)): foreach($plate_all as $key=>$pla): if(($pla["plate_id"]) == "143"): echo htmlspecialchars_decode($pla['customized-buttonpane']); endif; endforeach; endif; ?>
		</div>
		
		<div class="content">
			<div class="building_items mui-row">
				<ul class="left mui-col-60">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "132"): ?><li class="li_pop">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>	
						<!--悬浮框-->
						<div class="build_pop popHeight ">
							<div class="pop_describ">
								<h3><?php echo ($image["plate_name"]); ?></h3>
								<p class="pop_text">
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
						</div>
					</li><?php endif; endforeach; endif; ?>
					<li>
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): ?><div class="small-img">							
							<?php if(($image["plate_id"]) == "133"): ?><div class="left li_pop s_img">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
								<!--悬浮框-->
								<div class="build_pop popHeight ">
									<div class="pop_describ">
										<h3><?php echo ($image["plate_name"]); ?></h3>
										<p class="pop_text">
											<?php echo ($image["introduce"]); ?>
										</p>
										<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
									</div>
								</div>
							</div><?php endif; ?>
							<?php if(($image["plate_id"]) == "134"): ?><div class="right li_pop s_img">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
								<!--悬浮框-->
								<div class="build_pop popHeight ">
									<div class="pop_describ">
										<h3><?php echo ($image["plate_name"]); ?></h3>
										<p class="pop_text">
											<?php echo ($image["introduce"]); ?>
										</p>
										<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
									</div>
								</div>
							</div><?php endif; ?>							
						</div><?php endforeach; endif; ?>
					</li>
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "135"): ?><li class="li_pop">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<!--悬浮框-->
						<div class="build_pop popHeight ">
							<div class="pop_describ">
								<h3><?php echo ($image["plate_name"]); ?></h3>
								<p class="pop_text">
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
						</div>
					</li><?php endif; endforeach; endif; ?>
				</ul>
				<ul class="right mui-col-39">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(in_array(($image["plate_id"]), explode(',',"136,137"))): ?><li class="li_pop">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<!--悬浮框-->
						<div class="build_pop popHeight ">
							<div class="pop_describ">
								<h3><?php echo ($image["plate_name"]); ?></h3>
								<p class="pop_text">
									<!--<p class="build-t"><?php echo ($image["introduce"]); ?></p>-->
									<!--修改内容-->
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
						</div>
					</li><?php endif; endforeach; endif; ?>
					<li class="build-text">
						<?php if(is_array($plate_all)): foreach($plate_all as $key=>$pla): if(($pla["plate_id"]) == "138"): ?><p class="build-t"><?php echo ($pla["introduce"]); ?></p><?php endif; endforeach; endif; ?>
					</li>
				</ul>
			</div>
			<div class="building_items mui-row">
				<ul class="left mui-col-39">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "139"): ?><li class="li_pop">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<!--悬浮框-->
						<div class="build_pop popHeight ">
							<div class="pop_describ">
								<h3><?php echo ($image["plate_name"]); ?></h3>
								<p class="pop_text">
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
						</div>
					</li><?php endif; endforeach; endif; ?>
					<?php if(is_array($plate_all)): foreach($plate_all as $key=>$pla): if(($pla["plate_id"]) == "142"): ?><li class="build-text padding-134">
						<p class="build-t"><?php echo ($pla["introduce"]); ?></p><?php endif; endforeach; endif; ?>
				</ul> 
				<ul class="right mui-col-60">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "140"): ?><li class="li_pop">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<!--悬浮框-->
						<div class="build_pop popHeight ">
							<div class="pop_describ">
								<h3><?php echo ($image["plate_name"]); ?></h3>
								<p class="pop_text">
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
						</div>
					</li><?php endif; endforeach; endif; ?>
					<li>
						<div class="small-img ">						
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "144"): ?><div class="left li_pop s_img">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
								<!--悬浮框-->
								<div class="build_pop popHeight ">
									<div class="pop_describ">
										<h3><?php echo ($image["plate_name"]); ?></h3>
										<p class="pop_text">
											<?php echo ($image["introduce"]); ?>
										</p>
										<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
									</div>
								</div>
							</div><?php endif; ?>
							<?php if(($image["plate_id"]) == "141"): ?><div class="right li_pop s_img">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
								<!--悬浮框-->
								<div class="build_pop popHeight ">
									<div class="pop_describ">
										<h3><?php echo ($image["plate_name"]); ?></h3>
										<p class="pop_text">
											<?php echo ($image["introduce"]); ?>
										</p>
										<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
									</div>
								</div>
							</div><?php endif; endforeach; endif; ?>
						</div>						
					</li>
				</ul>
			</div>
		</div>
	</div>	
	<script type="text/javascript">
		//修改内容
		$('.li_pop img').hover(function(){
			 var popHeight=$(this).height();
			$('.popHeight').css('height',popHeight+'px');		
		})
	</script><?php endif; ?>	
<?php if(($plate_id) == "49"): ?><link rel="stylesheet" href="/weidu/Public/home/css/product.css" />
	<div id="product">		
		<div class="_banner">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "53"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; endif; endforeach; endif; ?>
		</div>
		<p class="pr_text">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "53"): echo htmlspecialchars_decode($image['customized-buttonpane']); endif; endforeach; endif; ?>
		</p>
		<div class="content">
			<ul class="ding mui-row">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "55"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="<?php echo ($image["plate_id"]); ?>">
					<span class="mui-icon point"><img src="/weidu/Public/home/img/ding.png" alt="" /></span>
					<li>
						<img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
						<p class="pro_name"><?php echo ($image["plate_name"]); ?></p>
					</li>
				</a><?php endforeach; endif; endif; endforeach; endif; ?>
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "56"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="<?php echo ($image["plate_id"]); ?>">
					<span class="mui-icon point"><img src="/weidu/Public/home/img/ding.png" alt="" /></span>
					<li>
						<img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
						<p class="pro_name"><?php echo ($image["plate_name"]); ?></p>
					</li>
				</a><?php endforeach; endif; endif; endforeach; endif; ?>								
			</ul>
			<div class="pro_item pHeight">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "57"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="<?php echo ($image["plate_id"]); ?>">
					<p class="left">
						<img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
					</p>
					<p class="pro_name right left-30"><?php echo ($image["plate_name"]); ?></p>
				</a><?php endforeach; endif; endif; endforeach; endif; ?>
			</div>
			<div class="pro_item pHeight">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "58"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="<?php echo ($image["plate_id"]); ?>">
					<p class="right">
						<img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
					</p>
					<p class="pro_name left right-35 top-46"><?php echo ($image["plate_name"]); ?></p>
				</a><?php endforeach; endif; endif; endforeach; endif; ?>
			</div>
			<div class="pro_item pHeight">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "59"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="<?php echo ($image["plate_id"]); ?>">
					<p class="left">
						<img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
					</p>
					<p class="pro_name right left-30"><?php echo ($image["plate_name"]); ?></p>
				</a><?php endforeach; endif; endif; endforeach; endif; ?>
			</div>
			<div class="pro_item pHeight margin-top-180">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "60"): ?><a href="<?php echo ($image["plate_id"]); ?>">
					<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): if(($child["img_desc"]) == "1"): ?><p class="left po_ab width-45"><img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></p><?php endif; ?>
					<?php if(($child["img_desc"]) == "2"): ?><p class="right po_ab right-16 width-45"><img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></p><?php endif; endforeach; endif; ?>
					<p class="pro_name right left-30 top-34"><?php echo ($image["plate_name"]); ?></p>
				</a><?php endif; endforeach; endif; ?>
			</div> 
			<ul class="list lHeight">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(in_array(($image["plate_id"]), explode(',',"61,62,63,71"))): ?><a href="<?php echo ($image["plate_id"]); ?>" class="lHeight">
					<span class="mui-icon point"><img src="/weidu/Public/home/img/ding.png" alt="" /></span>
					<li>
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img class="img_filter" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<p class="pro_name"><?php echo ($image["plate_name"]); ?></p>
					</li>
				</a><?php endif; endforeach; endif; ?>				
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var pHeight=$('.pro_item p img').height();
			$('.pHeight').css('height',pHeight+'px');
			var lHeight=$('.list a li').height();
			$('.lHeight').css('height',lHeight+'px');
		})
	</script><?php endif; ?>	
<?php if(($plate_id) == "52"): ?><link rel="stylesheet" href="/weidu/Public/home/css/photograhy.css" />
	<div id="photograhy">		
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "66"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="_banner"><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></div><?php endforeach; endif; ?>
		<p class="title-text">
			<?php echo ($image["introduce"]); ?>
		</p><?php endif; endforeach; endif; ?>
		<div class="content ph_content">
			<ul class="tab_menu width-800 margin-124" >
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "52"): if(($image["plate_id"]) == "66"): ?><li class="<?php if(($plate_id) == "52"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/52"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
			</ul>
			<div class="tab-content width-100">
				<div class="item photograhy">
					<ul class="mui-row ">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "67"): ?><li>
							<div class="ph_text left">
								<p><?php echo ($image["introduce"]); ?></p>
								<span class="ph_china"><?php echo ($image["plate_name"]); ?></span>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
							<div class="ph_img right">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
							</div>
						</li><?php endif; endforeach; endif; ?>
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "68"): ?><li>
							<div class="ph_text right">
								<p><?php echo ($image["introduce"]); ?></p>
								<span class="ph_china"><?php echo ($image["plate_name"]); ?></span>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
							<div class="ph_img left">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
							</div>
						</li><?php endif; endforeach; endif; ?>
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "69"): ?><li>
							<div class="ph_text left">
								<p><?php echo ($image["introduce"]); ?></p>							
								<span class="ph_china"><?php echo ($image["plate_name"]); ?></span>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
							<div class="ph_img right">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
							</div>
						</li><?php endif; endforeach; endif; ?>
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "70"): ?><li>
							<div class="ph_text right">
								<p><?php echo ($image["introduce"]); ?></p>							
								<span class="ph_china"><?php echo ($image["plate_name"]); ?></span>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">查看详情</a>
							</div>
							<div class="ph_img left">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
							</div>
						</li><?php endif; endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(window).ready(function(){
			$('.photograhy ul li').hover(function(){
				$(this).addClass('h_active');
			},function(){
				$(this).removeClass('h_active');
			})
		})
	</script><?php endif; ?>
<?php if(($plate_id) == "50"): ?><link rel="stylesheet" href="/weidu/Public/home/css/website.css" />
		<div id="website">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "72"): ?><div class="_banner">
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
			<div class="_banner-text">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div>		
		<p class="title-text">
			<?php echo ($image["introduce"]); ?>
		</p><?php endif; endforeach; endif; ?>
		<div class="content">
			<div class="work_show">
				<div class="mui-row">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(in_array(($image["plate_id"]), explode(',',"73,74"))): ?><div class="mui-col-lg-6 mui-col-md-6 mui-col-sm-6 work">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<div class="pHeight _pHeight">
							<h4 class="work_name"><?php echo ($image["plate_name"]); ?></h4>
							<a class="work_describ" href="#"><?php echo ($image["introduce"]); ?></a>
						</div>
					</div><?php endif; endforeach; endif; ?>
				</div>
				<div class="mui-row">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(in_array(($image["plate_id"]), explode(',',"75,76,77,78"))): ?><div class="mui-col-lg-3 mui-col-md-3 mui-col-sm-3 work">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
						<div class="pHeight _pHeight">
							<h4 class="work_name"><?php echo ($image["plate_name"]); ?></h4>
							<a class="work_describ" href="<?php echo ($image["plate_id"]); ?>"><?php echo ($image["introduce"]); ?></a>
						</div>
					</div><?php endif; endforeach; endif; ?>
				</div>			
			</div>
			<div class="bg_fb mui-row">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "79"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="left width-50"><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></div><?php endforeach; endif; ?>
				<div class="right width-50">					
					<div class="text_work">
						<h5 class="work_item"><?php echo ($image["plate_name"]); ?></h5>
						<span class="item_text">
							<?php echo ($image["customized-buttonpane"]); ?>
						</span>
					</div><?php endif; endforeach; endif; ?>
				</div>
			</div> 
			<div class="bg_fb mui-row">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "80"): ?><div class="left width-50">
					<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
					<div class="right right_text">
						<h5 class="item"><?php echo ($image["plate_name"]); ?></h5>
						<span class="item-text">
							<?php echo ($image["customized-buttonpane"]); ?>
						</span>
					</div>
				</div><?php endif; endforeach; endif; ?>
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "81"): ?><div class="right width-50">
					<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
					<div class=" left left_text">
						<h5 class="item"><?php echo ($image["plate_name"]); ?></h5>
						<span class="item-text">
							<?php echo ($image["customized-buttonpane"]); ?>
						</span>
					</div>
				</div><?php endif; endforeach; endif; ?>
			</div> 
		</div>
	</div>
	<script type="text/javascript">
		$('.work ').hover(function(){
				var pHeight=$(this).find('img').height();
				$('.pHeight').css('height',pHeight+'px');
//				$('._pHeight').css('margin-top',-pHeight-3+'px');
			}
		)
	</script><?php endif; ?>
<?php if(($plate_id) == "48"): ?><link rel="stylesheet" href="/weidu/Public/home/css/culture.css" />
	<div id="corporateCuture">	
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "82"): ?><div class="_banner">
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
			<div class="_banner-text background-no">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<div class="content ">		
			<ul class="tab_menu width-800 margin-124">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if($image["pp_id"] == 48 AND $image["plate_id"] != 107): if(($image["plate_id"]) == "82"): ?><li class="<?php if(($plate_id) == "48"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/48"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
			</ul>		
			<div class="tab-content">
				<!--品牌文化-->
				<div class="item culture">									
					<div class="companyProfile ">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "86"): ?><h5 class="c_title"><?php echo ($image["plate_name"]); ?>&nbsp;|&nbsp;<span class="english">COMPANY PROFILE</span></h5>
						<div class="cp_describ">	
							<div class="left cpimg_show">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): if(($child["img_desc"]) == "1"): ?><p class="top left">								
									<img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />								
								</p><?php endif; ?>
								<?php if(($child["img_desc"]) == "2"): ?><p class="bottom right">
									<img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
								</p><?php endif; endforeach; endif; ?>
							</div> 
							<div class="right cp_text">			
								<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>	
							</div>							
						</div><?php endif; endforeach; endif; ?>
					</div>		
					<div class="culturalConcept ">						
						<h5 class="c_title">文化理念&nbsp;|&nbsp;<span class="english">COMPANY CONCEPT</span></h5>
						<ul class="cc_item mui-row">
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "90"): ?><li class="young">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
								<p class="c_item"><?php echo ($image["plate_name"]); ?></p>
								<div class="text">
									<p>
										<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
									</p>
									<button class="ggren"><?php echo ($image["introduce"]); ?></button>
								</div>
							</li><?php endif; endforeach; endif; ?>						
						</ul>						
					</div>
					<div class="cooperativeEnterprise ">
						<h5 class="c_title">合作企业&nbsp;|&nbsp;<span class="english">COOPERATIVE ENTERPRISE</span></h5>
						<div class="c_logo">							
							<ul class="mui-row">
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "91"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><li><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></li><?php endforeach; endif; endif; endforeach; endif; ?>	
							</ul>							
						</div>
						
					</div>
					
				</div>

			</div>
			
		</div>
	</div>
	<div class="cultureBanner">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "107"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; endif; endforeach; endif; ?>
	</div><?php endif; ?>
<?php if(($plate_id) == "84"): ?><link rel="stylesheet" href="/weidu/Public/home/css/culture.css" />
	<div id="new">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "84"): ?><div class="_banner">		
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; ?>
			<div class="_banner-text background-no">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<div class="content">
			<ul class="tab_menu width-800 margin-124" >
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if($image["pp_id"] == 48 AND $image["plate_id"] != 107): if(($image["plate_id"]) == "82"): ?><li class="<?php if(($plate_id) == "48"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/48"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
			</ul>
			<div class="tab-content">
				<div class="item new">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if($image["pp_id"] == 84 AND $image["plate_id"] != 110): ?><div class="new_describ">
						<div class="text">
							<h5 class="title"><?php echo ($image["plate_name"]); ?></h5>
							<p>
								<?php echo ($image["introduce"]); ?>
							</p>
						</div>
						<div class="photo">
							<ul class="photos mui-row">
							<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): if(($child["img_desc"]) == "1"): ?><li class="left big_photo"><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></li><?php endif; ?>
								<li class="right  liheight">
									<?php if(($child["img_desc"]) == "2"): ?><div class="small_top"><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></div><?php endif; ?>
									<?php if(($child["img_desc"]) == "3"): ?><div class="small_bottom"><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></div><?php endif; ?>
								</li><?php endforeach; endif; ?>	
							</ul>
						</div>
					</div><?php endif; endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "107"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><!--添加内容--div容器-->
		<div class="cultureBanner">
			<img src="/weidu/<?php echo ($child["img_url"]); ?>"/>
		</div><?php endforeach; endif; endif; endforeach; endif; endif; ?>
<?php if(($plate_id) == "85"): ?><link rel="stylesheet" href="/weidu/Public/home/css/culture.css" />
<script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=Uu2WBOVIBQRLz8vGGAajjVTRozkFh1Qp&services=&t=20170823191629"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<script type="text/javascript" src="/weidu/Public/home/js/map.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
	<div id="us">
		<div class="_banner">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "85"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; endif; endforeach; endif; ?>
		</div>
		<div class="content">
			<ul class="tab_menu width-800 margin-124" >
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if($image["pp_id"] == 48 AND $image["plate_id"] != 107): if(($image["plate_id"]) == "82"): ?><li class="<?php if(($plate_id) == "48"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/48"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
			</ul>
			<div class="tab-content">
				<div class="us_pop" onmousewheel="return false;">
					<div class="join_mesege">
						<span class="close"></span>
						<div class="mesege">
							<p class="logo"><img src="/weidu/Public/home/img/c_logo.png"></p>
							<div class=" PositionData">
								<div class="left">
									<p class="p_title">岗位职责: </p>
									<ul>
										<li>1、熟练操作办公软件和包装设计的相关软件，如Photoshop、CoreIDRAW等</li>
										<li> 2、熟悉纸品印刷工艺流程，对印刷包装消费品（例如：彩盒、精品盒等）有深入了解，熟悉纸品类 包装行业设计和发展趋势，懂得包装印刷的基本知识；</li>
										<li>3、善于沟通、协调各部门工作，有责任心。</li>
									</ul>
									<p class="p_title">任职要求: </p>
									<ul>
										<li>1、性别不限，20—35岁，大专以上学历；</li>
										<li> 2、有包装设计1年以上工作经验；</li>
									</ul>
								</div>
								<div class="right">
									<p class="p_title">联系电话: </p>
									<ul>
										<li>1.13805729777（董老师） </li>
										<li>2.13805732986（韦总）</li>
									</ul>
									<p class="p_title">公司地址:</p>
									<p>杭州市西湖区转塘中国云机算产业园3栋2层D3  </p>
									<p>招聘人数：若干 </p>
									<p>发布时间：2017.7.02</p>
								</div>		
							</div>
							<button class="apply">申请职位</button>
						</div>
					</div>
				</div>
				<div class="item us">
					<div class="join">
						<h5 class="c_title">加入我们&nbsp;|&nbsp;<span class="english">JOIN US</span></h5>
						<div class="table-header-wrap">
							<table >
								<thead>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<tr>
										<th>工作岗位</th>
										<th>职位类别</th>
										<th>工作地点</th>
										<th>招聘人数</th>
										<th>发布时间</th>
										<th>操作</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="table-body-wrap">
							<table >
								<tbody>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<col width="16.6%"></col>
									<?php if(is_array($recruit_list)): foreach($recruit_list as $key=>$recruit): ?><tr>
										<td><?php echo ($recruit[recruit_name]); ?></td>
										<td><?php echo ($recruit[job]); ?></td>
										<td><?php echo ($recruit[place]); ?></td>
										<td><?php echo ($recruit[number]); ?></td>
										<td><?php echo (date("Y.m.d",$recruit[add_time])); ?></td>										
										<td class="chakan" id="<?php echo ($recruit[recruit_id]); ?>">查看详情</td>
									</tr><?php endforeach; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="contact">
						<h5 class="c_title">联系我们&nbsp;|&nbsp;<span class="english">CONTACT US</span></h5>
						<div class="contact_way">
							<ul class=" mui-row">
								<?php if(is_array($data)): foreach($data as $key=>$dat): if(($dat["id"]) == "85"): if(is_array($dat["child"])): foreach($dat["child"] as $key=>$da): ?><li class="mui-col-lg-3 mui-col-md-3 mui-col-sm-3 mui-col-xs-6">
									<p class="li-content">
										<h5 class="con-title"><?php echo ($da['name']); ?></h5>	
										<?php if(is_array($da["child"])): foreach($da["child"] as $key=>$d): ?><p class=" address"><?php echo ($d['name']); ?></p><?php endforeach; endif; ?>
									</p>
									
									<span class="white_div"></span>
								</li><?php endforeach; endif; endif; endforeach; endif; ?>
							</ul>
						</div>
						<div class="map" >
							<div id="allmap"></div>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</div>
	<div class="ide_coor">
		<div class="suggest" action="/weidu/index.php/Plate/message" enctype="multipart/form-data" method="post">
			<h5 class="i_title">意见合作&nbsp;|&nbsp;<span class="english">CONTACT US</span></h5>
			<form class="suggest_form" action="/weidu/index.php/Plate/message" enctype="multipart/form-data" method="post">
				<div class="mui-row width-80">
					<p class="left width-40">称呼<input type="text" name="message_name" value="" /></p>
					<p class="right width-40">电话<input type="text" name="message_phone" value="" /></p>
				</div>
				<p class="text width-80">具体内容  <textarea name="message_content" class="width-88" rows="5" cols="5"></textarea></p>
				<div class="mui-row btns width-80">
					<input type="hidden" name="plate_id" value="<?php echo ($plate_id); ?>" /> 
					<button type="reset">撤销</button>
					<button type="submit" class="black">提交</button>
				</div>
			</form>
		</div>		
	</div>
	<script type="text/javascript">
		$('button[type="submit"]').click(function(){
			var name = $('input[name="message_name"]').val();
			var phone = $('input[name="message_phone"]').val();
			var content = $('textarea[name="message_content"]').val();
			if(name == ''){
				alert('请输入您的名字');
				return false;
			}
			if(phone == ''){
				alert('请输入您的联系方式');
				return false;
			}
			if(content == ''){
				alert('请输入您想说的话');
				return false;
			}
			
		})
		$(document).ready(function(){
			$('.chakan').click(function(){
				var id = $(this).attr('id');
				$.ajax({
					   type: "POST",
					   url: "/weidu/index.php/Plate/recruit",
					   data: {"id":id},
					   dataType: "json",
					   success: function(data){	
							var html = '';
							html += '<div class="left">'+data.content+'</div>';
							html += '<div class="right">';
							html += '<p class="p_title">联系电话: </p>';
							html += '<ul>';
							html += '<li>'+data.phone+'</li>';
							html += '</ul>';
							html += '<p class="p_title">公司地址:</p>';
							html += '<p>'+data.address+'</p>';
							html += '<p>招聘人数：'+data.number+' </p>';
							html += '<p>发布时间：'+data.add_time+'</p>';
							html += '</div>';
									
							$(".PositionData").html(html);										
							$('.us_pop').css('display','block');	
					   }
				});
			})
			$('.join_mesege .close').click(function(){
				$('.us_pop').css('display','none');
			})
		})
		
	</script><?php endif; ?>
<?php if(($plate_id) == "83"): ?><link rel="stylesheet" href="/weidu/Public/home/css/culture.css" />
	<div id="corporateCuture">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "83"): ?><div class="_banner">			
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>			
			<div class="_banner-text background-no">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<div class="content ">
			<ul class="tab_menu width-800 margin-124" >
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if($image["pp_id"] == 48 AND $image["plate_id"] != 107): if(($image["plate_id"]) == "82"): ?><li class="<?php if(($plate_id) == "48"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/48"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
			</ul>
			<div class="tab-content">
				<div class="item team" id="team">
					<?php if(is_array($page_list)): foreach($page_list as $key=>$pa): ?><div class="person_describ">
						<div class="text">
							<h5 class="name"><?php echo ($pa['plate_name']); ?></h5>
							<p>
								<?php echo ($pa['introduce']); ?>
							</p>
						</div>
						<div class="photo">
							<img src="/weidu/<?php echo ($pa["img_url"]); ?>" alt="" />
						</div>
					</div><?php endforeach; endif; ?>
					
				</div>
				<ul id="page" class="pageMa">
					<?php echo ($page); ?>
				</ul>
			</div>	
	</div>
	</div>
	<div class="cultureBanner">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "107"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; endif; endforeach; endif; ?>
	</div><?php endif; ?>
<?php if(($plate_id) == "20"): ?><link rel="stylesheet" href="/weidu/Public/home/css/industrial.css" />
<div id="industrial">
	<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "145"): ?><div class="in_banner">
	<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
	</div>
	<div class="in_describ">
		<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
	</div><?php endif; endforeach; endif; ?>
	<div class="content">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "146"): ?><div class="bicycle mui-row">
			<div class="mui-col-lg-5 mui-col-md-5 mui-col-sm-5 mui-col-xs-6" >
				<h5><?php echo ($image["plate_name"]); ?></h5>
				<div class="descript_text">
				   <?php echo ($image["introduce"]); ?>  
				</div>
				<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
			</div>
			<div class="mui-col-lg-6 mui-col-md-6 mui-col-sm-6 mui-col-xs-6 imgs" >
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<ul class="appliances mui-row">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "147"): ?><li >
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "148"): ?><li class="mindel">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "149"): ?><li >
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; endforeach; endif; ?>
		</ul>
		<div class="big-appliances">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "150"): ?><div class="sound">
				<div class="mui-row sound_pro">
					<div class="img">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
						<p><?php echo ($image["plate_name"]); ?></p>
					</div>
					<div class="des_text">
						<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
					</div>
				</div>
			</div><?php endif; ?>
			<?php if(($image["plate_id"]) == "151"): ?><div class="smallapp">
				<div class="mui-row  smallapp_pro">
					<div class="des_text">
						<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
					</div>
					<div class="img">
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
						<p><?php echo ($image["plate_name"]); ?></p>
					</div>
				</div>			
			</div><?php endif; endforeach; endif; ?>
		</div>
		<ul class="ider">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "152"): ?><li class="id1">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "153"): ?><li class="id2">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "154"): ?><li class="id3">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "155"): ?><li class="id4">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "156"): ?><li class="id5">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; ?>
			<?php if(($image["plate_id"]) == "157"): ?><li class="id6">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
				<p><?php echo ($image["plate_name"]); ?></p>
			</li><?php endif; endforeach; endif; ?>
		</ul>
	</div>
</div><?php endif; ?>
<?php if(($plate_id) == "46"): ?><link rel="stylesheet" href="/weidu/Public/home/css/web.css" />
<script type="text/javascript" src="/weidu/Public/home/js/jquery.timelinr-0.9.3.js" ></script>
	<div id="webset">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "158"): ?><div class="_banner">
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
			<div class="_banner-text">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<?php if(is_array($plate_all)): foreach($plate_all as $key=>$plate): if(($plate["plate_id"]) == "159"): ?><div class="text">
			<?php echo htmlspecialchars_decode($plate['customized-buttonpane']);?>
		</div><?php endif; endforeach; endif; ?>
		<div class="content">
			<ul class="tab_menu" >
			<?php if(is_array($plate_all)): foreach($plate_all as $key=>$plate): if($plate["parent_id"] == 46): if(($plate["plate_id"]) == "166"): ?><li class="<?php if(($plate_id) == "46"): ?>active<?php endif; ?>"><a href="/weidu/index.php/Plate/index/id/46"><?php echo ($plate["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $plate["plate_id"]): ?>active<?php endif; ?>"><a href="/weidu/index.php/Plate/index/id/<?php echo ($plate["plate_id"]); ?>"><?php echo ($plate["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>				
			</ul>
			<div class="tab-content">
				<!--web-->
				<div class="item web">
					<div id="timeline">
						<ul id="dates" class="left">
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "160"): ?><li><a href="#"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endforeach; endif; ?>							
						</ul>
						<ul id="issues" class="right">
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "160"): ?><li id="#app1">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" width="280"/><?php endforeach; endif; ?>										
								<h5></h5>
								<p>
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
							</li><?php endif; endforeach; endif; ?>
						</ul>
						<div id="grad_top"></div>
						<div id="grad_bottom"></div>
						<a href="#" id="next">+</a>
						<a href="#" id="prev">-</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(window).ready(function(){
			var hsize=$(window).height();
			$().timelinr({
				orientation: 'vertical',
				issuesSpeed: 300,
				datesSpeed: 100,
				issuesSpeed: 500,
				arrowKeys: 'true',
				startAt: 3
			});
			//左侧激活状态下的背景图效果替换
	$("#dates li a").click(function(){
		$("#dates li").css('background','url(/weidu/Public"/home/img/appPoint.jpg") left center no-repeat');
		$(this).parent().css('background','url("/weidu/Public/home/img/point_on.png") left center no-repeat');
	})
	$("#prev").click(function(){
		$("#dates li").css('background','url("/weidu/Public/home/img/appPoint.jpg") left center no-repeat');
		setTimeout(cssbg,100);
	})
	$("#next").click(function(){
		$("#dates li").css('background','url("/weidu/Public/home/img/appPoint.jpg") left center no-repeat');
		setTimeout(cssbg,100);	
	})
	function cssbg(){
		$("#dates .selected").parent().css('background','url("/weidu/Public/home/img/point_on.png") left center no-repeat');
	}
		})
	</script><?php endif; ?>
<?php if(($plate_id) == "167"): ?><link rel="stylesheet" href="/weidu/Public/home/css/web.css" />
<script type="text/javascript" src="/weidu/Public/home/js/jquery.timelinr-0.9.3.js" ></script>
	<div id="webset">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "169"): ?><div class="_banner">
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
			<div class="_banner-text">
				<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
			</div>
		</div><?php endif; endforeach; endif; ?>
		<?php if(is_array($plate_all)): foreach($plate_all as $key=>$plate): if(($plate["plate_id"]) == "168"): ?><div class="text">
			<?php echo htmlspecialchars_decode($plate['customized-buttonpane']);?>
		</div><?php endif; endforeach; endif; ?>
		<div class="content">
			<ul class="tab_menu" >
				<?php if(is_array($plate_all)): foreach($plate_all as $key=>$plate): if($plate["parent_id"] == 46): if(($plate["plate_id"]) == "166"): ?><li class="<?php if(($plate_id) == "46"): ?>active<?php endif; ?>"><a href="/weidu/index.php/Plate/index/id/46"><?php echo ($plate["plate_name"]); ?></a></li>
					<?php else: ?>
					<li class="<?php if(($plate_id) == $plate["plate_id"]): ?>active<?php endif; ?>"><a href="/weidu/index.php/Plate/index/id/<?php echo ($plate["plate_id"]); ?>"><?php echo ($plate["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
			</ul>
			<div class="tab-content">
				<!--app-->
				<div class="item app">
					<div id="timeline">
						<ul id="dates" class="left">						
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "170"): ?><li><a href="#"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endforeach; endif; ?>						
						</ul>
						<ul id="issues" class="right">
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "170"): ?><li id="#app1">
								<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" width="280"/><?php endforeach; endif; ?>										
								<h5></h5>
								<p>
									<?php echo ($image["introduce"]); ?>
								</p>
								<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
							</li><?php endif; endforeach; endif; ?>
						</ul>
						<div id="grad_top"></div>
						<div id="grad_bottom"></div>
						<a href="#" id="next">+</a>
						<a href="#" id="prev">-</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<script type="text/javascript">
	$(window).ready(function(){
		var hsize=$(window).height();
		$().timelinr({
			orientation: 'vertical',
			issuesSpeed: 300,
			datesSpeed: 100,
			issuesSpeed: 500,
			arrowKeys: 'true',
			startAt: 3
		});
	//左侧激活状态下的背景图效果替换
	$("#dates li a").click(function(){
		$("#dates li").css('background','url(/weidu/Public"/home/img/appPoint.jpg") left center no-repeat');
		$(this).parent().css('background','url("/weidu/Public/home/img/point_on.png") left center no-repeat');
	})
	$("#prev").click(function(){
		$("#dates li").css('background','url("/weidu/Public/home/img/appPoint.jpg") left center no-repeat');
		setTimeout(cssbg,100);
	})
	$("#next").click(function(){
		$("#dates li").css('background','url("/weidu/Public/home/img/appPoint.jpg") left center no-repeat');
		setTimeout(cssbg,100);	
	})
	function cssbg(){
		$("#dates .selected").parent().css('background','url("/weidu/Public/home/img/point_on.png") left center no-repeat');
	}
		})
	</script><?php endif; ?>
<?php if(($plate_id) == "113"): ?><link rel="stylesheet" href="/weidu/Public/home/css/photograhy.css" />
<link rel="stylesheet" href="/weidu/Public/home/css/common.css" />
<div id="video">
	<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "113"): ?><div class="con_banner">
		<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
	</div><?php endif; endforeach; endif; ?>
	<div class="content">
		<?php if(is_array($plate_all)): foreach($plate_all as $key=>$plate): if(($plate["plate_id"]) == "113"): ?><div class="je_describ">
			<?php echo htmlspecialchars_decode($plate['customized-buttonpane']);?>
		</div><?php endif; endforeach; endif; ?>
		<div class="jew_items">
			<ul class="tab_menu width-800 margin-124" >
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "52"): if(($image["plate_id"]) == "66"): ?><li class="<?php if(($plate_id) == "52"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/52"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>			
			</ul>
			<div class="tab-content">				
				<!--影视制作-->
				<div class="item ">
					<!--<ul class="eh_bg width-800" >-->
						<!-- //轮播 -->
						<div class="indexmaindiv" id="indexmaindiv00">
							<div class="indexmaindiv0 clearfix" >
								<button id="goleft"><img src="/weidu/Public/home/img/left.png" alt=""></button>
								<div class="number1-3" style="">
									<span id="smallNumber">1</span class="bigNumber">
									<span class="bigNumber" >/</span>
									<span class="bigNumber" id="bigNumber">3</span>
								</div>

								<div class="maindiv0" id="maindiv0">
									<ul id="count0">
										<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(in_array(($image["pp_id"]), explode(',',"176,184,192"))): ?><li>										
											<div class="worksShow">
												<div>	
													<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "176"): if(($image["sort_order"]) == "1"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop img1-1" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:21.9%;left:24%;"><?php endforeach; endif; ?>
														<div class="pop_describ" >
															<h3 style=""><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>													
													<?php if(($image["sort_order"]) == "2"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:39.6%;left:46%;top: 9.5%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 41.8%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "3"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:21.9%;left:2%;top:28.6%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 100%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "4"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:16%;left:24%;top:39.0%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 100%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "5"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:40.9%;left:40.1%;top:39.0%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 56.2%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "6"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:22.9%;left:17%;top:67.4%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 80%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "7"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:24%;left:40.1%;top:79.8%;"><?php endforeach; endif; ?>	
														<div class="pop_describ" style="padding-bottom: 47%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; endif; endforeach; endif; ?>
												</div>
											</div>												
										</li>									
										<li>										
											<div class="worksShow">
												<div>	
													<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "184"): if(($image["sort_order"]) == "1"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop img1-1" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:21.9%;left:24%;"><?php endforeach; endif; ?>
														<div class="pop_describ" >
															<h3 style=""><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>													
													<?php if(($image["sort_order"]) == "2"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:39.6%;left:46%;top: 9.5%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 41.8%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "3"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:21.9%;left:2%;top:28.6%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 100%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "4"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:16%;left:24%;top:39.0%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 100%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "5"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:40.9%;left:40.1%;top:39.0%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 56.2%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "6"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:22.9%;left:17%;top:67.4%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 80%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "7"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:24%;left:40.1%;top:79.8%;"><?php endforeach; endif; ?>	
														<div class="pop_describ" style="padding-bottom: 47%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; endif; endforeach; endif; ?>
												</div>
											</div>												
										</li>								
										<li>										
											<div class="worksShow">
												<div>	
													<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "192"): if(($image["sort_order"]) == "1"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop img1-1" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:21.9%;left:24%;"><?php endforeach; endif; ?>
														<div class="pop_describ" >
															<h3 style=""><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>													
													<?php if(($image["sort_order"]) == "2"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:39.6%;left:46%;top: 9.5%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 41.8%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "3"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:21.9%;left:2%;top:28.6%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 100%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn">
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "4"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:16%;left:24%;top:39.0%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 100%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "5"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:40.9%;left:40.1%;top:39.0%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 56.2%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "6"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:22.9%;left:17%;top:67.4%;"><?php endforeach; endif; ?>
														<div class="pop_describ" style="padding-bottom: 80%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; ?>
													<?php if(($image["sort_order"]) == "7"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="img_pop" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>);width:24%;left:40.1%;top:79.8%;"><?php endforeach; endif; ?>	
														<div class="pop_describ" style="padding-bottom: 47%;">
															<h3><?php echo ($image["plate_name"]); ?></h3>
															<a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="btn" >
															<button> 查看详情 </button>
															</a>
														</div>
													</div><?php endif; endif; endforeach; endif; ?>
												</div>
											</div>												
										</li><?php endif; endforeach; endif; ?>
									</ul>
								</div>
								<button id="goright" ><img src="/weidu/Public/home/img/right.png" alt=""></button>
							</div>
						</div>
					<!--</ul>-->
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
$(function(){
//轮播
oDivw = $("#indexmaindiv00").width();
	 liw = oDivw*1;
	 oBtnLeft = document.getElementById("goleft");
	 oBtnRight = document.getElementById("goright");
	 oDiv = document.getElementById("indexmaindiv00");
	 oDiv1 = document.getElementById("maindiv0");
	 oUl = oDiv.getElementsByTagName("ul")[0];
	 aLi = oUl.getElementsByTagName("li");
	 now = -1 * (aLi[0].offsetWidth + 160);

	$("#count0 li").width(liw);
	$("#count0").width(liw*3);
	
	oUl.style.width = aLi.length * (aLi[0].offsetWidth + 35)+ 10 + 'px';

	oBtnRight.onclick = function () {
		snumber = parseInt($("#smallNumber").text());
		//var n = Math.floor((aLi.length * (aLi[0].offsetWidth + 13) + oUl.offsetLeft) / aLi[0].offsetWidth);


		if (snumber >= 3) {
			move(oUl, 'left', 0);
			snumber = 1;
			$("#smallNumber").text(snumber);
		}
		else {
			//alert( oUl.offsetLeft +" " + now +" "+aLi[0].offsetWidth+" "+liw);
			move(oUl, 'left', oUl.offsetLeft + now);
			snumber = snumber+1;
			$("#smallNumber").text(snumber);
		}
	}
	oBtnLeft.onclick = function () {
		snumber = parseInt($("#smallNumber").text());
		var now1 = -Math.floor((aLi.length / 1)) * 1 * (aLi[0].offsetWidth + 36);

		if (snumber == 1) {
			//alert(now1+" "+aLi[0].offsetWidth);
			move(oUl, 'left', -2348);
			snumber = 3;
			$("#smallNumber").text(snumber);
		}
		else {
			snumber = snumber-1;
			$("#smallNumber").text(snumber);
			move(oUl, 'left', oUl.offsetLeft - now);
		}
	}
	var timer = setInterval(oBtnRight.onclick, 2555000);
	oDiv.onmouseover = function () {
		clearInterval(timer);
	}
	oDiv.onmouseout = function () {
		timer = setInterval(oBtnRight.onclick, 2555000);
	}

function getStyle(obj, name) {
	if (obj.currentStyle) {
		return obj.currentStyle[name];
	}
	else {
		return getComputedStyle(obj, false)[name];
	}
}

function move(obj, attr, iTarget) {
	clearInterval(obj.timer)
	obj.timer = setInterval(function () {
		var cur = 0;
		if (attr == 'opacity') {
			cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
		}
		else {
			cur = parseInt(getStyle(obj, attr));
		}
		var speed = (iTarget - cur) / 6;
		speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
		if (iTarget == cur) {
			clearInterval(obj.timer);
		}
		else if (attr == 'opacity') {
			obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
			obj.style.opacity = (cur + speed) / 100;
		}
		else {
			obj.style[attr] = cur + speed + 'px';
		}
	}, 30);
} 

})		
		
</script><?php endif; ?>
<?php if(($plate_id) == "13"): ?><link rel="stylesheet" href="/weidu/Public/home/css/common.css" />
<script type="text/javascript" src="/weidu/Public/home/js/jquery.js" ></script>
<script type="text/javascript" src="/weidu/Public/home/js/CloudCarousel.1.0.5.js" ></script>
<script type="text/javascript">
$(document).ready(function(){						   
	// 这初始化容器中指定的元素，在这种情况下，旋转木马.
	$("#carousel1").CloudCarousel({	
		reflOpacity:0.0,
		minScale:0.5,		
		xPos:450,
		yPos:010,
		buttonLeft: $('#but1'),
		buttonRight: $('#but2'),
		altBox: $("#alt-text"),
		titleBox: $("#title-text"),				
		FPS:30,
		reflHeight:86,
		reflGap:2,
		yRadius:40,
		autoRotateDelay: 5500,
		speed:0.2,
		mouseWheel:false,
		bringToFront:true,
		autoRotate:'no'
	});	
});
</script>
<div id="jewler">
	<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "200"): ?><div class="con_banner">
	<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
	</div><?php endif; endforeach; endif; ?>
	<div class="content">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "200"): ?><div class="je_describ">
			<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
		</div><?php endif; endforeach; endif; ?>
		<div class="jew_items">
				<ul class=" width-800 margin-124" >
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "13"): if(($image["plate_id"]) == "200"): ?><li class="<?php if(($plate_id) == "13"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/13"><?php echo ($image["plate_name"]); ?></a></li>
				<?php else: ?>
				<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>					
				</ul>
			<div class="tab-content">
				<!--珠宝设计-->
				<div class="item desc" >	
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "201"): ?><div class="desc_stage">
					<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
					</div><?php endif; endforeach; endif; ?>
					<div class="desc_work">
						<ul class="desc_show">
							<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "202"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><li class="s<?php echo ($image["sort_order"]); ?> <?php if(($image["sort_order"]) == "1"): ?>s_active<?php endif; ?>"><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /></li><?php endforeach; endif; endif; endforeach; endif; ?>
						</ul>
					</div>	

					<div id="carousel1">
					  <p id="title-text"></p>
					  <p id="alt-text"></p>
					  <?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "208"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a target="_parent" class="mofu11"><img class="cloudcarousel" src="/weidu/<?php echo ($child["img_url"]); ?>"/></a><?php endforeach; endif; endif; endforeach; endif; ?>					  
						<ul class="btns" style="position:absolute;top:50%;">
							<li id="but1" class="">&lt</li>
							<li class=""><span id="nubmerSS" class="">1</span>/<span id="numberBB" class="">3</span></li>
							<li id="but2" class="">&gt</li>
						</ul>
					</div>

					<script>
					var numberBB = $("#carousel1 a").size();
					$("#numberBB").text(numberBB);
					</script>
	
					<div class="desc_mind">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "212"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><?php endforeach; endif; endif; endforeach; endif; ?>
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var hsize=$(window).height();
		var wsize=$(window).width();
		$(".flex_height").css('height',hsize+'px');
		$(".bg_height").height((hsize+280));
		$('.desc_show li').click(function(){
			$(this).addClass('s_active');
			$(this).siblings().removeClass('s_active');
		});
		$('.tab_menu li').click(function(){
			$(this).addClass('active').siblings().removeClass('active');
				
		});	
	})
</script><?php endif; ?>
<?php if(($plate_id) == "213"): ?><link rel="stylesheet" href="/weidu/Public/home/css/common.css" />
<div id="jewler">
	<div class="con_banner">
	<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "213"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; endif; endforeach; endif; ?>
	</div>
	<div class="content">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "213"): ?><div class="je_describ">
			<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
		</div><?php endif; endforeach; endif; ?>
		<div class="jew_items">
				<ul class="tab_menu width-800 margin-124" >
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "13"): if(($image["plate_id"]) == "200"): ?><li class="<?php if(($plate_id) == "13"): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/13"><?php echo ($image["plate_name"]); ?></a></li>
					<?php else: ?>
					<li class="<?php if(($plate_id) == $image["plate_id"]): ?>active<?php endif; ?> width-20"><a href="/weidu/index.php/Plate/index/id/<?php echo ($image["plate_id"]); ?>"><?php echo ($image["plate_name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>					
				</ul>
			<div class="tab-content">		
				<!--珠宝展示-->
				<div class=" item jew_show">
					<ul class="eh_bg">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "214"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="eh<?php echo ($image["sort_order"]); ?>">
							<li>
								<img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" />
								<p><?php echo ($image["plate_name"]); ?></p>
							</li>
						</a><?php endforeach; endif; endif; endforeach; endif; ?>						
					</ul>
					<ul class="ez_bg">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "222"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="ez<?php echo ($image["sort_order"]); ?>">
							<li>
								<img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><br />
								<p><?php echo ($image["plate_name"]); ?></p>
							</li>
						</a><?php endforeach; endif; endif; endforeach; endif; ?>							
					</ul>
					<ul class="jz_bg">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "228"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="jz<?php echo ($image["sort_order"]); ?>">
							<li>
								<img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><br />
								<p><?php echo ($image["plate_name"]); ?></p>
							</li>
						</a><?php endforeach; endif; endif; endforeach; endif; ?>						
					</ul>
					<ul class="sl_bg">
						<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "236"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><a href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>" class="sl<?php echo ($image["sort_order"]); ?>">
							<li>
								<img src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" /><br />
								<p><?php echo ($image["plate_name"]); ?></p>
							</li>
						</a><?php endforeach; endif; endif; endforeach; endif; ?>						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><?php endif; ?>
<?php if(($plate_id) == "51"): ?><link rel="stylesheet" href="/weidu/Public/home/css/graphicDesign.css" />
<div id="plane" style="background: rgba(246,246,246,1);">
	<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "51"): ?><div class="in_banner bannerbg">	
		<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>"/><?php endforeach; endif; ?>
		<div class="title1">
			<?php echo htmlspecialchars_decode($image['customized-buttonpane']);?>
		</div>		
	</div><?php endif; endforeach; endif; ?>
	<div class="content">
		<?php if(is_array($plate_all)): foreach($plate_all as $key=>$pla): if(($pla["plate_id"]) == "242"): ?><div style="text-align:center;">
			<p class="qianyan">
			<?php echo htmlspecialchars_decode($pla['customized-buttonpane']);?>
			</p>
		</div><?php endif; endforeach; endif; ?>
		<div class="posterDesign">
		<div class="ceng1">
			<div style="height:0;" class="line-text">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "244"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img style=" width: 50%;float: left;" src="/weidu/<?php echo ($child["img_url"]); ?>" alt=""><?php endforeach; endif; ?>
				<span class="imgBtn line"><?php echo ($image["plate_name"]); ?></span><?php endif; endforeach; endif; ?>
				
			</div>
			<div style="float: right;margin-bottom: 8%;">
				<?php if(is_array($plate_all)): foreach($plate_all as $key=>$pla): if(($pla["plate_id"]) == "243"): echo htmlspecialchars_decode($pla['customized-buttonpane']); endif; endforeach; endif; ?>
			</div>
			<div style="font-size: 0;vertical-align: bottom;" class="line-text">
				<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "245"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img style="margin-left: 1.2%;width: 35.5%;" src="/weidu/<?php echo ($child["img_url"]); ?>" alt=""><?php endforeach; endif; ?>
				<span class="imgBtn line2"><?php echo ($image["plate_name"]); ?></span><?php endif; endforeach; endif; ?>
			</div>
		</div>

		<div class="ceng2">
		<div class="line-text">
			<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "246"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img style="width: 75.3%;" src="/weidu/<?php echo ($child["img_url"]); ?>" alt=""><?php endforeach; endif; ?>
			<span class="imgBtn line3"><?php echo ($image["plate_name"]); ?></span><?php endif; ?>
			<?php if(($image["plate_id"]) == "247"): ?><div style="width: 22%;float: right;position: absolute;top: 0;right: 0;" class="line-text">
				<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img style="width:100%;display: block;" src="/weidu/<?php echo ($child["img_url"]); ?>" alt=""><?php endforeach; endif; ?>
				<span class="imgBtn line4"><?php echo ($image["plate_name"]); ?></span>
			</div><?php endif; endforeach; endif; ?>
		</div>
		</div>

	<!-- //轮播 -->
	<div class="indexmaindiv" id="indexmaindiv00">
		<div id="gundongBg" style="background:url(/weidu/Public/home/img/gundongbg.jpg)">
			<img src="/weidu/Public/home/img/gundongbg.jpg" alt="">
		</div>
		<div class="indexmaindiv0 clearfix">
			<!-- <div id="goleft" style="z-index:30;background"></div> -->
			<button id="goleft"><img src="/weidu/Public/home/img/left_.png" alt=""></button>
			<div class="maindiv0 " id="maindiv0">
				<ul id="count0">
					<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "248"): ?><li>
						<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><div class="detailimg img<?php echo ($image["sort_order"]); ?>" style="background:url(/weidu/<?php echo ($child["img_url"]); ?>); background-size: 100% 100%;">
							<a class="fontBtn xiangqing" href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
						</div><?php endforeach; endif; ?>
					</li><?php endif; endforeach; endif; ?>
				</ul>
			</div>

			<button id="goright" ><img src="/weidu/Public/home/img/right_.png" alt=""></button>
		</div>
	</div>
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "255"): ?><div class="ceng3">
			<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img id="ceng3img<?php echo ($child["img_desc"]); ?>" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" style=""><?php endforeach; endif; ?>
			<a class="fontBtn xiangqing" href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
		</div><?php endif; endforeach; endif; ?>

		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "256"): ?><div class="ceng4">
		<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt=""><?php endforeach; endif; ?>
		<a class="fontBtn xiangqing" href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
		</div><?php endif; endforeach; endif; ?>

		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["plate_id"]) == "257"): ?><div class="ceng5">
		<?php if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img src="/weidu/<?php echo ($child["img_url"]); ?>" alt=""><?php endforeach; endif; ?>
		<a class="fontBtn xiangqing" href="/weidu/index.php/Plate/view/id/<?php echo ($image["plate_id"]); ?>">查看详情</a>
		</div><?php endif; endforeach; endif; ?>
		
		<div class="ceng6">
		<?php if(is_array($images_list)): foreach($images_list as $key=>$image): if(($image["pp_id"]) == "258"): if(is_array($image['child'])): foreach($image['child'] as $key=>$child): ?><img class="imgBtn" src="/weidu/<?php echo ($child["img_url"]); ?>" alt="" ><?php endforeach; endif; endif; endforeach; endif; ?>
		</div>		
		<div></div>		
		</div>
	</div>
</div>
<script type="text/javascript">
$(window).ready(function(){

	//设置图片宽度
	var oDivw = $("#indexmaindiv00").width();
	var liw = oDivw*0.93;

	var oBtnLeft = document.getElementById("goleft");
	var oBtnRight = document.getElementById("goright");
	var oDiv = document.getElementById("indexmaindiv00");
	var oDiv1 = document.getElementById("maindiv0");
	var oUl = oDiv.getElementsByTagName("ul")[0];
	var aLi = oUl.getElementsByTagName("li");
	var now = -1 * (aLi[0].offsetWidth + 160);

	$("#count0 li").width(liw);
	
	oUl.style.width = aLi.length * (aLi[0].offsetWidth + 35)+ 10 + 'px';
	oBtnRight.onclick = function () {
		var n = Math.floor((aLi.length * (aLi[0].offsetWidth + 13) + oUl.offsetLeft) / aLi[0].offsetWidth);

		if (n < 1) {
			move(oUl, 'left', 0);
		}
		else {
			//alert( oUl.offsetLeft +" " + now +" "+aLi[0].offsetWidth+" "+liw);
			move(oUl, 'left', oUl.offsetLeft + now);
		}
	}
	oBtnLeft.onclick = function () {
		var now1 = -Math.floor((aLi.length / 1)) * 1 * (aLi[0].offsetWidth + 36);

		if (oUl.offsetLeft > 0) {
			alert(now1+" "+aLi[0].offsetWidth);
			move(oUl, 'left', -6150);
		}
		else {
			move(oUl, 'left', oUl.offsetLeft - now);
		}
	}
	var timer = setInterval(oBtnRight.onclick, 25000);
	oDiv.onmouseover = function () {
		clearInterval(timer);
	}
	oDiv.onmouseout = function () {
		timer = setInterval(oBtnRight.onclick, 25000);
	}

function getStyle(obj, name) {
	if (obj.currentStyle) {
		return obj.currentStyle[name];
	}
	else {
		return getComputedStyle(obj, false)[name];
	}
}

function move(obj, attr, iTarget) {
	clearInterval(obj.timer)
	obj.timer = setInterval(function () {
		var cur = 0;
		if (attr == 'opacity') {
			cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
		}
		else {
			cur = parseInt(getStyle(obj, attr));
		}
		var speed = (iTarget - cur) / 6;
		speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
		if (iTarget == cur) {
			clearInterval(obj.timer);
		}
		else if (attr == 'opacity') {
			obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
			obj.style.opacity = (cur + speed) / 100;
		}
		else {
			obj.style[attr] = cur + speed + 'px';
		}
	}, 30);
} 
})
</script><?php endif; ?>
<div class="footer">
	<p class="logo"><img src="/weidu/<?php echo ($company["logo"]); ?>" alt="" /></p>
	<p class="foot_name"><?php echo ($company["company_name"]); ?></p>
	<p class="foot_phone"><?php echo ($company["phone"]); ?></p>
	<p class="foot_profile"><?php echo ($company["profile"]); ?></p>
	<p class="foot_address">地址：<?php echo ($company["address"]); ?></p>
	<p><?php echo ($company["information"]); ?></p>
</div>
<!--右侧导航栏-->

<script type="text/javascript"> 
	$(window).bind("load", function() { 
		var footerHeight = 0,footerTop = 0,$footer = $(".foot"); 
			positionFooter(); 
		function positionFooter() { 			
			footerHeight = $footer.height(); //取到div#footer高度 
			footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px"; //div#footer离屏幕顶部的距离 
		//如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位 
		if ( ($(document.body).height()+footerHeight) < $(window).height()) { 
				$footer.css({ 
				position: "absolute" 
				}).stop().animate({ 
				top: footerTop 
				}); 
			} else { 
			$footer.css({ 
			position: "static" 
			}); 
			} 
			} 
		$(window).scroll(positionFooter).resize(positionFooter); 
	}); 
</script> 
<div class="right nav_right">
	<ul>
		<li class="nr_item qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($company["qq"]); ?>&site=qq&menu=yes" target="_blank"><img src="/weidu/Public/home/img/icon/qq.png"/></a></li>
		<li class="nr_item weixin">
			<a href="#"><img src="/weidu/Public/home/img/icon/weixin.png"/></a>
			<span class="mui-icon weixingerweima" id="weixingerweima"><img src="/weidu/<?php echo ($company["qr"]); ?>" alt="" /></span>
		</li>
		<li class="nr_item severs">
			<a href="#"><img src="/weidu/Public/home/img/icon/severs.png"/></a>
			<span class="tell"><?php echo ($company["phone"]); ?></span>
		</li>
		<li class="top"><a href="#"><img src="/weidu/Public/home/img/icon/top.png"/></a></li>
	</ul>
</div>
<script type="text/javascript">
	<!--右侧导航栏js-->
	$(document).ready(function(){
		$('.qq').hover(function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/qq_on.png')
		},function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/qq.png')
		});
		$('.weixin').hover(function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/weixin_on.png')
		},function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/weixin.png')
		});
		$('.severs').hover(function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/severs_on.png')
		},function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/severs.png')
		});
		$('.top').hover(function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/top_on.png')
		},function(){
			$(this).find('a img').attr('src','/weidu/Public/home/img/icon/top.png')
		});
		$('.prev,.next').parent().css('background-color','#fff');
		$(window).scroll(function(){
			var top=$('.nav_right .top');
			 var winH = $(window).height();//可视窗口高度
			 var iTop = $(window).scrollTop();//鼠标滚动的距离
			if(iTop>=winH){
				$('.nr_item').css('bottom','70px');
				top.fadeIn();
			 }else{
				$('.nav_right').css('bottom','0px');
				top.fadeOut();
			 }
		});
		$('.nav_right .top').click(function(){
		$('body,html').animate({scrollTop:0},1000);
		return false;
	});
	})
	var w=$(window).width();
	if(w==1024||w==1280){
		$('.content').css({'width':'100%','max-width':'900px'});
		$('.build-text').css({'width':'340px','height':'289px','overflow':'hidden'});
		$('.bicycle .imgs:after').css('left','0');
		$('#industrial .img,#industrial .des_text').css('width','45%');
		$('.des_text,.smallapp .img').css('margin-left','72px');
		$('.sound:after').css('height','448px');
		$('.ider').css({'margin':'30% 10%'});
		$('.ider li.id3').css('margin-top','250px');
		$('.desc_show').css({'width':'100%','height':'647px'});
		$('#carousel1').css({'width':'100%'});
		$('#carousel1 div').css('left','-10%');
		$('#plane div.maindiv0').css('margin-left','0');
		$('#goleft').css({'bottom':'-38%','right':'17%'});
		$('.number1-3').css({'bottom':'-35%','right':'2%'});
		$('#goright').css({'bottom':'-36%','right':'-2%'});
		$('.pro_item p.pro_name').css('margin-left','9%');
		$('.pHeight .right-35').css('left','36%');
		$('.top-34').css('top','22%');
		$('p.pro_name').css('padding','0 18%');
		$('.pro_item  p.pro_name').css('padding','0 12%');
		$('#carousel1 .btns').css('width','11%');
		$('.des_text h5').css('margin-top','40px');
		$('.smallapp_pro .des_text').css('margin-left','0');
		$('.smallapp_pro').css('margin-top','-60%');
		$('.padding-134').css('height','279px');
		$('.person_describ:nth-child(even) .text, .new_describ:nth-child(even) .text').css('margin-right','3%');
		$('.person_describ .text').css('width','54%');
		$('#website .item').css('margin','12% 10% 0 10%');
		$('#website .item-text, #website .item').css('margin','21px 10%');
		$('#photograhy .ph_content .tab_menu').removeClass('margin-124');
		$('#photograhy .ph_content').css({'max-width':'900px'});
		$('.c_item').css({'width':'100px','height':'100px','font-size':'25px','line-height':'100px','margin-left':'30%','padding':'0'});
		$('.lHeight').css('height','254px');
		$('.bicycle h5').css('margin','50px auto');
		$('.bicycle a').css('margin-bottom','96px');
		$('.join_mesege').css({'margin':'12% auto','height':'556px'});
		$('.close').css('margin-right','0');
		$('.mesege').css('margin','25px 5%');
		$('#us .logo').css('margin','13px auto');
		$('.right_icon span').css('margin-top','-2px');
	}else{
		$('.content').css({'width':'100%','max-width':'1280px'});
	}
</script>